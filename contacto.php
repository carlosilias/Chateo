<!DOCTYPE html>
<html lang="en">



  <!--================ Basic page needs ================-->
  <title>El Chateo</title>
  <meta charset="UTF-8">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <!--================ Mobile specific metas ================-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--================ Favicon ================-->
  <link rel="shortcut icon" href="chateo">
  <!--================ Google web fonts ================-->
  <link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css?family=Material+Icons%7CMaterial+Icons+Outlined%7CMaterial+Icons+Two+Tone%7CMaterial+Icons+Round%7CMaterial+Icons+Sharp"
    rel="stylesheet">
  <!--================ Vendor CSS ================-->
  <link rel="stylesheet" href="assets/fontawesome-all.min.css">
  <link rel="stylesheet" href="assets/linearicons.css">
  <link rel="stylesheet" href="assets/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/jquery.arcticmodal-0.3.css">
  <link rel="stylesheet" href="assets/bootstrap.min.css">
  <link rel="stylesheet" href="assets/animate.min.css">
  <!-- REVOLUTION STYLE SHEETS -->
  <link rel="stylesheet" type="text/css" href="assets/settings.css">
  <!--================ Theme CSS ================-->
  <link rel="stylesheet" href="assets/style.css">
  <link rel="stylesheet" href="assets/responsive.css">
  <!--================ Vendor JS ================-->
  <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

  <style>
         .mapWrapper {
    position: relative;
    /*
    Do math with the height of your iframe divided by the width, then converted to percent
    In this example the height is 400 and the width is 600
    400 / 600 = .66666667
    which is 66.6666667% */
    padding-bottom: 66.6666667%;
    height: 0;

}
.mapWrapper iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

        </style>
</head>

