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
          <li class="sub open">
            <a href="javascript:;">
              <i class="fa fa-cubes"></i> Cours Control <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="CoursControlSimples.php">Simples</a></li>
              <li><a href="CoursControlAvancees.php">Avancées</a></li>
            </ul>
          </li>
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
                <li class="active"><a href="#">Nombre de cours Avancés <span class="badge">4</span></a></li>
              </ul>          
            </div>
          </div> 
          <div class="row">
            <div class="col-md-12">
              <div class="btn-group pull-right" id="templatemo_sort_btn">
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">First Name</a></li>
                  <li><a href="#">Last Name</a></li>
                  <li><a href="#">Username</a></li>
                </ul>
              </div>
              <div class="table-responsive">
                <h4 class="margin-bottom-15">Tableau de Cours Avancés</h4>
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Description</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>John</td>
                      <td>Smith</td>     
                      <td><span class="btn btn-primary"><a href="">Voir</a></span></td>              
                      <td><span class="btn btn-primary"><a href="">Modifier</a></span>
                          <span class="btn btn-primary"><a href="">Supprimer</a></span></td>
                    </tr>           
                  </tbody>
                </table>
                <br>
              </div>
              <br>
              <div class="table-responsive">
                <div class="col-md-6 margin-bottom-15">
                  <label for="firstName" class="control-label">Nom</label>
                  <input type="text" class="form-control" id="firstName" value="">                  
                </div>
                <div class="col-md-6 margin-bottom-15">
                  <label for="lastName" class="control-label">Description</label>
                  <input type="text" class="form-control" id="lastName" value="">                 
                </div>
                <div class="row">
                </div>
              </div>
              <div class="table-responsive">
                <div class="col-md-6 margin-bottom-15">
                  <label for="firstName" class="control-label">Lien</label>
                  <input type="text" class="form-control" id="firstName" value="">                  
                </div>
                <div class="row">
                </div>
              </div>
              <div class="table-responsive">
                <div class="col-md-6 margin-bottom-15">
                    <span class="btn btn-primary"><a href="">Ajouter cours</a></span>                
                  </div>
              </div>
            </div>
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