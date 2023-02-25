<!DOCTYPE html>
<html>
<head>
	<title>Fshi fotografine</title>
    <link rel="stylesheet" href="deleteStyle.css">
</head>
<body>
	<h1>Lista e fotove</h1>
	<table>
		<tr>
			<th>ID</th>
			<th>Foto_url</th>
			<th>Veprimi</th>
		</tr>
		<?php
			// Konektimi me databaze
			$sname = "localhost";
            $uname = "root";
            $password = "";
            $db_name = "user_db";

            $conn = mysqli_connect($sname, $uname, $password, $db_name);

			// Kthe fotot nga databaza
			$sql = "SELECT * FROM images";
			$result = mysqli_query($conn, $sql);

            $index = 0;
			
            //Loop ne array te fotov dhe shfaqi ne faqe
			while ($row = mysqli_fetch_assoc($result)) {
                $index++;
				echo "<tr>";
				echo "<td>" . $index . "</td>";
				echo "<td>". $row['image_url']. "</td>";
				echo "<td><form method='post' action='delete-code2.php'><input type='hidden' name='id' value='" . $row['id'] . "'><input type='submit' value='Delete'></form></td>";
				echo "</tr>";
			}

			// Mbyllja me databaze
			mysqli_close($conn);
		?>
	</table>
    <a class="button" href="/Ligjerata/ProjektiInxhinieriEWeb/upload-image/index.php" style="display: inline-block; font-weight: 700; text-transform: uppercase; text-decoration: none; padding: 1rem 2rem; border-radius: 2rem; transition: background-color 0.3s ease-in-out; background-color: #007bff; color: #fff; border: 2px solid #007bff; margin-top: 5%;">Kthehu prapa !</a>
</body>
</html>
