<?php
require_once "../../auth/requireAdminAuth.php";

  require_once "../../../controllers/CoursController.php";
  $coursController = new CoursController(); 
  $id = $_GET['id']; 
  echo $id ; 
  $cours = $coursController->getSingleCours($id);
  $title = $cours['title']; 
  $content = $cours['content']; 
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
          <li class="sub">
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
          <form method="post">
              <div class="table-responsive">
                  <h4 class="margin-bottom-15">Modifier un cours</h4>
                  <div class="col-md-6 margin-bottom-15">
                      <label for="firstName" class="control-label">Titre</label>
                      <?php
                      echo "<input type='text' class='form-control' name='title' value=".$title." >";
                      ?>
                  </div>
                  <div class="row">
                  </div>
              </div>
              <div class="table-responsive">
                  <div class="col-md-6 margin-bottom-15">
                      <label for="firstName" class="control-label">Contenu</label>
                      <?php
                      echo '<textarea name="content" class="form-control" name="content" id="" cols="30" rows="10" value="'.$content.'">'.$content.'</textarea>';
                      ?>

                  </div>
                  <div class="row">
                  </div>
              </div>
              <button class='btn btn-success' name='modifier_cour' type='submit'>Enregistrer</button>
              <button class='btn btn-danger' name='retour' type='submit'><a href="VoirCours.php">Retour</a></button>
        </div>
          </form>
      </div>
      <style>
        .templatemo-content {
        position: relative;
        }

        .btn-success {
        position: absolute;
        top: 70px; 
        right: 70px;
        }
        .btn-danger {
        position: absolute;
        top: 120px; 
        right: 70px;
        }
      </style>

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
<?php
try{
    if(isset($_POST['modifier_cour'])) {
        $newTitle = $_POST['title'];
        $newContent = $_POST['content'];
        if($coursController->modifyCours($id,$newTitle,$newContent,"3ASSBA@gmail.com")) {
            echo "<p class='alert alert-success'> Modified Successfully</p>";
        }
        else {
            echo "L3ASSBA";
        }
    }
}
catch(Exception $e) {
    echo $e;
}
?>