
<?php
$severname = "localhost";
$username = "root";
$password = "";
$database = "user_db";


//Lidhje me databaze
$connection = mysqli_connect($severname, $username, $password, $database);



$emri = "";
$role = "";
$description = "";

$errorMessage = "";
$successMessage = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //$id = $_POST['id'];
    $emri = $_POST['emri'];
    $role = $_POST['role'];
    $description = $_POST['description'];
    
    do{
        if(empty($emri) || empty($role) || empty($description)){
            $errorMessage = "Te gjitha fushat duhet te plotesohen !";
            break;
        }

         
        //shto nje user/admin ne databaze
        $sql = "INSERT INTO staff(name, role, description)" . "VALUES('$emri','$role','$description')";
        
        $result = $connection->query($sql);

        if(!$result){
            $errorMessage = "Query nuk eshte valid: " . $connection->error;
            break;
        }

        $emri = "";
        $role = "";
        $description = "";


        $successMessage = "Stafi menaxhues u shtua me sukses !";
        header("location: /Ligjerata/ProjektiInxhinieriEWeb/AboutUs/view2.php");
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
    <title>Shto stafin</title>
    <link rel="stylesheet" href="/Ligjerata/ProjektiInxhinieriEWeb/Dashboard/style2.css">
</head>
<body>
    <div class="container my-5">
        <h2>Staf i ri</h2>

        <?php
        if(!empty($errorMessage)){
            echo "
            <div class='alert alert-warning alert-dismissble fade show' role='alert'>
                <strong>$errorMessage</strong>
                <!--<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>-->
            </div>
            ";
        }

        ?>

        <form method="post" class="form-container">
            <div class="form-group">
                <label for="nameR">Emri</label>
                <input type="text" class="form-control" name="emri" value="<?php echo $emri ?>">
            </div>
            <div class="form-group">
                <label for="role">Roli</label>
                <input type="text" class="form-control" name="role"  value="<?php echo $role ?>">
            </div>
            <div class="form-group">
                <label for="description">Pershkrimi</label>
                <input type="text" class="form-control" name="description"  value="<?php echo $description ?>">
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
                <div class="offset-sm-3 col-sm-3">
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>
                <div class="col-sm-3">
                    <a class="btn btn-outline-primary" href="/Ligjerata/ProjektiInxhinieriEWeb/AboutUs/view2.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
