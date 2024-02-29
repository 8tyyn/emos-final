<?php 
  require_once "../../controllers/CoursController.php";
  $coursController = new CoursController() ;
  $cours = $coursController->getAllCours();
  $count= $coursController->getCoursesCount($cours);

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
          <li class="active"><a href="CoursControl.php"><i class="fa fa-cubes"></i>Cours Control</a></li>
          <li><a href="javascript:;" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i>Sign Out</a></li>
        </ul>
      </div><!--/.navbar-collapse -->

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
            
          </ol>
          <h1>Manager les Cours Avancés</h1>
          <p>Voiçi le tableau des cours</p>

          <div class="row margin-bottom-30">
            <div class="col-md-12">
              <ul class="nav nav-pills">
                <li class="active"><a href="#">Nombre de cours <span class="badge">
                            <?php
                                echo $count ;
                            ?>
                        </span></a></li>
              </ul>          
            </div>
          </div> 
          <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <h4 class="margin-bottom-15">Tableau de Cours</h4>
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>Titre</th>
                      <th>Contenu</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        foreach ($cours as $cs) {
                            echo "<tr>"; 
                            echo "<td>".$cs['title']."</td>";
                            echo "<td>".$cs['content']."</td>";
                      
                            echo '<td><span class="btn btn-primary"><a href="VoirCours.php?id='.$cs['id'].'">Voir</a></span></td>';
                            echo '<td><span class="btn btn-success"><a href="GoModifyCour.php?id='.$cs['id'].'">Modifier</a></span>';
                            echo '<span class="btn btn-danger"><a href="../../actions/cours/deleteCours.php?id='.$cs['id'].'">Supprimer</a></span></td>';
                            echo "</tr>"; 
                          }
                    ?>
                  </tbody>
                </table>
                <br>
              </div>
              <br>
              <form method="POST">
              <div class="table-responsive">
              <h4 class="margin-bottom-15">Partie d'ajout d'un cours</h4>
                <div class="col-md-6 margin-bottom-15">
                  <label for="firstName" class="control-label">Titre</label>
                  <input type="text" class="form-control" id="firstName" name="title">                  
                </div>
                <div class="row">
                </div>
              </div>
              <div class="table-responsive">
                <div class="col-md-6 margin-bottom-15">
                  <label for="firstName" class="control-label">Contenu</label>
                  <textarea name="content" class="form-control" id="" cols="30" rows="10"></textarea>                  
                </div>
                <div class="row">
                </div>
              </div>
              <div class="table-responsive">
                <div class="col-md-6 margin-bottom-15">
                    <button class="btn btn-success" type="submit" name="save">Ajouter cours</button>                
                  </div>
              </div>
            </div>
              </form>
         
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Are you sure you want to sign out?</h4>
            </div>
            <div class="modal-footer">
              <a href="sign-in.html" class="btn btn-primary">Yes</a>
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
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
          if(isset($_POST['save'])) {
            $title = $_POST['title']; 
            $content = $_POST['content'];
            if($coursController->create($title,$content,"3ASSBA@gmail.com")) {
              header("location: https://www.google.com");
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