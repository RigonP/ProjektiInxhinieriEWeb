<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];

    $severname = "localhost";
    $username = "root";
    $password = "";
    $database = "user_db";



    //Lidhja me databaze
    $connection = mysqli_connect($severname, $username, $password, $database);

    $sql = "DELETE FROM staff WHERE id=$id";
    $connection->query($sql);
}

header("location: /Ligjerata/ProjektiInxhinieriEWeb/AboutUs/view2.php");
exit;
?>