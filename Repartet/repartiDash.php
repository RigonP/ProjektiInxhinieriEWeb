
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="repartiDash.css">
</head>
<body>
    <div class="container my-5">
        <h2>Reparti</h2>
        <a class="btn btn-primary" href="/Ligjerata/ProjektiInxhinieriEWeb/Repartet/shtoRepart.php" role="button">Shto repartin !</a>
        
        
        <br>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Emri</th>
                <th>Fotografia</th>
		        <th>Pershkrimi</th>
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
                $sql = "SELECT * FROM reparti";
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
                    <td>$row[image]</td>
                    <td>$row[pershkrimi]</td>
                    <td>
                        <a class='btn btn-primary btn-sm' href='/Ligjerata/ProjektiInxhinieriEWeb/Repartet/editRepart.php?id=$row[id]'>Edit</a>
                        <a class='btn btn-danger btn-sm' href='/Ligjerata/ProjektiInxhinieriEWeb/Repartet/deleteReparti.php?id=$row[id]'>Delete</a>
                    </td>
                </tr>
                    ";
                }
                ?>
                
            </tbody>
        </table>
       
    </div>
    <a href="/Ligjerata/ProjektiInxhinieriEWeb/Dashboard/index.php" class="linku">Kthehu prapa</a>
</body>
</html>