
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
  <!-- <?php $name = $_POST['name']; ?> -->
  <!-- Page header -->
  <div class="page-header page-header-inverse">

    <!-- Page header content -->
    <div class="page-header-content">
      <div class="page-title">
        <h4>HanifU</h4>
      </div>

      <div class="heading-elements">
        <ul class="breadcrumb heading-text">
          <li class="icon-home2 position-left active"> Home</li><!-- 
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
          <div class="col-lg-8">
            <!-- About -->
            <div class="panel panel-flat">
              <div class="panel-heading">
                <h5 class="panel-title"><b>Home</b></h5>
                <div class="heading-elements">
                  <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="reload"></a></li>
                            <li><a data-action="close"></a></li>
                          </ul>
                        </div>
              </div>

              <div class="panel-body text-center">
                  <img src="img/hanifu.JPG" class="img-thumbnail" alt="Cinque Terre">
              </div>
              <div class="panel-body">
                <h5>Welcome, <?php 
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
                  <h5>Enjoy Your Life With HanifU</h5>
                  <p>HanifU Static Web Page</p>
                  <p style="text-align: justify;">Een statische website bevat webpagina's met vaste inhoud. Elke pagina is gecodeerd in HTML en toont dezelfde informatie voor elke bezoeker. Statische sites zijn het meest basale type website en zijn het gemakkelijkst te maken. In tegenstelling tot dynamische websites hebben ze geen webprogrammering of databaseontwerp nodig. Een statische site kan worden gebouwd door simpelweg een paar HTML-pagina's te maken en deze op een webserver te publiceren (techterms, 2009).</p>
                
                  
              </div>


            </div>
            <!-- /About -->

            <!-- Music -->
                <div class="panel text-center">
                  <div class="panel-body">
                    
                    <div class="panel-body bg-slate-800 border-radius-top text-center" style="background-image: url(img/prk.jpg); background-size: contain;">
                      <div class="content-group-sm">
                        <h6 class="text-semibold no-margin-bottom">
                          Music
                        </h6>
                      </div>
                      <div class="content-group-sm">
                        <a href="#" class="display-inline-block content-group-sm">
                          <img src="img/gtr.jpg" class="img-circle img-responsive" alt="" style="width: 100px; height: 110px;">
                        </a>
                      </div>
                      
                        <audio loop controls>
                          <source src="msc/cno.mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                          </audio>  
                      
                        <audio loop controls>
                          <source src="msc/cga.mp3" type="audio/mpeg">
                             Your browser does not support the audio element.
                          </audio> 

                    </div>

                  </div>
                </div>
                <!-- /Music -->

          </div>

          <div class="col-lg-4">
            <!-- row -->
            <div class="row">
              <div class="col-md-6">

                <!-- images -->
                <div class="panel text-center">
                  <div class="panel-body">

                            <div class="panel-body bg-slate-800 border-radius-top text-center" style="background-image: url(http://demo.interface.club/limitless/assets/images/bg.png); background-size: contain;">
                      <div class="content-group-sm">
                        <h6 class="text-semibold no-margin-bottom">
                          Sun
                        </h6>
                      </div>

                      <a href="#" class="display-inline-block content-group-sm">
                        <img src="img/ts.jpg" class="img-circle img-responsive" alt="" style="width: 110px; height: 110px;">
                      </a>
                      
                    </div>

                  </div>
                </div>
                <!-- /images -->

              </div>

              <div class="col-md-6">
                <!-- images -->
                <div class="panel text-center">
                  <div class="panel-body">
                    
                    <div class="panel-body bg-slate-800 border-radius-top text-center" style="background-image: url(http://demo.interface.club/limitless/assets/images/bg.png); background-size: contain;">
                      <div class="content-group-sm">
                        <h6 class="text-semibold no-margin-bottom">
                          Images
                        </h6>
                      </div>
                      <div class="content-group-sm">
                        <a href="#" class="display-inline-block content-group-sm">
                          <img src="img/X_X.jpg" class="img-circle img-responsive" alt="" style="width: 110px; height: 110px;">
                        </a>
                      </div>                        

                    </div>

                  </div>
                </div>
                <!-- /images -->
              </div>
            </div>
            <!-- /row -->
            <!-- Simple text stats with icons -->
            <div class="panel panel-body">
              <div class="row text-center">
                <div class="col-xs-4">
                  <p><i class="icon-users2 icon-2x display-inline-block text-info"></i></p>
                  <h5 class="text-semibold no-margin">1 K</h5>
                  <span class="text-muted text-size-small">Users</span>
                </div>

                <div class="col-xs-4">
                  <p><i class="icon-eye icon-2x display-inline-block text-warning"></i></p>
                  <h5 class="text-semibold no-margin">3,568</h5>
                  <span class="text-muted text-size-small">Views</span>
                </div>

                <div class="col-xs-4">
                  <p><i class="icon-thumbs-up2 icon-2x display-inline-block text-danger"></i></p>
                  <h5 class="text-semibold no-margin">9,693</h5>
                  <span class="text-muted text-size-small">Like</span>
                </div>
              </div>
            </div>
            <!-- /simple text stats with icons -->

          </div>
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