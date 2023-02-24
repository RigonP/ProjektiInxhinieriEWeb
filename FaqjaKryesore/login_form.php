<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){


   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.php');

      }else if($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:user_page.php');

      }
     
   }else{
      $error[] = 'Email ose password jane gabim !';
   }

};
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Regjistrimi</title>

   <link rel="stylesheet" href="styleBallina.css">

</head>
<body>
   <!--Ketu fillon pjesa e header/navigation bar -->
   <nav>
            <div class="logo">
               <a href="..//FaqjaKryesore/ballina.php"><img style="width: 250px;" src="..//FaqjaKryesore/LogoProDoc-removebg-preview.png" alt="LogoProDoc"></a>
            </div>
            <input type="checkbox" id="click">
            <label for="click" class="menu-btn">
                <img src="..//FaqjaKryesore/menu.png" alt="" id="fotoNav">
            </label>
            <ul>
                 <li><a href="..//FaqjaKryesore/ballina.php">Faqja Kryesore</a></li>
                 <li><a href="..//AboutUs/about.php">Rreth nesh</a></li>
                 <li><a href="..//Sherbimet/sherbimi.php">Sherbimet</a></li>
                 <li><a href="..//Repartet/repartet.php">Reparet</a></li>
                 <li><a href="..//Contact/contact.php">Kontakti</a></li>
                 <li><a class="active" class="login_btn" href="..//FaqjaKryesore/login_form.php">Login</a></li>
            </ul>
        </nav>
        <!--Ketu perfundon pjesa e header/navigation bar-->
<div class="form-container">
<div class="container"> 
   <form action="" method="post" novalidate>
      <h3>Login</h3>
      
      <input type="text" name="email" required placeholder="Email" id="email" onkeyup="validateEmail()">
      <span id="email_error"></span>
      <input type="password" name="password" required placeholder="Password" class="password" id="pass" onkeyup="validatePassword()"> 
      <span id="pass_error"></span>
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>Nuk jeni te regjistuar? <a href="register_form.php">Regjistrohu tani</a></p>
   </form>
</div>
</div>
<script src="scriptBallina.js"></script>
</body>
</html>