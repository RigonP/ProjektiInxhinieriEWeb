
<?php
$severname = "localhost";
$username = "root";
$password = "";
$database = "user_db";


//Lidhja me databaze
$connection = new mysqli($severname, $username, $password, $database);



$emri = "";
$email = "";
$password = "";
$user_type = "";

$errorMessage = "";
$successMessage = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $emri = $_POST["emri"];
    $email = $_POST["email"];
    $password = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST["user_type"];
    
    do{
        if(empty($emri) || empty($email) || empty($password)){
            $errorMessage = "Te gjitha fushat duhet te plotesohen !";
            break;
        }
        
        if($password != $cpass){
            $errorMessage = 'Passwordi nuk eshte i njejte!';
            break;
        }
         
        //shto nje user/admin ne databaze
        $sql = "INSERT INTO user_form(name, email, password, user_type)" . "VALUES('$emri','$email','$password', '$user_type')";
        
        $result = $connection->query($sql);

        if(!$result){
            $errorMessage = "Query nuk eshte valid: " . $connection->error;
            break;
        }

        $emri = "";
        $email = "";
        $password = "";
        $user_type = "";


        $successMessage = "Klienti u shtua me sukses !";
        header("location: /Ligjerata/ProjektiInxhinieriEWeb/Dashboard/index.php");
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
    <title>ShtoPerdorues</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="container my-5">
        <h2>Perdorues i ri</h2>

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
                <input type="text" class="form-control" id="nameR" onkeyup="validateNameR()" name="emri" value="<?php echo $emri ?>">
                <span id="Rname_error"></span>
            </div>
            <div class="form-group">
                <label for="emailR">Email</label>
                <input type="text" class="form-control" name="email" id="emailR" onkeyup="validateEmailR()" value="<?php echo $email ?>">
                <span id="Remail_error"></span>
            </div>
            <div class="form-group">
                <label for="passwordR">Password</label>
                <input type="password" class="form-control" name="password" id="passwordR" onkeyup="validatePasswordR()" value="<?php echo $password ?>">
                <span id="RPass_error"></span>
            </div>
            <div class="form-group">
                <label for="passwordC">Konfirmo passwordin</label>
                <input type="password" class="form-control" name="cpassword" id="passwordC" onkeyup="validateCPasswordR()" value="<?php echo $password ?>">
                <span id="CRPass_error"></span>
            </div>
            <div class="form-group">
                <label for="user_type">Zgjedh rolin:</label>
                <select name="user_type" id="user_type" class="form-control">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
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
                    <a class="btn btn-outline-primary" href="/Ligjerata/ProjektiInxhinieriEWeb/Dashboard/index.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
    <script src="scriptBallina.js"></script>
</body>
</html>
