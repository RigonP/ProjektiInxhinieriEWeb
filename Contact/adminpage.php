<style>
    h1 {
        text-align: center;
        font-size: 32px;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }

    th, td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    .delete-btn {
        background-color: #f44336;
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 15px;
    }

    @media (max-width: 600px) {
        table {
            font-size: 12px;
        }
        h1 {
            font-size: 24px;
        }
    }


</style>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_db";

// Lidhja me databaze
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Shiko nese ka gabime ne konektim
if (!$conn) {
    die("Lidhja me databazën dështoi: " . mysqli_connect_error());
}

// Kthe te dhenat nga databaza
$sql = "SELECT * FROM contact";
$result = mysqli_query($conn, $sql);

// Shiko nese ka te dhena ne databaze
if (mysqli_num_rows($result) > 0) {
    echo "<h1>Lista e mesazheve !</h1>";
    echo "<table><tr><th>Emri</th><th>Mbiemri</th><th>Email Adresa</th><th>Numri telefonit</th><th>Mesazhi</th><th></th></tr>";
    while($row = mysqli_fetch_assoc($result)) {                                                                                                                             
        echo "<tr><td>" . $row["emri"]. "</td><td>" . $row["mbiemri"]. "</td><td>" . $row["email"]. "</td><td>" . $row["telefoni"]. "</td><td>" . $row["mesazhi"]. "</td><td><a href='delete.php?id=".$row["id"]."' class='delete-btn'>Delete</a></td></tr>";
    }
    echo "</table>";
} else {
    echo "Nuk ka te dhena per te shfaqur.";
}

echo '<a style="background-color: blue; color: white; padding: 12px 24px;text-align: center; text-decoration: none;display: inline-block; font-size: 16px;border-radius: 2rem;" href="/Ligjerata/ProjektiInxhinieriEWeb/Dashboard/index.php" role="button">Kthehu prapa !</a>';


// Mbyllja e lidhjes
mysqli_close($conn);
?>