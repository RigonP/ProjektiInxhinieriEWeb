
<?php
// Lidhja me databaze
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_db";

$conn =  mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Lidhja me databaze deshtoi !");
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //Merri te dhenat nga forma e databazes
    $image = $_POST["image"];
    $pershkrimi = $_POST["pershkrimi"];
    $name = $_POST["name"];
    do{
        if(empty($image) || empty($pershkrimi) || empty($name)){
            $errorMessage = "Te gjitha fushat duhet te plotesohen !";
            break;
        }
        // Shto nje repart te ri ne databaze
        $sql = "INSERT INTO reparti (image, pershkrimi, name) VALUES ('$image', '$pershkrimi', '$name')";
        $result = $conn->query($sql);

        if(!$result){
            $conn->error;
            break;
        }

        header("location: /Ligjerata/ProjektiInxhinieriEWeb/Repartet/repartiDash.php");
        exit;
    }while(false);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shto repart</title>
    <link rel="stylesheet" href="add.css">
</head>
<body>
    <h1>SHTO REPARTIN !</h1>
    <!-- shto nje repart te ri -->
<form method="post" action="shtoRepart.php">
		<label for="image">URL e fotos:</label>
		<input type="text" id="image" name="image">

		<label for="pershkrimi">Pershkrimi:</label>
		<textarea id="pershkrimi" name="pershkrimi"></textarea>

		<label for="name">Emri:</label>
		<input type="text" id="name" name="name">

		<input type="submit" value="Shto repartin">
</form>
</body>
</html>
