<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Page</title>

   
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Pershendetje !</h3>
      <h1>Miresevini <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>Kjo eshte faqja e admin</p>
      <a href="login_form.php" class="btn">Login</a>
      <a href="/Ligjerata/ProjektiInxhinieriEWeb/Dashboard/index.php" class="btn">Dashboard</a>
      <a href="logout.php" class="btn">Logout</a>
   </div>

</div>

</body>
</html>