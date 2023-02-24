<?php
@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:/Ligjerata/ProjektiInxhinieriEWeb/FaqjaKryesore/admin_page.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styleIndex.css">
</head>
<body>
    <div class="container my-5">
        <h2>Lista e perdoruesve</h2>
        <a class="btn btn-primary" href="/Ligjerata/ProjektiInxhinieriEWeb/Dashboard/create.php" role="button">Shto user !</a>
        <a class="btn btn-primary" href="/Ligjerata/ProjektiInxhinieriEWeb/FaqjaKryesore/logout.php" role="button">LOGOUT</a>
        <a class="btn btn-danger" href="/Ligjerata/ProjektiInxhinieriEWeb/FaqjaKryesore/admin_page.php" role="button">Kthehu prapa</a>
        <br>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Emri</th>
                <th>Email</th>
                <th>Roli</th>
                <th>Veprimi</th>
            </thead>
            <tbody>
                <?php
                $severname = "localhost";
                $username = "root";
                $password = "";
                $database = "user_db";

                
                //Lidhja me databaze
                $connection = new mysqli($severname, $username, $password, $database);

                //Shiko lidhjen me databaze
                if($connection->connect_error){
                    die("Lidhja deshtoi per arsye te : " . $connection->connect_error);
                }

                //lexo te gjitha rreshtat nga databaza
                $sql = "SELECT * FROM user_form";
                $result = $connection->query($sql);

                if(!$result){
                    die("Query nuk eshte valid : " . $connection->error);
                }
                

                //lexo te dhenat nga secili rresht
                $index = 0;
                
                while($row = $result->fetch_assoc()){
                    $index++;
                    
                    echo "
                    <tr>
                    <td>$index</td>
                    <td>$row[name]</td>
                    <td>$row[email]</td>
                    <td>$row[user_type]</td>
                    <td>
                        <!--<a href='/Ligjerata/ProjektiInxhinieriEWeb/Dashboard/edit.php?id=$row[id]'>Edit</a>-->
                        <!--<a href='/Ligjerata/ProjektiInxhinieriEWeb/Dashboard/delete.php?id=$row[id]'>Delete</a>-->
                        <a class='btn btn-primary btn-sm' href='/Ligjerata/ProjektiInxhinieriEWeb/Dashboard/edit.php?id=$row[id]'>Edit</a>
                        <a class='btn btn-danger btn-sm' href='/Ligjerata/ProjektiInxhinieriEWeb/Dashboard/delete.php?id=$row[id]'>Delete</a>
                    </td>
                </tr>
                    ";
                }
                ?>
                
            </tbody>
        </table>
        <a class="btn btn-primary" href="/Ligjerata/ProjektiInxhinieriEWeb/count/index.php" role="button">Numri i perdoruesve</a>
        <a class="btn btn-primary" href="/Ligjerata/ProjektiInxhinieriEWeb/upload-image/index.php" role="button">Menaxho fotot !</a>
        <a class="btn btn-primary" href="/Ligjerata/ProjektiInxhinieriEWeb/AboutUs/view2.php" role="button">Menaxho stafin !</a>
        <a class="btn btn-primary" href="/Ligjerata/ProjektiInxhinieriEWeb/Repartet/repartiDash.php" role="button">Menaxho repartet !</a>
    </div>
    
</body>
</html>