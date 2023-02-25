<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>ProDocs Klinika</title>
      <link rel="stylesheet" href="about.css">
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
                 <li><a class="active" href="..//AboutUs/about.php">Rreth nesh</a></li>
                 <li><a href="..//Sherbimet/sherbimi.php">Sherbimet</a></li>
                 <li><a href="..//Repartet/repartet.php">Reparet</a></li>
                 <li><a href="..//Contact/contact.php">Kontakti</a></li>
                 <li><a class="login_btn" href="..//FaqjaKryesore/login_form.php">Login</a></li>
            </ul>
        </nav>
        <!--Ketu perfundon pjesa e header/navigation bar-->

        <!--Ketu fillon pjesa e pare e about us-->
        <div class="historia">
            <h1>Rreth nesh</h1>
            <p>Spitali ProDocs u themelua në Dhjetor 2006 si spitali i parë privat në vend.Filloi aktivitetin e 
                tij në Kardiologji dhe Kardiokirurgji me rekrutimin e një stafi profesionistësh të huaj me experiencë në këtë 
                fushë dhe me qëllimin që t’ju shërbyer pacientëve brenda dhe jashtë vendit. 
                Brenda një viti reduktoi në 85% fluksin e pacientëve kardiakë që linin Shqipërinë për t’u kuruar jashtë.
                Pas këtij suksesi Spitali ProDocs shpejt zgjeroi aktivitetin duke u fokusuar në fillim në kirurgji të përgjithshme, 
                ortopedi, kirurgji e syrit e urologji deri sa mberriti në kapacitetin e plotë që gëzon sot.</p>
            <img src="..//AboutUs/img/hospital-building.png" alt="spitali logo">
        </div>
        <!--Ketu perfundon pjesa e pare e about us-->

        <!--Ketu fillon pjesa e stafit menaxhues-->
        <div class="wrapper">
            <h1>Stafi menaxhues</h1>
            <div class="team">
                
                
    <?php
    // lidhja me databazen
    $db_connection = mysqli_connect("localhost", "root", "", "user_db");

    // kontrollo nese ka ndonje gabim gjate lidhjes me databazen
    if (!$db_connection) {
        echo "Deshtoi lidhja me databaze: " . mysqli_connect_error();
        exit();
    }

    // marrja e stafit menaxhues nga databaza
    $staff_query = "SELECT * FROM staff";
    $staff_result = mysqli_query($db_connection, $staff_query);

    // shfaqja e stafit menaxhues
    while ($staff_row = mysqli_fetch_assoc($staff_result)) {
        echo '<div class="team_member">';
        echo '<h3>' . $staff_row['name'] . '</h3>';
        echo '<p class="role">' . $staff_row['role'] . '</p>';
        echo '<p class="description">' . $staff_row['description'] . '</p>';
        echo '</div>';
    }

        // mbyllja e lidhjes me databazen
        mysqli_close($db_connection);
        ?>
        </div>
    </div>

    <!--Pjesa e dyte, me icons-->
    <div class="icons-container">

        <div class="icons">
            <img src="..//AboutUs/img/cardiogram.png" alt="">
            <div class="content">
                <h3>EKO e zemres</h3>
                <p>Eko e zemrës në klinikën tonë bëhet me pajisjet më të fundit teknologjike, 
                    duke arritur në detaje shëndetësore</p>
            </div>
        </div>
        
        <div class="icons">
            <img src="..//AboutUs/img/blood-test.png" alt="">
            <div class="content">
                <h3>Pasqyra e gjakut</h3>
                <p>Në klinikën tonë ju mund të bëni analizën e hemogramit, 
                    elektrolitet, CRP, panelin e mëlqisë etj</p>
            </div>
        </div>

        <div class="icons">
            <img src="..//AboutUs/img/tiroid.png" alt="">
            <div class="content">
                <h3>Gjëndrat tiroide</h3>
                <p>Ne ofrojmë 70% zbritje në analizën e tiroides</p>
            </div>
        </div>

        <div class="icons" id="lastI">
            <img src="..//AboutUs/img/wheat.png" alt="">
            <div class="content">
                <h3>Analizat e alergjisë</h3>
                <p>Me teknologjinë e fundit, ne arrijmë të zbulojmë 
                    alergjitë tuaja dhe mjekimi të jetë i hershëm !
                </p>
            </div>
        </div>
    </div>


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