<?php
    require_once "../../auth/requireAdminAuth.php";
   require_once "../../../controllers/AdminController.php";
   require_once "../../../controllers/UserController.php";
  $admin = new AdminController() ;  
?>

<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title>Dashboard Tables, Free Admin Template</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width">        
  <link rel="stylesheet" href="../../style/css/templatemo_main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- 
Dashboard Template 
http://www.templatemo.com/preview/templatemo_415_dashboard
-->
</head>
<body>
  <div id="main-wrapper">
    <div class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <div class="logo"><h1>Dashboard - Admin Template</h1></div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> 
      </div>   
    </div>
    <div class="template-page-wrapper">
      <div class="navbar-collapse collapse templatemo-sidebar">
        <ul class="templatemo-sidebar-menu">
          <li><a href="index.php"><i class="fa fa-home"></i>TABLEAU DE BORD</a></li>
          <li class="sub open">
            <a href="javascript:;">
              <i class="fa fa-users"></i> Utilisateurs Control <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li class="active"><a href="AdminControl.php">Administrateurs</a></li>
              <li><a href="UserControl.php">Utilisateurs</a></li>
            </ul>
          </li>
          <li><a href="CoursControl.php"><i class="fa fa-cubes"></i>Cours Control</a></li>
          <li><a href="javascript:;" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i>Sign Out</a></li>
        </ul>
      </div><!--/.navbar-collapse -->

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">

          </ol>
          <h1>Manager les Administrateurs</h1>
          <p>Voiçi le tableau des administrateurs</p>

          <div class="row margin-bottom-30">
            <div class="col-md-12">
              <ul class="nav nav-pills">
                <li class="active"><a href="#">Nombre d'administrateurs <span class="badge">
                  <?php
                     echo $admin->getAdminCount()['COUNT']; 
                  ?>
                </span></a></li>
              </ul>          
            </div>
          </div> 
          <div class="row">
            <div class="col-md-12">
              
              <div class="table-responsive">
                <h4 class="margin-bottom-15">Tableau d'administrateurs</h4>
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>Email</th>
                      <th>Nom</th>
                      <th>Prénom</th>
                      <th>Supprimer</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        $admins = $admin->getAdmins();
                        $isSup = $admin->isSup($_SESSION['email']);
                        foreach ($admins as $ad) {
                          echo "<tr>" ; 
                          echo "<td>".$ad['admin_email']."</td>";
                          echo "<td>".$ad['name']."</td>";
                          echo "<td>".$ad['lastname']."</td>";
                          if($isSup) {
                              echo "<td>
                          <form method='post' action='../../actions/deleteAdmin.php?email=".$ad['admin_email']."'>       
                          <button class='btn btn-danger' name='delete_admin' type='submit'>Delete</button>
                          </form></td>";
                          }
                          else {
                              echo "<td></td>";
                          }
                        }
                    ?>
                  </tbody>
                </table>
                <br>
                <ul class="nav nav-pills">
                  <li class="active"><a href="#">Partie d'ajout d'un Administrateur <span class="badge"></span></a></li>
                </ul>    
              </div>
              <br>
              <form method="POST" >
              <div class="table-responsive">
                <div class="col-md-6 margin-bottom-15">
                  <label for="firstName" class="control-label">nom</label>
                  <input type="text" class="form-control" id="firstName" name="name">                  
                </div>
                <div class="col-md-6 margin-bottom-15">
                  <label for="lastName" class="control-label">Prénom</label>
                  <input type="text" class="form-control" id="lastName" value="" name="lastname">                 
                </div>
                <div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="email" class="control-label">Email</label>
                    <input type="text" class="form-control" id="lastName" value="" name="email">                 
                  </div>
                  <div class="col-md-6 margin-bottom-15">
                    <label for="password" class="control-label">Mot de passe</label>
                    <input type="text" class="form-control" id="lastName" value="" name="password">                 
                  </div>
                  <div class="col-md-6 margin-bottom-15">
                    <label for="password" class="control-label">Adress</label>
                    <input type="text" class="form-control" id="lastName" value="" name="adress">                 
                  </div>
                  <div class="col-md-6 margin-bottom-15">
                    <label for="password" class="control-label">Tel</label>
                    <input type="number" class="form-control" id="lastName" value="" name="tel">                 
                  </div>
                  <div class="col-md-6 margin-bottom-15">
                    <label for="password" class="control-label">Superieur</label>
                    <select class="form-select" name="isSup">  
                      <option value="1">Vrai</option>
                      <option value="0">Faux</option>
                    </select>               
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary" name="save">Ajouter en tant qu'un administrateur</button>
            </form>
            </div>
          </div>
        </div>
      </div>
      <?php 
    
    if (isset($_POST['save'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $tel = $_POST['tel'];
        $adress = $_POST['adress'];
        $isSup = $_POST['isSup'];
       try{
        $res = $admin->create($name,$lastname,$email,$password,$tel,$adress,$isSup);
        echo $res ? "<h1>Added Successfully</h1>" : "<h1>Cannot add admin</h1>";
       }
       catch(Exception $e) {
        echo $e; 
       }

    }
?>
      <!-- Modal -->
      <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Are you sure you want to sign out?</h4>
            </div>
              <?php
                include "../../components/Logout.php";
              ?>
          </div>
        </div>
      </div>
    </div>
</div>
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/templatemo_script.js"></script>
  </body>
</html>
