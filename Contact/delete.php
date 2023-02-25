<?php
if(!isset($_GET["ID"])){
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "user_db";

    //Lidhja me databaze
    $connection = mysqli_connect($servername, $username, $password, $database);

    $sql = "DELETE FROM contact WHERE id = $id";
    $connection->query($sql);

    header("location: /Ligjerata/ProjektiInxhinieriEWeb/Contact/adminpage.php ");
    exit;
}
?>
