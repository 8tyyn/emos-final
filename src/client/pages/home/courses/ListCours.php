<?php
    //require_once "../../../auth/requireAuth.php";
require_once "../../../../controllers/CoursController.php";
require_once "../../../../helpers/TruncateString.php";
$coursController = new CoursController();
$courses = $coursController->getAllCours();
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Cyborg - Awesome HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../../../../../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../../../../../assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="../../../../../assets/css/owl.css">
    <link rel="stylesheet" href="../../../../../assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 579 Cyborg Gaming

https://templatemo.com/tm-579-cyborg-gaming

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <?
                  include "./../../../../components/navbar.php"; 
                ?>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** Featured Start ***** -->
          <div class="row">
            <div class="col-lg-12">
              <div class="feature-banner header-text">
                <div class="row">
                  <div class="col-lg-12">
                   <center> <h1 style="color: #0eaedb;">Liste Des Cours</h1><br> </center>
                  </div>
                  <style>
                    .col-lg-8 {
                      margin: auto;
                      display: block;
                    }
                  </style>
                  <div class="col-lg-8">                 
                    <div class="thumb">                   
                    </div>                 
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Featured End ***** -->

          <!-- ***** Details Start ***** -->
          </div>
          <!-- ***** Details End ***** -->
          
          <!-- ***** Other Start ***** -->
          <center>
          <div class="gaming-library">
            <div class="col-lg-12">
              <div class="heading-section">
                <?php
                    foreach ($courses as $cs) {
                        echo " <div class='item'><ul>";
                        echo "<li><h4>Titre</h4><span>".$cs["title"]."</span></li>";
                        echo "<li><h4>Content</h4><span>".truncateString($cs["content"],10)."</span></li>";
                        echo "<li><h4>Date d'ajout</h4><span>".$cs["created_at"]."</span></li>";
                        echo "<li><div class='main-border-button'><a href='Cours.php?id=".$cs['id']."'>Voir</a></div></li>";
                        echo "</ul>";
                    }
                ?>
            </div>
          </div>
          </center>

        </div>
      </div>
    </div>
  </div>
  
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2024 <a href="#">EMOS</a>. Tous droits réservés. 
          
          <br>Design: <a href="https://templatemo.com" target="_blank" title="free CSS templates">Tarbya.tn</a></p>
        </div>
      </div>
    </div>
  </footer>



  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="../../../../../vendor/jquery/jquery.min.js"></script>
  <script src="../../../../../vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="../../../../../assets/js/isotope.min.js"></script>
  <script src="../../../../../assets/js/owl-carousel.js"></script>
  <script src="../../../../../assets/js/tabs.js"></script>
  <script src="../../../../../assets/js/popup.js"></script>
  <script src="../../../../../assets/js/custom.js"></script>


  </body>

</html>
