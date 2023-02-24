<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];

    $severname = "localhost";
    $username = "root";
    $password = "";
    $database = "user_db";



    //Lidhja me databaze
    $connection = new mysqli($severname, $username, $password, $database);

    $sql = "DELETE FROM reparti WHERE id=$id";
    $connection->query($sql);
}

header("location: /Ligjerata/ProjektiInxhinieriEWeb/Repartet/repartiDash.php");
exit;
?>