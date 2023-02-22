<?php
// Lidhje me databazen
$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "test_db";
$conn = mysqli_connect($sname, $uname, $password, $db_name);


//Shiko nese forma u dergua 
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Fshi foton nga databaza
    $sql = "DELETE FROM images WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    // Shiko nese foto u fshi nga databaza
    if ($result) {
        echo "Foto u fshi me sukses nga databaza.";
        echo '<a class="button" href="/Ligjerata/ProjektiInxhinieriEWeb/upload-image/index.php" style="display: inline-block; font-weight: 700; text-transform: uppercase; text-decoration: none; padding: 1rem 2rem; border-radius: 2rem; transition: background-color 0.3s ease-in-out; background-color: #007bff; color: #fff; border: 2px solid #007bff; margin-top: 5%;">Kthehu prapa !</a>';
    } else {
        echo "Error ne fshirjen e fotografise per arsye: " . mysqli_error($conn);
    }
}

// Mbyllja e konektimit me databaze
mysqli_close($conn);
?>
