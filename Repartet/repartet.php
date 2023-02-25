<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>ProDocs Klinika</title>
      <link rel="stylesheet" href="repartet.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>

   <body>
        <!--Ketu fillon pjesa e header/navigation bar -->
        <nav>
            <div class="logo">
               <a href="..//FaqjaKryesore/ballina.php"><img style="width: 250px;" src="..//FaqjaKryesore/LogoProDoc-removebg-preview.png" alt="LogoProDoc"></a>
            </div>
            <input type="checkbox" id="click">
            <label for="click" class="menu-btn">
                <img src="..//FaqjaKryesore/menu.png" alt="" id="fotoNav">
            </label>
            <ul>
                 <li><a href="..//FaqjaKryesore/ballina.php">Faqja Kryesore</a></li>
                 <li><a href="..//AboutUs/about.php">Rreth nesh</a></li>
                 <li><a href="..//Sherbimet/sherbimi.php">Sherbimet</a></li>
                 <li><a class="active" href="..//Repartet/repartet.php">Reparet</a></li>
                 <li><a href="..//Contact/contact.php">Kontakti</a></li>
                 <li><a class="login_btn" href="..//FaqjaKryesore/login_form.php">Login</a></li>
            </ul>
        </nav>
        <!--Ketu perfundon pjesa e header/navigation bar-->
    
        <div class="repartet">
            <h1>Repartet</h1>
         </div>
        
        <?php
        // Lidhja me databaza
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "user_db";

        $conn =  mysqli_connect($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Lidhje me databaze deshtoi: " . $conn->connect_error);
        }

        
        //Query databaze per repartet
        $sql = "SELECT * FROM reparti";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                //Shfaqja e secilit repart sipas formatit te specifikuar
                echo '<div class="containerT">
                        <div class="testimonial">
                            <div class="testi-content">
                                <div class="slide">
                                    <img src="' . $row["image"] . '" alt="" class="image">
                                    <p>' . $row["pershkrimi"] . '</p>
                                    <div class="details">
                                        <span class="name">' . $row["name"] . '</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
            }
        } else {
            echo "Asnje repart nuk u gjend !";
        }

        // Mbyllja e lidhjes me databaze
        $conn->close();
        ?>
       
         

        <!--Pjesa e Slider me 4 foto-->
        <div class="slideshow">
            <div class="slider">
                <div class="images">
                    <img src="..//Repartet/dok1.jpg" id="img"><img src="..//Repartet/doktori2.png"><img src="..//Repartet/Dok4.jpg"><img src="..//Repartet/doktori2.png">
                </div>
            </div>
    
            <div class="buttons">
                <label onclick="showPht1()" style="text-align: center;">Kliko - F1</label>
                <label onclick="showPht2()" style="text-align: center;">Kliko - F2</label>
                <label onclick="showPht3()" style="text-align: center;">Kliko - F3</label>
                <label onclick="showPht4()" style="text-align: center;">Kliko - F4</label>
            </div>
        </div>
        
        <!--Pjesa e JavaScript per slider-->
        <script>
            var pht1 = document.querySelector("#img");
            function showPht1(){
                pht1.style.marginLeft="0";
            }
            function showPht2(){
                pht1.style.marginLeft="-25%";
            }
            function showPht3(){
                pht1.style.marginLeft="-50%";
            }
            function showPht4(){
                pht1.style.marginLeft="-75%";
            }
        </script>




        <!--Pjesa e footer-->
       <footer>
        <div class="content">
            <div class="left-box">
                <div class="upper">
                    <div class="topic">PRODOC KLINIKA</div>
                    <p>Klinika ProDocs ofron shërbime cilësore në fushën e shëndetësisë, 
                        <br> me mjekët më të mirë të vendit dhe ata amerikan.</p>
                </div>
                <div class="lower">
                    <div class="topic">Kontakti</div>
                    <div class="phone">
                        <a href="tel: +38344111222"><img src="..//FaqjaKryesore/telephone.png" alt="">+383 44 111 222</a>
                    </div>
                    <div class="email">
                        <a href="mailto:prodocs@gmail.com"><img src="..//FaqjaKryesore/email.png" alt="">prodoc@gmail.com</a>
                    </div>
                </div>
            </div>
            <div class="middle box">
                <div class="topic">Repartet</div>
                <div><a href="..//Repartet/repartet.php">Radiologjia</a></div>
                <div><a href="..//Repartet/repartet.php">Kardiologjia</a></div>
                <div><a href="..//Repartet/repartet.php">Infektiva</a></div>
                <div><a href="..//Repartet/repartet.php">Endokrinologjia</a></div>
                <div><a href="..//Repartet/repartet.php">Laboratori</a></div>
            </div>
            <div class="right box">
                <div class="topic">Subscribe</div>
                <form action="#">
                    <input type="text" placeholder="Shkruani email">
                    <input type="submit" name="" value="Dergo">
                    <div class="media-icons">
                        <a href="https://github.com/RigonP/ProjektiInxhinieriEWeb.git"><img src="..//FaqjaKryesore/facebook.png" alt=""></a>
                        <a href="https://github.com/RigonP/ProjektiInxhinieriEWeb.git"><img src="..//FaqjaKryesore/instagram.png" alt=""></a>
                        <a href="https://github.com/RigonP/ProjektiInxhinieriEWeb.git"><img src="..//FaqjaKryesore/twitter.png" alt=""></a>
                        <a href="https://github.com/RigonP/ProjektiInxhinieriEWeb.git"><img src="..//FaqjaKryesore/youtube.png" alt=""></a>
                        <a href="https://github.com/RigonP/ProjektiInxhinieriEWeb.git"><img src="..//FaqjaKryesore/linkedin.png" alt=""></a>
                    </div>
                </form>
            </div>
        </div>
        <div class="bottom">
            <p>Copyright &#169; 2022 <a href="https://github.com/RigonP/ProjektiInxhinieriEWeb.git">Rigon Pira | Butrint Ostergllava </a> Te gjitha te drejtat te rezervuara</p>
        </div>
        </footer>

    </body>
</html>