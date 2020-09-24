<?php  
     session_start();  
     $message = "";
     
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Web service</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <meta property="og:image" content="">
  <meta property="og:image:secure_url" content="">

  <!-- Favicons -->
  <link href="img/icon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">


</head>

<body id="body">

  <!--==========================
    Header
  ============================-->

    <div>
    <button type="button" id="btn-trigger-modal" class="btn btn-primary" data-toggle="modal" data-target="#centralModalSuccess" style="display:none" >
      Launch static backdrop modal
    </button>
    <div class="modal fade" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-success" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header" style="text-align: center;background-color: #00c851;">
                    <p class="heading lead" style="text-align: center;color: white;">Envoie avec succès </p>
        
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text" style="white">&times;</span>
                    </button>
                </div>
        
                <!--Body-->
                <div class="modal-body">
                    <div class="text-center">
                        <i class="fa fa-check fa-3x mb-3 animated rotateIn"></i>
                        <p style="font-size: 14px;">Votre message a été bien envoyé.</p>
                    </div>
                </div>
        
                <!--Footer-->
                <div class="modal-footer justify-content-center">
                    <a type="button" class="btn btn-success" style="color: white;" data-dismiss="modal">Fermer</a>
                </div>
            </div>
            <!--/.Content-->
        </div>
      </div>
      
    <?php 
    if(!empty($_SESSION['message_succes'])){
      if($_SESSION['message_succes'] == true ){
        $message = 'message_envoye';
       }
    }
    $_SESSION['message_succes'] = false;
    ?>
    <input type="hidden" id="message_envoye" name=""  value=<?php echo $message ?> >

  </div>
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto">Web <span>Service</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#body">Accueil</a></li>
          <li><a href="#about">A propos</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#testimonials">Compétences</a></li>
          <li><a href="#team">Equipe</a></li>
          <!--li><a href="#portfolio">Portfolio</a></li-->
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-content">
      <h2>Réaliser vos idées<span></span><br>de rêves</h2>
      <div>
        <a href="#about" class="btn-get-started scrollto">A propos</a>
        <a href="#services" class="btn-projects scrollto">Voir Services</a>
      </div>
    </div>

    <div id="intro-carousel" class="owl-carousel" >
      <div class="item" style="background-image: url('img/intro-carousel/1.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/2.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/3.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/4.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/5.jpg');"></div>
    </div>

  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about" class="wow fadeInUp">
      <div class="container">
        <div class="row">

          <div class="col-lg-12 content">
            <h2>A PROPOS DE NOUS</h2>
            <h3>Nous sommes des jeunes entrepeneurs innovateurs en consulant informatique sur la création de site web, et peuvent vous aider à accomplir ce qui vous vous voulez réaliser dans vos idées</h3>

            <ul>
              <li><i class="ion-android-checkmark-circle"></i> Consultant Web_service</li>
              <li><i class="ion-android-checkmark-circle"></i> En service Online & Offline</li>
              <li><i class="ion-android-checkmark-circle"></i> Multiservice en Travaux Bureautiques</li>
            </ul>

          </div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>Services</h2>
          <p>Voici les propositions</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="">Intégration & Développement</a></h4>
              <p class="description">En service onligne tel que le site web nous serons responsable de la création des visuels et des contenus</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="fa fa-picture-o"></i></div>
              <h4 class="title"><a href="">Multiservice en travaux bureautiques</a></h4>
              <p class="description">Les travaux d'impréssion en tout genre sur papier</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInLeft" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="">Conseils clients</a></h4>
              <p class="description">Nous vous entraidons pour l'évolution de votre activités </p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-map"></i></div>
              <h4 class="title"><a href="">S.E.O</a></h4>
              <p class="description">Une élaboration de votre activité sur le réseau (Reférencement)</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #services -->



    <!--==========================
      Clients Section
    ============================-->
    <!--section id="clients" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Clients</h2>
          <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>

        <div class="owl-carousel clients-carousel">
          <img src="img/clients/client-1.png" alt="">
          <img src="img/clients/client-2.png" alt="">
          <img src="img/clients/client-3.png" alt="">
          <img src="img/clients/client-4.png" alt="">
          <img src="img/clients/client-5.png" alt="">
          <img src="img/clients/client-6.png" alt="">
          <img src="img/clients/client-7.png" alt="">
          <img src="img/clients/client-8.png" alt="">
        </div>

      </div>
    </section--><!-- #clients -->

    <!--==========================
      Testimonials Section
    ============================-->
    <section id="testimonials" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Nos Compétences</h2>
          <p>Compétences en programmation</p>
        </div>

        <div class="row">

          <div class="col-sm-4">
            <div class="box wow fadeInLeft" style="margin-bottom: 10px;" >
              <div class="head-box"><h4 class="title">Front-end</h4></div>
              <div class="body-box">
                <ul>
                  <li>
                    <i class="fa fa-check"></i> Html / Xml
                  </li>
                  <li>
                    <i class="fa fa-check"></i> Css / Bootstrap / Bulma 
                  </li>
                  <li>
                    <i class="fa fa-check"></i> JavaScript / jquery / React js  
                  </li>
                  <li>
                    <i class="fa fa-check"></i> Responsive
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="box wow fadeInLeft" style="margin-bottom: 10px;">
              <div class="head-box"><h4 class="title">Back-end</h4></div>
              <div class="body-box">
                <ul>
                  <li>
                    <i class="fa fa-check"></i> MySQL / MongoDB / SQLite
                  </li>
                  <li>
                    <i class="fa fa-check"></i> Php / Laravel
                  </li>
                    </ul>
              </div>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="box wow fadeInLeft"  style="margin-bottom: 10px;">
              <div class="head-box"><h4 class="title">Autres Notions</h4></div>
              <div class="body-box">
                <ul>
                  <li>
                    <i class="fa fa-check"></i> Git 
                  </li>
                  <li>
                    <i class="fa fa-check"></i> Prestashop / woocommerce
                  </li>
                  <li>
                    <i class="fa fa-check"></i> Wordpress
                  </li>
                </ul>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #testimonials -->

    
    <!--==========================
      Our Portfolio Section
    ============================-->
    <!--section id="portfolio" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Our Portfolio</h2>
          <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/1.jpg" class="portfolio-popup">
                <img src="img/portfolio/1.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 1</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/2.jpg" class="portfolio-popup">
                <img src="img/portfolio/2.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 2</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/3.jpg" class="portfolio-popup">
                <img src="img/portfolio/3.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 3</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/4.jpg" class="portfolio-popup">
                <img src="img/portfolio/4.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 4</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/5.jpg" class="portfolio-popup">
                <img src="img/portfolio/5.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 5</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/6.jpg" class="portfolio-popup">
                <img src="img/portfolio/6.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 6</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/7.jpg" class="portfolio-popup">
                <img src="img/portfolio/7.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 7</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/8.jpg" class="portfolio-popup">
                <img src="img/portfolio/8.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Portfolio Item 8</h2></div>
                </div>
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->

    <section id="team" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Notre Equipe</h2>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="member">
              <div class="pic"><img src="img/team-3.jpg" alt=""></div>
              <div class="details">
                <h4>Keïla Andrimihaja RALY</h4>
                <span>Collaborateur</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="member">
              <div class="pic"><img src="img/team-4.jpg" alt=""></div>
              <div class="details">
                <h4>Gerhild Rafidinjanaharison</h4>
                <span>Collaborateur</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="member">
              <div class="pic"><img src="img/team-4.jpg" alt=""></div>
              <div class="details">
                <h4>Gerhild Rafidinjanaharison</h4>
                <span>Collaborateur</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
        </div>
        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Contactez-nous</h2>
          <p>Nous sommes libre d'accès pour plus d'information, Voici nos contact</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Adresse</h3>
              <address>Tanamakoa_Tamatave 501, Madagascar</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Numero Téléphone</h3>
              <p><a href="tel:+261348030252">+261348030252</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>E-mail</h3>
              <p><a href="mailto:web_service_1@yahoo.com">web_service_1@yahoo.com</a></p>
            </div>
          </div>

        </div>
      </div>

      <div class="container">
        <!-- Uncomment below if you wan to use dynamic maps -->
        <!--<div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div>-->
      </div>

      <div class="container">
        <div class="form">
          <div id="sendmessage">Vous message a été envoyer. Merci!</div>
          <div id="errormessage"></div>
          <!--form action="insertData.php" method="post" role="form" class="contactForm"-->
          <form action="insertData.php" method="post" id="formContact">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom"  required value=<?php if(!empty( $_COOKIE['nom'])) echo $_COOKIE['nom']; ?> >
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6" style="display:flex;">
                <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" required value=<?php if(!empty( $_COOKIE['mail'])) echo $_COOKIE['mail']; ?>>
                <span id="email_validation" style="margin-left:-40px;padding:10px;"></span>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" required/>
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="messages" id="messages" rows="5" required data-msg=" write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center">
              <!--input type="submit" value="Envoyer" /-->
              <input type="hidden" name="" id="email_validated" value=''>
              <button type="submit" id="btn_validation">Envoyer un message</button>
            </div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Web service</strong>. Tout droit réservé
      </div>
      <div class="credits">
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>
  <!-- Uncomment below if you want to use dynamic Google Maps -->
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script> -->

  <!-- Contact Form JavaScript File -->
  <!--script src="contactform/contactform.js"></script-->
  <!--script src="contactForm.js"></script-->

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script type="text/javascript" src="//cookie.eurowebpage.com/cookie.js?skin=cookielaw1&amp;position=bottom&amp;bg_color=131010&amp;link_color=46f989&amp;box_radius=6&amp;delay=12&amp;animation=shake"></script>
  <script type="text/javascript" src="js/message.js"></script>  
  <?php $message=""; ?>   

</body>
</html>