<body>
  <div class="mad-preloader"></div>
  <div id="mad-page-wrapper" class="mad-page-wrapper">
    <!--================ Popup ================-->
    <div id="page-popup" class="mad-page-popup">
      <div class="mad-popup-inner">
        <button id="mad-popup-close" class="arcticmodal-close"><i class="material-icons">close</i></button>
        <div class="container">
          <div class="row justify-content-end">
            <div class="col-md-6">
              <h3 class="mad-page-title">¡Ya estamos abiertos!</h3>
              <p>Visita nuestra sede o escribenos para brindarte la mejor atencion posible.</p>
              <p class="content-element-4">Domicilios Gratis - 3013391971.</p>
              <!--<a href="#" class="btn btn-big btn-style-3">Cerrar</a>-->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--================ /Popup ================-->
    <!--================ Search Modal ================-->
    <div class="mad-d-none">
      <div id="search-modal" class="mad-modal mad-modal--search">
        <button type="button" class="arcticmodal-close"><i class="material-icons">close</i></button>
        <h4 class="mad-title">Search</h4>
        <!--================ Search Form ================-->
        <form role="search" method="get" class="mad-searchform">
          <input type="text" name="s" placeholder="Type your keyword here">
          <button type="submit" class="btn btn-style-3"><i class="material-icons">search</i></button>
        </form>
        <!--================ End of Search Form ================-->
      </div>
    </div>
    <!--================ End of Search Modal ================-->
    <!--================ Header ================-->
    <header id="mad-header" class="mad-header">
      <div class="mad-message">
        Obtén un 10% de descuento + envío GRATIS. Por compras superiores a 45.000.
        <button id="close-msg" class="close-message"><i class="material-icons">close</i></button>
      </div>
      <div class="mad-pre-header">
        <div class="mad-our-info">
          <div class="mad-info"><i class="material-icons-outlined">location_on</i> <span>Calle 84 # 126-05 Los Almendros III</span></div>
          <div class="mad-info"><i class="material-icons">access_time</i> <span>Lun - Vie: 4pm - 1am, Sab - Dom: 4pm - 2am</span></div>
        </div>
        
      </div>
      <div class="mad-header-section--sticky-xl">
        <div class="mad-header-items">
          <div class="mad-header-item">
            <a href="index.html" class="mad-logo"><img src="img/LOGO200.png" alt=""></a>
          </div>
          <!--================ Navigation ================-->
          <nav class="mad-navigation-container">
            <ul class="mad-navigation mad-navigation--vertical-sm">
              <li class="menu-item menu-item-has-children"><a href="index.php">Inicio</a></li>
              <li class="menu-item menu-item-has-children"><a href="salchipapa.php">Menu</a></li>
              <li class="menu-item menu-item-has-children"><a href="ubicacion.php">Ubicación</a></li>
              <li class="menu-item menu-item-has-children current-menu-item"><a href="contacto.php">Contácto</a></li>
            
            </ul>
          </nav>
          <!--================ End of Navigation ================-->
          <div class="mad-header-item">
            <div class="mad-our-info type-2">
              <div class="mad-info">
                <i class="material-icons-outlined">call</i>
                <div class="mad-info-content">
                  <span>Domicilios Gratis</span>
                  <div class="mad-info-title">3013391971</div>
                </div>
              </div>
            </div>
          </div>
          <div class="mad-header-item">
            <div class="mad-actions">
              <div class="mad-item">
                
                 <!--<a href="#" class="mad-item-link" data-arctic-modal="#search-modal"><i
                    class="material-icons">search</i></a>-->
                <!-- <a href="#" class="mad-item-link"><i class="material-icons">person_outline</i></a>-->
                <div class="mad-dropdown">
                <!----  <a href="#" type="button" class="mad-item-link mad-dropdown-title"><i
                      class="material-icons-outlined">shopping_cart</i><span class="quantity">3</span></a>-->
                  
              </div>
              <div class="mad-item">
                <!--<a href="#" class="btn btn-small"><span>Order Online</span></a>-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!--================ End of Header ================-->
      
      <div class="mad-content no-pd">
        <div class="container">
          
          <div class="mad-section">
            <div class="row justify-content-center">
              <div class="col-xl-6">
                <h2 class="align-center">Escribenos</h2>
                <p class="align-center">Envianos un mensaje.</p>
            <form action="" id="formulario_wapp">
    
                    <div class="row justify-content-center">
                        <div class="col-xl-8">

                    <div class="mad-col">
                    <input
                        id="nombre"
                        type="text"
                        placeholder="Indica cuál es tu nombre"
                    />
                    </div> 
                    <br>
                    <br>
                    <div class="mad-col">
                    <input
                        id="celular"
                        type="text"
                        placeholder="Indica cuál es tu celular"
                    />
                    </div>
                    <br>
                    <textarea rows="5" required placeholder="Indica cuál es tu mensaje" id="mensaje"></textarea>
                    <div id="respuesta"></div>
                    <br>
                    <center><button id="submit" class="btn btn-big btn-style-3">Enviar a WhatsApp</button></center>
                    </div>
                </div>
             </form>
            </div>
            </div>
        </div>
     </div>

      <div class="mad-banners with-slide-down">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-6">
            <div class="mad-banner with-icon">
              <i class="mad-banner-icon"><img src="img/iconos/delivery3.svg" alt="" class="svg"></i>
              <div class="mad-banner-content">
                <h4 class="mad-page-title"><span>Rapido y seguro</span>
                  </h4>
                
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6">
            <div class="mad-banner with-icon">
              <i class="mad-banner-icon"><img src="img/iconos/reloj.svg" alt="" class="svg"></i>
              <div class="mad-banner-content">
                <h4 class="mad-page-title"><span>Poco tiempo de espera</span>
                  </h4>
                
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6">
            <div class="mad-banner with-icon">
              <i class="mad-banner-icon"><img src="img/fondos/rewards_program.svg" alt="" class="svg"></i>
              <div class="mad-banner-content">
                <h4 class="mad-page-title"><span>Excelente servicio</span>
                </h4>
                
              </div>
            </div>
          </div>
        </div>
      </div>
