<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image upload</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
        }
    </style>
</head>
<body>
    <?php if(isset($_GET['error'])): ?>
        <p><?php echo $_GET['error']; ?></p>
    <?php endif ?>

    <img style="width: 250px;" src="/Ligjerata/ProjektiInxhinieriEWeb/FaqjaKryesore/LogoProDoc-removebg-preview.png" alt="LogoProDoc"></a>
    <h2>Shto fotografi !</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="my_image">
        <input type="submit" name="submit" value="Upload">
    </form>
    <a class="button" href="/Ligjerata/ProjektiInxhinieriEWeb/upload-image/delete.php" style="display: inline-block; font-weight: 700; text-transform: uppercase; text-decoration: none; padding: 1rem 2rem; border-radius: 2rem; transition: background-color 0.3s ease-in-out; background-color: #007bff; color: #fff; border: 2px solid #007bff; margin-top: 5%;">Fshi fotografine !</a>
    <a class="button" href="/Ligjerata/ProjektiInxhinieriEWeb/Dashboard/index.php" style="display: inline-block; font-weight: 700; text-transform: uppercase; text-decoration: none; padding: 1rem 2rem; border-radius: 2rem; transition: background-color 0.3s ease-in-out; background-color: #007bff; color: #fff; border: 2px solid #007bff; margin-top: 5%;">Kthehu prapa !</a>
</body>
</html>
