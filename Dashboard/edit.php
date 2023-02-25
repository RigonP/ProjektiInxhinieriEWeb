<?php
$severname = "localhost";
$username = "root";
$password = "";
$database = "user_db";


//Lidhja me databaze
$connection = mysqli_connect($severname, $username, $password, $database);

$id = "";
$emri = "";
$email = "";
$user_type = "";


$errorMessage = "";
$successMessage = "";

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(!isset($_GET['id'])){
        header("location:/Ligjerata/ProjektiInxhinieriEWeb/Dashboard/index.php");
        exit;
    }

    $id = $_GET["id"];

    $sql = "SELECT * FROM user_form WHERE id = $id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();
 
    if(!$row){
        header("location:/Ligjerata/ProjektiInxhinieriEWeb/Dashboard/index.php");
        exit;
    }

    $emri = $row["name"];
    $email = $row["email"];
    $user_type = $row["user_type"];


}else{
    $id = $_GET["id"];
    //Metoda POST: perditeson te dhenat e klientit
    $emri = $_POST["emri"];
    $email = $_POST["email"];
    $user_type = $_POST["user_type"];


    do {
        if (empty($emri) || empty($email)) {
            $errorMessage = "Te gjitha fushat duhet te plotesohen";
            break;
        }
        
    
        $sql = "UPDATE user_form SET name='$emri', email='$email', user_type='$user_type' WHERE id=$id";
    
        $result = $connection->query($sql);
    
        if (!$result) {
            $errorMessage = "Query jo valid : " . $connection->error;
            break;
        }
    
        $successMessage = 'User u perditesua me sukses!';
    
        header("location: /Ligjerata/ProjektiInxhinieriEWeb/Dashboard/index.php");
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
    <link rel="stylesheet" href="styleEdit.css">
    
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
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value="<?php echo $email ?>">
                </div>
            </div>
            <select name="user_type" class="select" value="<?php echo $user_type ?>">
                 <option value="user">User</option>
                 <option value="admin">Admin</option>
            </select>

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
                    <a class="btn btn-outline-primary" href="/Ligjerata/ProjektiInxhinieriEWeb/Dashboard/index.php" role="button">Cancel</a>
                </div>
            </div>
        </form>

    </div>
</body>
</html>