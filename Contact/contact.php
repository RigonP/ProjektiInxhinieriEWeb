<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Kontakti</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="contact.css">
    </head>

    <body>
        <!--Ketu fillon pjesa e header/navigation bar -->
        <nav>
            <div class="logo">
               <a href="..//FaqjaKryesore/ballina.html"><img style="width: 250px;" src="..//FaqjaKryesore/LogoProDoc-removebg-preview.png" alt="LogoProDoc"></a>
            </div>
            <input type="checkbox" id="click">
            <label for="click" class="menu-btn">
                <img src="..//FaqjaKryesore/menu.png" alt="" id="fotoNav">
            </label>
            <ul>
                 <li><a href="..//FaqjaKryesore/ballina.php">Faqja Kryesore</a></li>
                 <li><a href="..//AboutUs/about.php">Rreth nesh</a></li>
                 <li><a href="..//Sherbimet/sherbimi.php">Sherbimet</a></li>
                 <li><a href="..//Repartet/repartet.php">Reparet</a></li>
                 <li><a class="active"  href="..//Contact/contact.php">Kontakti</a></li>
                 <li><a class="login_btn" href="..//FaqjaKryesore/login_form.php">Login</a></li>
            </ul>
        </nav>
        <!--Ketu perfundon pjesa e header/navigation bar-->


        <!--Ketu fillon pjesa e kontakt-->
        <div class="contactUs">
            <div class="title">
               <h2>KONTAKTI</h2>
            </div>
            <div class="box">
               <!--Kontakt Forma-->
               <div class="contact form">
                   <h3>Shkruani mesazh </h3>
                   <form method="post" action="contactManage.php">
                       <div class="formBox">
                           <div class="row50">
                               <div class="inputBox">
                                   <span>Emri</span>
                                   <input type="text" placeholder="Emri" id="contact-name"  name="contact-name" onkeyup="validateName()">
                               </div>
                               <div class="inputBox">
                                   <span>Mbiemri</span>
                                   <input type="text" placeholder="Mbiemri"  id="contact-surname" name="contact-surname" onkeyup="validateSurname()">
                               </div>
                           </div>
                            
                           <div class="row50">
                               <div class="inputBox">
                                   <span>Email Adresa</span>
                                   <input type="text" placeholder="Email" id="contact-email" name="contact-email" onkeyup="validateEmail()"> 
                               </div>
                               <div class="inputBox">
                                   <span>Numri telefonit</span>
                                   <input type="text" placeholder="Mobile" id="contact-phone" name="contact-phone" onkeyup="validatePhone()">
                               </div>
                           </div>
                           
                           <div class="row100">
                               <div class="inputBox">
                                   <span>Mesazhi</span>
                                   <textarea placeholder="Shkruani mesazhin tuaj" id="contact-message" name="contact-message" onkeyup="validateMessage()"></textarea>
                               </div>
                           </div>
   
   
                           <div class="row100">
                               <div class="inputBox">
                                    <!-- Kemi ndryshuar butonin nga button ne submit per ti derguar te dhenat ne server-->
                                   <input type="submit" value="Dergo" onclick="return validateForm()">
                                   <span id="submit-error"></span>
                                   <span id="submit-error2"></span>
                               </div>
                           </div>
                       </div>
                   </form>
               </div>
               <!--Ketu perfundon pjesa e kontakt-->


               <!--Ketu fillon pjesa e formave te kontaktimit-->
            <div class="contact info">
                <h3>Na kontaktoni</h3>
                <div class="infoBox">
                    <div>
                        <span><img src="./location.png" alt=""></span>
                        <p>Lagjia Kalabria, Prishtine <br> Kosovë</p>
                    </div>
                    <div>
                        <span><img src="./imella.png" alt=""></span>
                        <a href="mailto:prodocs@gmail.com">prodocs@gmail.com</a>
                    </div>
                    <div>
                        <span><img src="./phone.png" alt=""></span>
                        <a href="tel: +38344111222">+383 44 111 222</a>
                    </div>
                    <!--Social Media-->
                    <ul class="sci">
                        <li><a href="https://github.com/RigonP/ProjektiInxhinieriEWeb.git"><img src="..//Contact/facebook.png" alt=""></a></li>
                        <li><a href="https://github.com/RigonP/ProjektiInxhinieriEWeb.git"><img src="..//Contact/linkedin.png" alt=""></a></li>
                        <li><a href="https://github.com/RigonP/ProjektiInxhinieriEWeb.git"><img src="..//Contact/twitter.png" alt=""></a></li>
                        <li><a href="https://github.com/RigonP/ProjektiInxhinieriEWeb.git"><img src="..//Contact/instagram.png" alt=""></a></li>
                    </ul>
                </div>
            </div>
        <!--Ketu perfundon pjesa e formave te kontaktimit-->

            <!--Ketu fillon pjesa e Hartes-->
            <div class="contact map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46940.20601141889!2d21.1587273!3d42.666380100000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549ee605110927%3A0x9365bfdf385eb95a!2sPristina!5e0!3m2!1sen!2s!4v1670799056565!5m2!1sen!2s"
                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
         </div>
          <!--Ketu perfundon pjesa e Hartes-->
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
                <div><a href="..//Repartet/repartet.html">Radiologjia</a></div>
                <div><a href="..//Repartet/repartet.html">Kardiologjia</a></div>
                <div><a href="..//Repartet/repartet.html">Infektiva</a></div>
                <div><a href="..//Repartet/repartet.html">Endokrinologjia</a></div>
                <div><a href="..//Repartet/repartet.html">Laboratori</a></div>
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



    <script src="script.js"></script>


    </body>
</html>
        