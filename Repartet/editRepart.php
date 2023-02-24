<?php
$severname = "localhost";
$username = "root";
$password = "";
$database = "user_db";


//Lidhja me databaze
$connection = new mysqli($severname, $username, $password, $database);

$id = "";
$image = "";
$pershkrimi = "";
$name = "";



if($_SERVER['REQUEST_METHOD'] == 'GET'){
    
    if(!isset($_GET['id'])){
        header("location:/Ligjerata/ProjektiInxhinieriEWeb/Repartet/repartiDash.php");
        exit;
    }

    $id = $_GET["id"];

    $sql = "SELECT * FROM reparti WHERE id = $id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();
 
    if(!$row){
        header("location:/Ligjerata/ProjektiInxhinieriEWeb/Repartet/repartiDash.php");
        exit;
    }

    $image = $row["image"];
    $pershkrimi = $row["pershkrimi"];
    $name = $row["name"];


}else{
    $id = $_POST['id'];
    $image = $_POST['image'];
    $pershkrimi = $_POST['pershkrimi'];
    $name = $_POST['name'];


    do {
        if (empty($image) || empty($pershkrimi) || empty($name)) {
            $errorMessage = "Te gjitha fushat duhet te plotesohen";
            break;
        }
        
    
        $sql = "UPDATE reparti SET image='$image', pershkrimi='$pershkrimi', name='$name' WHERE id=$id";
    
        $result = $connection->query($sql);
    
        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }
    
        $successMessage = 'Reparti u perditesua me sukses!';
    
        header("location: /Ligjerata/ProjektiInxhinieriEWeb/Repartet/repartiDash.php");
        exit;
    } while (false);
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edito</title>
    <link rel="stylesheet" href="/Ligjerata/ProjektiInxhinieriEWeb/Dashboard/styleEdit.css">
    
</head>
<body>
    <div class="container my-5">
        <h2>Edito</h2>

        <?php
        if(!empty($errorMessage)){
            echo "
            <div class='alert alert-warning alert-dismissble fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        }

        ?>

        <form method="post">
            <input type="hidden" name= "id" value="<?php echo $id; ?>">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Emri</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $name ?>">

                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Fotografia</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="image" value="<?php echo $image ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Pershkrimi</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="pershkrimi" value="<?php echo $pershkrimi ?>">
                </div>
            </div>

            <?php
            if(!empty($successMessage)){
                echo "
                <div class='row mb-3'>
                    <div class='offset-sm-3 col-sm-6'>
                        <div class='alert alert-success alert-dismissble fade show' role='alert'>
                            <strong>$successMessage</strong>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
                    </div>
                </div>";
            }
            ?>
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/Ligjerata/ProjektiInxhinieriEWeb/Repartet/repartiDash.php" role="button">Cancel</a>
                </div>
            </div>
        </form>

    </div>
</body>
</html>