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

if (!mysqli_query($conn, $sql)) {
  echo "Të dhënat u ruajtën me sukses";
} else {
  echo "Gabim gjatë ruajtjes së të dhënave: " . mysqli_error($conn);
}

// Mbyllja e lidhjes me databaze
mysqli_close($conn);
?> 
