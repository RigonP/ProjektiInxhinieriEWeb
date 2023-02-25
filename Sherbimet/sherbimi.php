<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>ProDocs Klinika</title>
      <link rel="stylesheet" href="sherbimi.css">
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
                 <li><a class="active" href="..//Sherbimet/sherbimi.php">Sherbimet</a></li>
                 <li><a href="..//Repartet/repartet.php">Reparet</a></li>
                 <li><a href="..//Contact/contact.php">Kontakti</a></li>
                 <li><a class="login_btn" href="..//FaqjaKryesore/login_form.php">Login</a></li>
            </ul>
        </nav>
        <!--Ketu perfundon pjesa e header/navigation bar-->

        <!--Ketu fillon pjesa e wrapper-->
        <div class="wrapper">
            <h1>Siguri maksimale për shëndetin e pacientëve!</h1>
            <p>Stafi i trajnuar dhe specializuar ne vendet e Bashkimit Evropian, Britanisë së Madhe dhe Shteteve të Bashkuara të Amerikës, <br>
                sjellin për pacientët tanë një shërbim të pa përsëritur në rajon dhe më gjërë, për të diagnostifikuar dhe trajtuar çdo patologji të pranishme.</p>
            
            <div class="content-box">
               <div class="card">
                  <img src="..//Sherbimet/profits.png" alt="investimi foto">
                  <h2>Investim bashkohor</h2>
                  <p>ProDocs Hospital është i dizajnuar dhe <br> strukturuar sipas standardeve të Bashkimit Evropian.</p>
               </div>
   
               <div class="card">
                   <img src="..//Sherbimet/medical-team.png" alt="stafi foto">
                   <h2>Ekip Mjekësor i Specializuar</h2>
                   <p>Stafi i trajnuar dhe specializuar ne vendet e Bashkimit Evropian, <br> Britanisë së Madhe dhe Shteteve të Bashkuara.</p>
               </div>
   
                
               <div class="card">
                   <img src="..//Sherbimet/x-ray.png" alt="radiologji foto">
                   <h2>Laboratori & Radiologjia</h2>
                   <p>ProDocs HOSPITAL posedon skanerin e markës “Philips” i cili bën të mundur diagnostifikimin me një rrezatim deri 
                       në 40 % më të ulët se çdo skaner tjetër me një saktësi dn e pacientëve.</p>
               </div>
   
               <div class="card">
                   <img src="..//Sherbimet/first-aid-kit.png" alt="Emergjenca foto">
                   <h2>Ndërhyrja Emergjente</h2>
                   <p>Katër salla të operacionit, salla e kardiologjisë invazive, <br> terapia intenzive me 20 shtretër, Emergjenca me 10 shtretër si dhe 70 shtretër ne repart, 
                       ofrojnë mundësinë për kryerjn e <br> të gjitha procedurave kirurgjikale dhe invazive, të ngjashme me çdo qendër Evropiane apo Amerikane</p>
               </div>
   
               <div class="card">
                   <img src="..//Sherbimet/24-hours-support.png" alt="24/7 foto">
                   <h2>24/7 Kujdes Maksimal</h2>
                   <p>Për pacientët e hospitalizuar, mbikqyrje të vazhdueshme nga Doktorët kujdestarë, dhe stafi përcjellës. <br>
                       Gjithnjë me juve dhe afër juve.</p>
               </div>
   
               <div class="card">
                   <img src="..//Sherbimet/examination.png" alt="konsultime foto">
                   <h2>Konsultim mjekësor</h2>
                   <p>Për pacientët e hospitalizuar, mbikqyrje të vazhdueshme nga Doktorët kujdestarë, dhe stafi përcjellës. <br> 
                       Gjithnjë me juve dhe afër juve.</p>
               </div>
               
            </div>
         </div>
   
       <div class="video">
           <h1 style="text-align: center; color: rgb(255,0,82) ;">Video tour e spitali tonë modern</h1>
           <video autoplay loop muted plays-inline class="back-video">
               <source src="./HospitalTour.mp4" type="video/mp4">
           </video>
       </div>
   <!--Ketu perfundon pjesa e wrapper-->

   <div class="insert_db">
    <?php
    
        $sname = "localhost";
        $uname = "root";
        $password = "";
        $db_name = "user_db";

        $conn = mysqli_connect($sname, $uname, $password, $db_name);
        
        if(!$conn){
            echo "Lidhja me databaze deshtoi!";
            exit();
        
        }
        $sql = "SELECT * FROM images ORDER BY id DESC";
        $res = mysqli_query($conn,$sql);

        if(mysqli_num_rows($res) > 0){
            while($images = mysqli_fetch_assoc($res)){ ?>
                
                <div class="alb">
                    <img src="/Ligjerata/ProjektiInxhinieriEWeb/upload-image/uploads/<?=$images['image_url']?>" width="300px">
                </div>

    <?php } }?>
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