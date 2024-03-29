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
            <nav class="main-nav">
             <a href="index.php" class="logo">
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../../../../../assets/images/logoo.png" alt="">
             </a>

               <div class="search-input">
                 <form id="search" action="#">
                    <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                    <i class="fa fa-search"></i>
                  </form>
                 </div>
            <ul class="nav">
              <li><a href="/WEBSITE/EMOS/src/client/pages/home/index.php">Home</a></li>
              <li><a href="introduction.php">Introduction</a></li>
              <li><a href="https://drive.google.com/file/d/1fY7BvHGxAa7bVT8DSzPMLo_6C2IUmqR6/view?usp=sharing">Télécharger</a></li>
              <li><a href="/WEBSITE/EMOS/src/client/pages/home/profile/profile.php">
                <?php

                echo " " . $row['lastname'] . "";
                ?>
                <img src="../../../../../assets/images/profile-header.jpg" alt="">
            </a></li>
             </ul>
             <a class='menu-trigger'>
                <span>Menu</span>
               </a>
 
             </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** Featured Games Start ***** -->
          <div class="row">
            <div class="col-lg-8">
              <div class="featured-games header-text">
                <div class="heading-section">
                  <h4><em>Programmes</em> Simples</h4>
                </div>
                <div class="owl-features owl-carousel">
                  <div class="item">
                    <div class="thumb">
                      <img src="../../../../../assets/images/programme2.gif" alt="">
                      <div class="hover-effect">
                        <h6><a href="../courses/simple/avancement.php">voir le code</a></h6>
                      </div>
                    </div>
                    <h4>avancement<br><span>Cartes</span></h4>
                    <ul>
                      <li><i class="fa fa-star"></i> 2</li>
                      <li><i class="fa fa-download"></i> 6</li>
                    </ul>
                  </div>
                  <div class="item">
                    <div class="thumb">
                      <img src="../../../../../assets/images/programme4.gif" alt="">
                      <div class="hover-effect">
                        <h6><a href="../courses/simple/tourner.php">voir le code</a></h6>
                      </div>
                    </div>
                    <h4>Tourner Droite<br><span>Cartes</span></h4>
                    <ul>
                      <li><i class="fa fa-star"></i> 2.7</li>
                      <li><i class="fa fa-download"></i> 13</li>
                    </ul>
                  </div>
                  <div class="item">
                    <div class="thumb">
                      <img src="../../../../../assets/images/programme5.gif" alt="">
                      <div class="hover-effect">
                        <h6><a href="../courses/simple/cercle.php">voir le code</a></h6>
                      </div>
                    </div>
                    <h4>Cercle<br><span>Cartes</span></h4>
                    <ul>
                      <li><i class="fa fa-star"></i> 1.2</li>
                      <li><i class="fa fa-download"></i> 3</li>
                    </ul>
                  </div>
                  <div class="item">
                    <div class="thumb">
                      <img src="../../../../../assets/images/programme6.gif" alt="">
                      <div class="hover-effect">
                        <h6><a href="../courses/simple/carre.php">voir le code</a></h6>
                      </div>
                    </div>
                    <h4>Carré<br><span>Cartes</span></h4>
                    <ul>
                      <li><i class="fa fa-star"></i> 3</li>
                      <li><i class="fa fa-download"></i> 31</li>
                    </ul>
                  </div>
                 
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="top-downloaded">
                <div class="heading-section">
                  <h4>Codes</h4>
                </div>
                <ul>
                  <li>
                    <img src="../../../../../assets/images/walking.gif" alt="" class="templatemo-item">
                    <h4>Avancement</h4>
                    <h6>sb3</h6>
                    <span><i class="fa fa-star" style="color: yellow;"></i> 2</span>
                    <span><i class="fa fa-download" style="color: #ec6090;"></i> 6</span>
                    <div class="download">
                      <a href="https://drive.google.com/file/d/1t_cyM4hxDxqJdycwKKgnGnHXuPvXaDFg/view?usp=sharing"><i class="fa fa-download"></i></a>
                    </div>
                  </li>
                  <li>
                    <img src="../../../../../assets/images/turning.gif" alt="" class="templatemo-item">
                    <h4>Tourner Droite</h4>
                    <h6>sb3</h6>
                    <span><i class="fa fa-star" style="color: yellow;"></i> 2.7</span>
                    <span><i class="fa fa-download" style="color: #ec6090;"></i> 13</span>
                    <div class="download">
                      <a href="https://drive.google.com/file/d/1jMmRRwoLGMAidhBBzBLGycEx68Qw2upA/view?usp=sharing"><i class="fa fa-download"></i></a>
                    </div>
                  </li>
                  <li>
                    <img src="../../../../../assets/images/circle.gif" alt="" class="templatemo-item">
                    <h4>Cercle</h4>
                    <h6>sb3</h6>
                    <span><i class="fa fa-star" style="color: yellow;"></i> 1.2</span>
                    <span><i class="fa fa-download" style="color: #ec6090;"></i> 3</span>
                    <div class="download">
                      <a href="https://drive.google.com/file/d/1k52vTXQNzugTIpJjQpMqI4wTLRlnyjaU/view?usp=sharing"><i class="fa fa-download"></i></a>
                    </div>
                  </li>
                </ul>
                <div class="text-button">
                  <a href="#prog">Télécharger tous</a>
                </div>
              </div>
            </div>
          </div>
          


          
          <div class="live-stream">
            <div class="col-lg-12">
              <div class="heading-section">
                <h4 id="prog">Tous les programmes</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3 col-sm-6">
                <div class="item">
                  <div class="thumb">
                    <img src="../../../../../assets/images/walking.gif" alt="">
                    <div class="hover-effect">
                      <div class="content">
                        <div class="live">
                          <a href="#">sb3</a>
                        </div>
                        <ul>
                          <li><a href="https://drive.google.com/file/d/1t_cyM4hxDxqJdycwKKgnGnHXuPvXaDFg/view?usp=sharing"><i class="fa fa-download"></i> Télécharger</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="down-content">
                    <center>
                    <span><i class="fa fa-check"></i> Avancement</span>
                    </center>
                  </div> 
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="item">
                  <div class="thumb">
                    <img src="../../../../../assets/images/turning.gif" alt="">
                    <div class="hover-effect">
                      <div class="content">
                        <div class="live">
                          <a href="#">sb3</a>
                        </div>
                        <ul>
                          <li><a href="https://drive.google.com/file/d/1jMmRRwoLGMAidhBBzBLGycEx68Qw2upA/view?usp=sharing"><i class="fa fa-download"></i> Télécharger</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="down-content">
                    <center>
                    <span><i class="fa fa-check"></i> Tourner droite</span>
                    </center>
                  </div> 
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="item">
                  <div class="thumb">
                    <img src="../../../../../assets/images/circle.gif" alt="">
                    <div class="hover-effect">
                      <div class="content">
                        <div class="live">
                          <a href="#">sb3</a>
                        </div>
                        <ul>
                          <li><a href="https://drive.google.com/file/d/1k52vTXQNzugTIpJjQpMqI4wTLRlnyjaU/view?usp=sharing"><i class="fa fa-download"></i> Télécharger</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="down-content">
                    <center>
                    <span><i class="fa fa-check"></i> Cercle</span>
                    </center>
                  </div> 
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="item">
                  <div class="thumb">
                    <img src="../../../../../assets/images/carré.gif" alt="">
                    <div class="hover-effect">
                      <div class="content">
                        <div class="live">
                          <a href="#">sb3</a>
                        </div>
                        <ul>
                          <li><a href="https://drive.google.com/file/d/1MeLuYTjn6EKPfrlzmjKazLKB4CAqAPDE/view?usp=sharing"><i class="fa fa-download"></i> Télécharger</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="down-content">
                    <center>
                    <span><i class="fa fa-check"></i> Carré</span>
                    </center>
                  </div> 
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="hard.php">Programmes Avancées</a>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Live Stream End ***** -->

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
