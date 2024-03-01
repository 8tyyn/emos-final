<?php

require_once "../../auth/requireAdminAuth.php";

  require_once "../../../controllers/AdminController.php";
  require_once "../../../controllers/ClientController.php";
  $client = new ClientController(); 
  $admin = new AdminController(); 
  $clients= $client->getClients() ; 
  $admins= $admin->getAdmins() ; 
  $teachersCount = $client->getTeacherCount($clients) ; 
  $studentsCount = $client->getStudentCount($clients) ; 
?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title>Dashboard, Free HTML5 Admin Template</title>
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
  <div class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <div class="logo"><h1>TABLEAU DE BORD D'ADMINISTRATION</h1></div>
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
          <li class="active"><a href="#"><i class="fa fa-home"></i>TABLEAU DE BORD</a></li>
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
            <li><a href="index.html">Admin Panel</a></li>
            <li><a href="#">Dashboard</a></li>
            <li class="active">Overview</li>
            <li><a href="sign-in.html">Sign In Form</a></li>
          </ol>
          <h1>Dashboard</h1>
          <div class="margin-bottom-30">
            <div class="row">
              <div class="col-md-12">
                <ul class="nav nav-pills">
                  <li class="active"><a href="#">Aministrateurs <span class="badge">
                    <?php
                      echo $admin->getAdminCount()['COUNT']; 
                    ?>
                  </span></a></li>
                  <li class="active"><a href="#">Enseignant <span class="badge">
                  <?php
                      echo $teachersCount ; 
                    ?>
                  </span></a></li>
                  <li class="active"><a href="#">Eleve <span class="badge">
                  <?php
                      echo $studentsCount; 
                    ?>
                  </span></a></li>
                </ul>          
              </div>
            </div>
          </div>         

          <div class="row">
            
          </div>
          <div class="templatemo-panels">
            <div class="row">
              <div class="col-md-6 col-sm-6 margin-bottom-30">
                <div class="panel panel-primary">
                  <div class="panel-heading">Administrateurs</div>
                  <div class="panel-body">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Email</th>
                          <th>Nom</th>
                          <th>Prénom</th>
                          <th>Est Superieur</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                            foreach ($admins as $admin) {
                              $type = $admin['isSup'] =='1' ? 'Vrai' : 'Faux'; 
                              echo "<tr>"; 
                                echo "<td> ".$admin['admin_email']." </td>";
                                echo "<td>".$admin['name']."</td>";
                                echo "<td>".$admin['lastname']."</td>";
                                echo "<td>".$type."</td>";
                                echo "</tr>"; 
                            }
                          ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <span class="btn btn-primary"><a href="AdminControl.html">Voir tout</a></span>
              </div>   
              <div class="col-md-6 col-sm-6 margin-bottom-30">
                <div class="panel panel-primary">
                  <div class="panel-heading">Utilisateurs</div>
                  <div class="panel-body">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Email</th>
                          <th>Nom</th>
                          <th>Prénom</th>
                          <th>Type</th>
                        </tr>
                      </thead>
                      <tbody>
                   
                          <?php
                            foreach ($clients as $client) {
                              $type = $client['isStudent'] =='1' ? 'Eleve' : 'Enseignant'; 
                              echo "<tr>"; 
                                echo "<td> ".$client['utilisateur_email']." </td>";
                                echo "<td>".$client['name']."</td>";
                                echo "<td>".$client['lastname']."</td>";
                                echo "<td>".$type."</td>";
                                echo "</tr>"; 
                            }
                          ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <span class="btn btn-primary"><a href="UserControl.html">Voir tout</a></span>
              </div>       
            </div>
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist" id="templatemo-tabs">
                  <li class="active"><a href="#profile" role="tab" data-toggle="tab">Cours</a></li>
                  
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div class="tab-pane fade in active" id="profile">
                    <ul class="list-group">
                      <li class="list-group-item">
                        <span class="badge">33</span>
                        Simples
                      </li>
                      <li class="list-group-item">
                        <span class="badge">9</span>
                        Avancés
                      </li>
                    </ul>
                    <span class="btn btn-primary"><a href="CoursControlAvancées.html">Modifier</a></span>
                  </div>
                  
                 
                </div> <!-- tab-content --> 
              </div> 
              <div class="col-md-6 col-sm-6">
                <div class="panel-group" id="accordion">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                          Accordion Item 1
                        </a>
                      </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                          Accordion Item 2
                        </a>
                      </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                          Accordion Item 3
                        </a>
                      </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                      <div class="panel-body">
                        <button type="button" id="loading-example-btn" data-loading-text="Loading..." class="btn btn-primary">
                          Click here
                        </button> to load.
                      </div>
                    </div>
                  </div>
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
              <?php
              include "../../components/Logout.php";
              ?>
          </div>
        </div>
      </div>
    </div>

    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/Chart.min.js"></script>
    <script src="../../js/templatemo_script.js"></script>
    <script type="text/javascript">
    // Line chart
    var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
    var lineChartData = {
      labels : ["January","February","March","April","May","June","July"],
      datasets : [
      {
        label: "My First dataset",
        fillColor : "rgba(220,220,220,0.2)",
        strokeColor : "rgba(220,220,220,1)",
        pointColor : "rgba(220,220,220,1)",
        pointStrokeColor : "#fff",
        pointHighlightFill : "#fff",
        pointHighlightStroke : "rgba(220,220,220,1)",
        data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
      },
      {
        label: "My Second dataset",
        fillColor : "rgba(151,187,205,0.2)",
        strokeColor : "rgba(151,187,205,1)",
        pointColor : "rgba(151,187,205,1)",
        pointStrokeColor : "#fff",
        pointHighlightFill : "#fff",
        pointHighlightStroke : "rgba(151,187,205,1)",
        data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
      }
      ]

    }

    window.onload = function(){
      var ctx_line = document.getElementById("templatemo-line-chart").getContext("2d");
      window.myLine = new Chart(ctx_line).Line(lineChartData, {
        responsive: true
      });
    };

    $('#myTab a').click(function (e) {
      e.preventDefault();
      $(this).tab('show');
    });

    $('#loading-example-btn').click(function () {
      var btn = $(this);
      btn.button('loading');
      // $.ajax(...).always(function () {
      //   btn.button('reset');
      // });
  });
  </script>
</body>
</html>