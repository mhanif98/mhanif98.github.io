
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HanifU</title>

  <!-- Global stylesheets -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
  <link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
  <link href="assets/css/icons/fontawesome/styles.min.css" rel="stylesheet" type="text/css">
  <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="assets/css/core.css" rel="stylesheet" type="text/css">
  <link href="assets/css/components.css" rel="stylesheet" type="text/css">
  <link href="assets/css/colors.css" rel="stylesheet" type="text/css">
  <!-- /global stylesheets -->

  <!-- Core JS files -->
  <script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
  <script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
  <script type="text/javascript" src="assets/js/plugins/ui/nicescroll.min.js"></script>
  <script type="text/javascript" src="assets/js/plugins/ui/drilldown.js"></script>
  <script type="text/javascript" src="assets/js/plugins/ui/fab.min.js"></script>
  <!-- /core JS files -->

  <!-- Theme JS files -->
  <script type="text/javascript" src="assets/js/plugins/velocity/velocity.min.js"></script>
  <script type="text/javascript" src="assets/js/plugins/velocity/velocity.ui.min.js"></script>
  <script type="text/javascript" src="assets/js/plugins/ui/prism.min.js"></script>

  <script type="text/javascript" src="assets/js/core/app.js"></script>
  <script type="text/javascript" src="assets/js/pages/animations_velocity_examples.js"></script>
  <script type="text/javascript" src="assets/js/pages/general_widgets_content.js"></script>
  
  <!-- /theme JS files -->
  <link rel="Shortcut icon" type="text/css" href="img/logo.JPG">

</head>

<body class="navbar-bottom" style="background-image: url(img/thh.png);">

  <!-- Page header -->
  <div class="page-header page-header-inverse">

    <!-- Page header content -->
    <div class="page-header-content">
      <div class="page-title">
        <h4>HanifU</h4>
      </div>

      <div class="heading-elements">
        <ul class="breadcrumb heading-text">
          <li class="fa fa-gamepad position-left active"> Logic</li><!-- 
          <li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
          <li><a href="animations_velocity_examples.html">Velocity</a></li>
          <li class="active">Advanced</li> -->
        </ul>
      </div>
    </div>
    <!-- /page header content -->


    <!-- Second navbar -->
    <div class="navbar navbar-inverse navbar-transparent" id="navbar-second">
      <ul class="nav navbar-nav visible-xs-block">
        <li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second-toggle"><i class="icon-paragraph-justify3"></i></a></li>
      </ul>

      <div class="navbar-collapse collapse" id="navbar-second-toggle">
        <ul class="nav navbar-nav navbar-nav-material">
          <li><a href="Home.php"><i class="icon-home2 position-left"></i> Home</a></li>
          <li><a href="User.php"><i class="fa fa-gamepad"></i> Logic</a></li>
          <li><a href="About.php"><i class="icon-user-tie position-left"></i> About Me</a></li>

        </ul>

        <ul class="nav navbar-nav navbar-nav-material navbar-right">
          <li>
            <a href="#">
              <span id="timestamp"></span>
              
            </a>
          </li>

        </ul>
      </div>
    </div>
    <!-- /second navbar -->

  </div>
  <!-- /page header -->


  <!-- Page container -->
  <div class="page-container">

    <!-- Page content -->
    <div class="page-content">

      <!-- Main content -->
      <div class="content-wrapper">
        <div class="row">

            <!-- About -->
            <div class="panel panel-flat">
              <div class="panel-heading">
                <h5 class="panel-title"><b>Logic</b></h5>
                <div class="heading-elements">
                  <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="reload"></a></li>
                            <li><a data-action="close"></a></li>
                          </ul>
                        </div>
              </div>

              <!-- <div class="panel-body text-center">
                  <img src="img/hanifu.JPG" class="img-thumbnail" alt="Cinque Terre">
              </div> -->
              <div class="panel-body">
                
                <form action="LogicFunction.php" method="POST" class="login-form">

                  <div class="text-center">
                    <h5>Welcome <b><?php echo $_POST['name']; ?> </b>, <?php 
                      date_default_timezone_set('Asia/Jakarta');
                      if (date('H') >= 1 && date('H') <= 10) {
                        echo "Good Morning";
                      }
                      else if (date('H') >= 11 && date('H') <= 18) {
                        echo "Good Afternoon";
                      }
                      else if (date('H') >= 19 && date('H') <= 24) {
                        echo "Good Night";
                      }
                    ?>
                    </h5>
                    <h5>In this menu you will learn about the logic programming Now please input a value and choose a button</h5>
                  
          
                    <div class="form-group has-feedback has-feedback-left">
                      <input type="number" class="form-control" id="value" placeholder="Value" name="value" required min="1" max="10" required>
                      <div class="form-control-feedback">
                        <i class="icon-grid2 text-muted"></i>
                      </div>
                    </div>

                    <div class="form-group">
                      <button type="button" class="btn btn-danger btn-rounded" onclick="self.history.back()"><i class="icon-arrow-left13 position-left" ></i> Back</button>
                      <button type="submit" class="btn btn-primary" name="hp">Half Pyramid</button>
                      <button type="submit" class="btn btn-primary" name="p">Parallelogram</button>
                      <button type="submit" class="btn btn-primary" name="fp">Full Pyramid</button>
                      <button type="submit" class="btn btn-primary" name="ihp">Inverted Half Pyramid</button>
                      
                      <input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
                    </div>

                  </div>
              </form>
                
              </div>

            </div>
            <!-- /About -->
            
        </div>

      </div>
      <!-- /main content -->

    </div>
    <!-- /page content -->

  </div>
  <!-- /page container -->


  <!-- Footer -->
  <div class="navbar navbar-default navbar-fixed-bottom footer">
    <ul class="nav navbar-nav visible-xs-block">
      <li><a class="text-center collapsed" data-toggle="collapse" data-target="#footer"><i class="icon-circle-up2"></i></a></li>
    </ul>

    <div class="navbar-collapse collapse" id="footer">
      <div class="navbar-text">
        &copy; 2020 - 2021 <a href="#" class="navbar-link">HanifU Web App</a> by <b>Muhammad Hanif</b>
      </div>

      <div class="navbar-right">
        <ul class="nav navbar-nav">
          <li><a href="#">v1.1</a></li>
          <!-- <li><a href="#">Terms</a></li>
          <li><a href="https://api.whatsapp.com/send?phone=6289650546948&text=Hai%20Saya%20Hanif">Contact</a></li> -->
        </ul>
      </div>
    </div>
  </div>
  <!-- /footer -->

  <!-- jam -->
  <script>
    // Function ini dijalankan ketika Halaman ini dibuka pada browser
    $(function(){
    setInterval(timestamp, 1000);//fungsi yang dijalan setiap detik, 1000 = 1 detik
    });

    //Fungi ajax untuk Menampilkan Jam dengan mengakses File ajax_timestamp.php
    function timestamp() {
    $.ajax({
    url: 'jam_logic.php',
    success: function(data) {
    $('#timestamp').html(data);
    },
    });
    }
  </script>

</body>
</html>