</div>


      <!--================ Footer ================-->
      <footer id="mad-footer" class="mad-footer">
        <!--================ Footer row ================-->
        <div class="mad-footer-main">
          <div class="container">
            <div class="row">
              <div class="col-xl-6 col-lg-4 col-md-6">
                <!--================ Widget ================-->
                <section class="mad-widget">
                <div class="content-element-5">
                  <a href="#" class="mad-logo"><img src="img/LOGO200.png" alt=""></a>
                </div>
                <div class="mad-our-info vr-type">
                  <div class="mad-info"><i class="material-icons-outlined">location_on</i> <span> Calle 84 # 126-05
                    Los Almendros III<br> <a href="#" class="mad-link mad-dir">Ver Ubicación</a></span></div>
                  <div class="mad-info"><i class="material-icons-outlined">call</i> <span>3013391971</span></div>
                  <div class="mad-info"><i class="material-icons">mail_outline</i> 
                      Chateo@gmail.com</div>
                  <div class="mad-info"><i class="material-icons">access_time</i> <span>Lun - Vie: 4pm - 1am, Sab -
                      Dom: 4pm - 2am</span></div>
                </div>
              </section>
                <!--================ End of Widget ================-->
              </div>
              <div class="col-xl-2 col-lg-2 col-md-6">
                <!--================ Widget ================-->
                <section class="mad-widget">
                <h5 class="mad-widget-title">Menu</h5>
                <div class="mad-vr-list">
                  <ul>
                    <li><a href="salchipapa.php" class="mad-link">Salchipapa</a></li>
                    <li><a href="burger.php" class="mad-link">Hamburgesa</a></li>
                    <li><a href="perro.php" class="mad-link">Perros</a></li>
                    <li><a href="pizza.php" class="mad-link">Pizza</a></li> 
                  </ul>
                </div>
              </section>
                <!--================ End of Widget ================-->
              </div>
              <div class="col-xl-2 col-lg-3 col-md-6">
                <!--================ Widget ================-->
                <section class="mad-widget">
                <h5 class="mad-widget-title">Nosotros</h5>
                <div class="mad-vr-list">
                  <ul>
                    <li><a href="index.php" class="mad-link">Inicio</a></li>
                    <li><a href="salchipapa.php" class="mad-link">Menu</a></li>
                    <li><a href="contacto.php" class="mad-link">Contacto</a></li>
                    <li><a href="ubicacion.php" class="mad-link">Ubicación</a></li>
                    
                  </ul>
                </div>
              </section>
                <!--================ End of Widget ================-->
              </div>
            </div>
          </div>
        </div>
        <!--================ End of Footer row ================-->
        <div class="mad-footer-bottom">
          <div class="container">
          <p class="copyrights">Copyright © 2021 Chateo Fast Food.
            Desarrollado por <a href="https://api.whatsapp.com/send/?phone=573148511171" style="color:white">Carlos Ilias.</a>
            
          </div>
        </div>
      </footer>
      <!--================ End of Footer ================-->
    </div>
    <script src="js/modernizr.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.easing.1.3.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.min.js"></script>
    <script src="js/monkeysan.jquery.nav.1.0.min.js"></script>
    <script src="js/monkeysan.validator.min.js"></script>
    <script src="js/handlebars-v4.0.5.min.js"></script>
    <script src="js/mad.customselect.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery-ui/jquery-ui.min.js"></script>
    <script src="js/tweetie.min.js"></script>
    <script src="js/jquery.arcticmodal-0.3.min.js"></script>
    <script src="js/retina.min.js"></script>
    <script src="js/mad.alert-box.min.js"></script>
    <script src="js/mad.newsletter-form.min.js"></script>
    <script src="js/mad.sticky-header-section.min.js"></script>
    <script src="js/mad.app.js"></script>
    <script src="js/form.js"></script>
  </body>

<!-- Mirrored from velikorodnov.com/html/yummi/pages_contact_v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 16:24:09 GMT -->
</html>
