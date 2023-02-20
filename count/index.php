<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numri i user</title>
    <style>
        *{
            background-color: lightcyan;
        }
        .counter {
            font-size: 20px;
            width: 100px;
            background-color: blue;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            display: inline-block; /* shtojme kete per te vendosur elementet ne nje linje horizontale */
            margin-right: 20px; /* shtojme nje margin te djathte per te ndare elementet nga njera-tjetra */
        }
        .counter-container {
            display: flex;
            justify-content: center;
        }
        .teksti{
            display: flex;
            justify-content: center;
        }
        .linku{
            background-color: blue; 
            color: white; 
            border-radius: 10px; 
            padding: 5px  20px; 
            text-decoration: none;
        }
    </style>
</head>
<body>
<a href="/myshop/index.php" class="linku">Kthehu prapa</a>

    <h2 class="teksti">Numri i perdoruesve qe jane te kyqur !</h2>
    <div class="counter-container">
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "user_db";
        $con = mysqli_connect($servername, $username, $password, $dbname);

        $sql = "SELECT count(id) AS Total FROM  user_form";
        $sqlA = "SELECT count(id) AS TotalAdmin FROM  user_form WHERE user_type = 'admin'";
        $sqlUser = "SELECT count(id) AS TotalUser FROM  user_form WHERE user_type = 'user'";

        $result = mysqli_query($con, $sql);
        $resultA = mysqli_query($con, $sqlA);
        $resultUser = mysqli_query($con, $sqlUser);

        $values = mysqli_fetch_assoc($result);
        $valuesA = mysqli_fetch_assoc($resultA);
        $valuesUser = mysqli_fetch_assoc($resultUser);

        $num_rows = $values['Total'];
        $num_rowsA = $valuesA['TotalAdmin'];
        $num_rowsUser = $valuesUser['TotalUser'];
        //echo "Numri total i perdoruesve: ".$num_rows;
    ?>
    <div class="counter">
        <?php
        echo "Numri total i perdoruesve: ".$num_rows;
        ?>
    </div>
    <div class="counter">
        <?php
        echo "Numri i admin:".$num_rowsA;
        ?>
    </div>
    <div class="counter">
        <?php
        echo "Numri i user: ".$num_rowsUser;
        ?>
    </div>
    </div>
</body>
</html>
