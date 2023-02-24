<?php
$severname = "localhost";
$username = "root";
$password = "";
$database = "user_db";


//Create connection
$connection = new mysqli($severname, $username, $password, $database);

$id = "";
$emri = "";
$role = "";
$description = "";


$errorMessage = "";
$successMessage = "";

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    //GET method: SHow the data of the client
    if(!isset($_GET['id'])){
        header("location:/Ligjerata/ProjektiInxhinieriEWeb/AboutUs/view2.php");
        exit;
    }

    $id = $_GET["id"];

    $sql = "SELECT * FROM staff WHERE id = $id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();
 
    if(!$row){
        header("location:/Ligjerata/ProjektiInxhinieriEWeb/AboutUs/view2.php");
        exit;
    }

    $emri = $row["name"];
    $role = $row["role"];
    $description = $row["description"];


}else{
    $id = $_POST['id'];
    $emri = $_POST['emri'];
    $role = $_POST['role'];
    $description = $_POST['description'];


    do {
        if (empty($emri) || empty($role) || empty($description)) {
            $errorMessage = "Te gjitha fushat duhet te plotesohen";
            break;
        }
        
    
        $sql = "UPDATE staff SET name='$emri', role='$role', description='$description' WHERE id=$id";
    
        $result = $connection->query($sql);
    
        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }
    
        $successMessage = 'Stafi u perditesua me sukses!';
    
        header("location: /Ligjerata/ProjektiInxhinieriEWeb/AboutUs/view2.php");
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
            </div>
            ";
        }

        ?>

        <form method="post">
            <input type="hidden" name= "id" value="<?php echo $id; ?>">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Emri</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="emri" value="<?php echo $emri ?>">

                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Role</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="role" value="<?php echo $role ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Description</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="description" value="<?php echo $description ?>">
                </div>
            </div>

            <?php
            if(!empty($successMessage)){
                echo "
                <div class='row mb-3'>
                    <div class='offset-sm-3 col-sm-6'>
                        <div class='alert alert-success alert-dismissble fade show' role='alert'>
                            <strong>$successMessage</strong>
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
                    <a class="btn btn-outline-primary" href="/Ligjerata/ProjektiInxhinieriEWeb/AboutUs/view2.php" role="button">Cancel</a>
                </div>
            </div>
        </form>

    </div>
</body>
</html>