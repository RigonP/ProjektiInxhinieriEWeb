<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>ProDocs Klinika</title>
      <link rel="stylesheet" href="styleBallina.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
    <body>
        <!--Ketu fillon pjesa e header/navigation bar -->
        <nav>
            <div class="logo">
               <a href="#"><img style="width: 250px;" src="..//FaqjaKryesore/LogoProDoc-removebg-preview.png" alt="LogoProDoc"></a>
            </div>
            <input type="checkbox" id="click">
            <label for="click" class="menu-btn">
                <img src="..//FaqjaKryesore/menu.png" alt="" id="fotoNav">
            </label>
            <ul>
                 <li><a class="active" href="#">Faqja Kryesore</a></li>
                 <li><a href="..//AboutUs/about.html">Rreth nesh</a></li>
                 <li><a href="..//Sherbimet/sherbimi.html">Sherbimet</a></li>
                 <li><a href="..//Repartet/repartet.html">Reparet</a></li>
                 <li><a href="..//Contact/contact.html">Kontakti</a></li>
                 <li><a class="login_btn" href="..//FaqjaKryesore/login_form.php">Login</a></li>
            </ul>
        </nav>
        <!--Ketu perfundon pjesa e header/navigation bar-->


        <!--Ketu fillon pjesa e pare e ballines-->
      <div id="home">
        <p>Shëndeti nuk vlerësohet përderisa të vije sëmundja !</p>
        <h2>Ne kujdesimi për shëndetin tuaj !</h2>

        <div class="btn">
            <a class="blue" href="..//Contact/contact.html">Cakto termin</a>
            <a class="red" href="..//Sherbimet/sherbimi.html">Vizito shërbimet</a>
        </div>
      </div>

      <div id="features">
        <h1>Spitali me i mire ne vend dhe rajon !</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
            Delectus perferendis voluptatibus assumenda nesciunt quibusdam deleniti velit, nihil exercitationem illo rem adipisci, sunt iure ab vero tempore odio cupiditate natus cum.</p>
        
        <div class="fea-base" >
            <div class="fea-box">
                <img src="..//FaqjaKryesore/sherbime.png" alt="sherbime">
                <h3>Shërbime të shpejta</h3>
                <p>Në klinikën tonë, keni mundësi t'i kryeni shërbimet shpejt dhe saktë.</p>
            </div>

            <div class="fea-box">
                <img  src="..//FaqjaKryesore/teknologji.png" alt="teknologji">
                <h3>Teknologji e avancuar</h3>
                <p>Klinika jonë operon me teknikën e fundit medicionale dhe laboratorë të teknologjisë së fundit</p>
            </div>

            <div class="fea-box">
                <img  src="..//FaqjaKryesore/doctor.png" alt="doktor">
                <h3>Staf profesional</h3>
                <p>Mjekët më të njohur dhe më të mirë të vendit !</p>
            </div>
        </div>
      </div>
        <!--Ketu perfundon pjesa e pare e ballines-->



    <!--Ketu fillon pjesa e punes, sa pacienta, certifikime etj-->
    <div class="cta">
        <div class="heading">
            <h2>Klinikë e dëshmuar në fushat mjekësore</h2>
        </div>

        <div class="cta-box">
            <div class="wrap one">
                <h3>Cakto takim me doktorin</h3>
                <p> +383 44 111 222</p>
            </div>

            <div class="wrap two">
                <h3>20+</h3>
                <p>Vizita ditore nga pacientët</p>
            </div>

            <div class="wrap three">
                <h3>350+</h3>
                <p>Certifikime nga Organizatat Botërore të Shëndetësisë</p>
            </div>
        </div>
    </div>


        <!--Pjesa e reminder-->
        <div class="zbritja">
            <div class="reminder">
                <p>Klinikë e certifikuar nga OBSh</p>
                <h1>Regjistrohuni për të marrë 20% zbritje!</h1>
                <div class="time">
                    <div class="date">
                        18 <br> Dite
                    </div>
                    <div class="date">
                        23 <br> Ore
                    </div>
                    <div class="date">
                        06 <br> Minuta
                    </div> 
                    <div class="date">
                        58 <br> Sekonda
                    </div>
                </div>
            </div>
        </div>
         <!--Ketu perfundon reminder-->
        

          <!--Ketu fillon pjesa e footer, i cili eshte responsiv-->
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

        <script src="scriptBallina.js"></script>


    </body>
</html>