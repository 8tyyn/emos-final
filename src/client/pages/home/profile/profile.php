<?php
    require_once "../../../auth/requireAuth.php";
    
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Cyborg - Awesome HTML5 Template</title>

    <!-- Bootstrap core CSS -->
<<<<<<< HEAD
    <link href="../../../../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../../../../../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../../../../../assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="../../../../../assets/css/owl.css">
    <link rel="stylesheet" href="../../../../../assets/css/animate.css">
=======
    <link href="../../../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../../../../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../../../../assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="../../../../assets/css/owl.css">
    <link rel="stylesheet" href="../../../../assets/css/animate.css">
>>>>>>> 26427a4b0ec5e20e9b85df3fd3edd24b9719e870
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
                  include "../../../components/navbar.php"; 
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

          <!-- ***** Banner Start ***** -->
          <div class="row">
            <div class="col-lg-12">
              <center>
              <div class="main-profile ">
                <div class="row">
                  <div class="col-lg-4">
<<<<<<< HEAD
                    <img src="../../../../../assets/images/profile2.jpg" alt="" style="border-radius: 23px;">
=======
                    <img src="../../../../assets/images/profile2.jpg" alt="" style="border-radius: 23px;">
>>>>>>> 26427a4b0ec5e20e9b85df3fd3edd24b9719e870
                  </div>
                  <div class="col-lg-4 align-self-center">
                    <div class="main-info header-text">
                      <span>Enseignant</span> <br>
                      <?php
                      echo "<br> <h4>" . $row['name'] . " " . $row['lastname'] . "</h4>";
                      ?>
                      <p>tu veux te déconnecter ? <br> Cliquez ici</p>
                      <form action="logout.php">
                      <div class="main-border-button">
                        <div class="logout">
                        <a href="../../auth/logout.php">Déconnexion</a>
                        </div>
                      </div>
                      </form>
                      
                      <div class="main-border-button">
                      <div class="supprimer">
                        <a href="validerSup.php">Supprimer le compte</a>
                      </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div> 
              </center> 
            </div>
          </div>
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
<<<<<<< HEAD
  <script src="../../../../../vendor/jquery/jquery.min.js"></script>
  <script src="../../../../../vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="../../../../../assets/js/isotope.min.js"></script>
  <script src="../../../../../assets/js/owl-carousel.js"></script>
  <script src="../../../../../assets/js/tabs.js"></script>
  <script src="../../../../../assets/js/popup.js"></script>
  <script src="../../../../../assets/js/custom.js"></script>
=======
  <script src="../../../../vendor/jquery/jquery.min.js"></script>
  <script src="../../../../vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="../../../../assets/js/isotope.min.js"></script>
  <script src="../../../../assets/js/owl-carousel.js"></script>
  <script src="../../../../assets/js/tabs.js"></script>
  <script src="../../../../assets/js/popup.js"></script>
  <script src="../../../../assets/js/custom.js"></script>
>>>>>>> 26427a4b0ec5e20e9b85df3fd3edd24b9719e870


  </body>

</html>
