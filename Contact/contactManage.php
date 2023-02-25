<?php
// Lidhja me databaze
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_db";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Kontrollo nese ka ndonje gabim në lidhje
if (!$conn) {
  die("Lidhja me databazën dështoi: " . mysqli_connect_error());
}

// Merr te dhenat nga contact form
$emri = $_POST['contact-name'];
$mbiemri = $_POST['contact-surname'];
$email = $_POST['contact-email'];
$telefoni = $_POST['contact-phone'];
$mesazhi = $_POST['contact-message'];

// Shto te dhenat ne databaze
$sql = "INSERT INTO contact (emri, mbiemri, email, telefoni, mesazhi) VALUES ('$emri', '$mbiemri', '$email', '$telefoni', '$mesazhi')";

if (mysqli_query($conn, $sql)) {
  echo "<h1>Të dhënat u ruajtën me sukses</h1>";
} else {
  echo "<h1>Gabim gjatë ruajtjes së të dhënave: </h1>" . mysqli_error($conn);
}

// Mbyllja e lidhjes me databaze
mysqli_close($conn);
?> 
