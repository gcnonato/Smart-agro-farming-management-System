
<?php
  session_start();
  if(!isset($_SESSION['login_user'])){
    header("location:index.php");
    echo "<script type='text/javascript'>alert('error2');</script>";
  }
  else{
    $name = $_SESSION['login_user'];
    // echo "<script type='text/javascript'>alert('$name');</script>";
  }

  $Schedule_check="0";  
?>



<!DOCTYPE html>
<html lang="en">

<head>

  <div class="container">

<a href="https://www.accuweather.com/en/lk/colombo/311399/weather-forecast/311399" class="aw-widget-legal">
<!--
By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at https://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at https://www.accuweather.com/en/privacy.
-->
</a><div id="awcc1538039911359" class="aw-widget-current"  data-locationkey="311399" data-unit="c" data-language="en-us" data-useip="true" data-uid="awcc1538039911359"></div><script type="text/javascript" src="https://oap.accuweather.com/launch.js"></script>

    
<!-- <a href="https://www.accuweather.com/en/lk/nuwara-eliya/307308/weather-forecast/307308" class="aw-widget-legal">

</a><div id="awcc1528797381923" class="aw-widget-current"  data-locationkey="307308" data-unit="c" data-language="en-us" data-useip="false" data-uid="awcc1528797381923"></div><script type="text/javascript" src="https://oap.accuweather.com/launch.js"></script><br><br> -->

<script type="text/javascript" src="accW.js"></script>
<style>


div.aw-widget-current-inner a.aw-toggle {
    -webkit-border-radius: 0 0 4px 4px!important;
    -moz-border-radius: 0 0 4px 4px!important;
    border-radius: 0 0 4px 4px!important;
    -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.15)!important;
    -moz-box-shadow: 0 1px 1px rgba(0,0,0,.15)!important;
    box-shadow: 0 1px 1px rgba(0,0,0,.15)!important;
    position: absolute!important;
    z-index: 10!important;
    width: 26px!important;
    height: 16px!important;
    background: #e9e9e9!important;
    bottom: 0!important; 
    right: 10px!important; 
    border: 1px solid #dcdcdc!important;
    display: none!important;
}

.container {
    width: 100%;
     padding-right: 15px; 
     padding-left: 15px; 
     margin-right: auto; 
    margin-left: auto;


       width:100%;
    height:100%;
    object-fit: cover;
    overflow: hidden;
}
.bg-dark {
    background-color: #343a40!important;
}
</style>

</div>


  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>e-Farmer</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">



    <img src="img/logo.png"  class="logo1"alt="Homepage">
    <a class="navbar-brand" id="navbar-brand" href="profile.php">E-Farmer</a>
    <style>img.logo1{
	height: 50px;
}</style>








    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="weather.php">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Weather</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="tables.html">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Harvest</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">History</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="navbar.html">Commiunity</a>
            </li>
            <li>
              <a href="cards.html">Cards</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Example Pages</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="login.html">Login Page</a>
            </li>
            <li>
              <a href="register.html">Registration Page</a>
            </li>
            <li>
              <a href="forgot-password.html">Forgot Password Page</a>
            </li>
            <li>
              <a href="blank.html">Blank Page</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Menu Levels</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
              <ul class="sidenav-third-level collapse" id="collapseMulti2">
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Link</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>David Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Jane Smith</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>John Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper" id="bodyhome">
    <div class="container-fluid">
      <div class="row">
<br>
<style>
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 20%;
    margin-left: 1%;
    margin-bottom: 1%;
    background-image: url("img/tile1.jpg");
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
    padding: 2px 16px;
}
#bodyhome{
  background-image: "img/bg1.jpg";
}

</style>


