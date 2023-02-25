<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'Perdoruesi ekziston!';
   }else{
      if($pass != $cpass){
         $error[] = 'Passwordi nuk eshte i njejte!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
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

   <!-- custom css file link  -->
   <link rel="stylesheet" href="styleBallina.css">

</head>
<body>
   <!--Ketu fillon pjesa e header/navigation bar -->
   <nav>
            <div class="logo">
               <a href="..//FaqjaKryesore/ballina.html"><img style="width: 250px;" src="..//FaqjaKryesore/LogoProDoc-removebg-preview.png" alt="LogoProDoc"></a>
            </div>
            <input type="checkbox" id="click">
            <label for="click" class="menu-btn">
                <img src="..//FaqjaKryesore/menu.png" alt="" id="fotoNav">
            </label>
            <ul>
                 <li><a href="..//FaqjaKryesore/ballina.html">Faqja Kryesore</a></li>
                 <li><a href="..//AboutUs/about.html">Rreth nesh</a></li>
                 <li><a href="..//Sherbimet/sherbimi.html">Sherbimet</a></li>
                 <li><a href="..//Repartet/repartet.html">Reparet</a></li>
                 <li><a href="..//Contact/contact.html">Kontakti</a></li>
                 <li><a class="active" class="login_btn" href="..//FaqjaKryesore/login_form.php">Login</a></li>
            </ul>
        </nav>
        <!--Ketu perfundon pjesa e header/navigation bar-->
<div class="form-container">
<div class="container"> 
   <form action="" method="post">
      <h3>REGJISTROHU TANI !</h3>


      <input type="text" name="name" required placeholder="Emri" id="nameR" onkeyup="validateNameR()">
      <span id="Rname_error"></span>

      <input type="email" name="email" required placeholder="Email" id="emailR" onkeyup="validateEmailR()">
      <span id="Remail_error"></span>
      
      <input type="password" name="password" required placeholder="Passwordi" id="passwordR" onkeyup="validatePasswordR()">
      <span id="RPass_error"></span>
      
      <input type="password" name="cpassword" required placeholder="Konfirmo passwordin"  id="passwordC" onkeyup="validateCPasswordR()">
      <span id="CRPass_error"></span>

      <select name="user_type">
         <option value="user">User</option>
         <!--<option value="admin">Admin</option>-->
      </select>
      
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>Jeni te regjistuar ?<a href="login_form.php">Login</a></p>
   </form>
   </div>
</div>
<script src="scriptBallina.js"></script>
</body>
</html>