<?php
include("config.php");
  $getuserID_SQL = "SELECT farmerID from farmer WHERE name LIKE '$name'";
    $result2 = $conn->query($getuserID_SQL);
    if ($result2->num_rows > 0) {;
      // 
    while($row = $result2->fetch_assoc()) {
      $_SESSION['farmerID'] =  $row["farmerID"];
      $farmerID =  $_SESSION['farmerID'];
      // echo "$row['farmerID']";
    }}
  $sql = "SELECT c.nameENG FROM crop c,variety v,farmercrop fc,farmer f WHERE f.name = '$name' AND f.farmerID=fc.farmerID AND v.cropID=c.cropID AND fc.verityID=v.varietyID";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                    $sql2 = "SELECT DISTINCT fc.scheduleID,s.info, fc.dateSc  FROM crop c,steps s,variety v,farmercrop fc,farmer f WHERE fc.farmerID = '2' AND s.stepID = fc.currentStepID AND f.farmerID=fc.farmerID AND v.cropID=c.cropID";
                    $result2 = $conn->query($sql2);
                    if ($result2->num_rows > 0) {
                          while($row = $result2->fetch_assoc()) {
                            $result_array[]=$row;
                            ?><br><?php
                            
                        }
                        foreach($result_array as $key=>$value){
                            ?>
                            <!-- home.php?code=<?php echo $result_array[$key]["scheduleID"]; ?> -->
                                <div class="card">
                                  <form method="POST" action="">
                                <input type="image" src="img/tile2.jpg" onClick="document.location.href='2.php'"  class = "tile" alt="Avatar" style="width:100%"  />
                                <div class="centered"><h2><?php echo $result_array[$key]["info"]; ?></h2>
                                  <label class="info"><h6><?php echo $result_array[$key]["dateSc"]; ?></h6></label>
                                  <button type="submit" class="btn btn-primary" name="done" value="done" data-toggle="modal" data-target="#myModal">  Done   </button>
                                  <button type="submit" class="btn btn-warning"  name="details" onsubmit="event.preventDefault();"> More Details </button>
                                  <input type="hidden" name="key" value="<?php echo $result_array[$key]["scheduleID"]; ?>">
                                  <style type="text/css">
                                    .btn{
                                      border-radius: 26px;
                                      color: white;
                                    }
                                  </style>


                                  <!-- <div><input type="submit" value="more details" class="btnAddAction pull-right pagado" data-toggle="modal" data-target="#myModal"/> -->


                                </div>
                                </form>
                              </div>

                        <?php
                            }
                     ?>
                      <div class="card">
                      <input type="image" src="img/tile1.jpg" onClick="document.location.href='2.php'"  class = "tile" alt="Avatar" style="width:100%"  />
                      <div class="centered">Add new Crop</div>
                      </div>
                     <?php     


                    }
            }
   
    if ($result->num_rows == 0){?>
      <div class="card">
      <input type="image" src="img/tile1.jpg" onClick="document.location.href='2.php'"  class = "tile" alt="Avatar" style="width:100%"  />
      <div class="centered">Start Cultivating !</div>
      </div>
    <?php } ?>

    <?php
        if(isset($_POST['done'])){
        echo $_POST['key'];
        echo "<script type='text/javascript'>
			$(document).ready(function(){
			$('#myModal').modal('modal');
			});
			</script>";
      }
    ?>






</div>
      <!-- DATA MODAL -->
      <div class="container">
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                
              </div>
              <div class="modal-body">
                <img src="<?php echo "https://www.w3schools.com/w3css/img_lights.jpg" ?>" class="media-photo" style="width:100%; "> 
                <p><strong><?php echo "sd" ?></strong></p>
                <p><?php echo "sds" ?></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            
          </div>
        </div>
        
      </div>









<style>
	.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color:white;
    font-family: sans-serif;
    font-size: 30px;
    text-align: center;
}
</style>





    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>

    <script>
  window.onload = function setUser(){
  document.getElementById("navbar-brand").innerHTML ="Welcome " + 
  "<?php echo($name)?>";
}
</script>

</body>

</html>