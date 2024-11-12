
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
	<!-- /theme JS files -->
	<link rel="Shortcut icon" type="text/css" href="img/logo.JPG">

</head>

<body class="navbar-bottom login-container" style="background-image: url(img/thh.png);">

	<!-- Page header -->
	<div class="page-header page-header-inverse">

		<!-- Page header content -->
		<div class="page-header-content">
			<div class="page-title">
				<h4>HanifU</h4>
			</div>

			<div class="heading-elements">
				<ul class="breadcrumb heading-text">
					<li class="icon-users position-left active"> User</li><!-- 
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

				<form action="dbuser.php" method="POST" class="login-form">
					<div class="panel panel-body" >
						<div class="text-center">
							<div>
								<h5>If You Want To Selfie</h5>
							    <video autoplay="true" id="video-webcam" style="width: 250px; height: 250px;">
							       Update Your Browser!
							    </video>
							</div>
							<h5 class="content-group">Input Your Name <small class="display-block">Before </small></h5>
						</div>
		<?php 
			date_default_timezone_set('Asia/Jakarta'); 
			// $date = date('Y-m-d H:i:s');
		?> 
						<div class="form-group has-feedback has-feedback-left">
							<input type="text" class="form-control" id="name" placeholder="Name" name="name" required minlength="5" maxlength="20">
							<input type="hidden" name="datetime" value="<?php date('Y-m-d H:i:s'); ?>">
							<div class="form-control-feedback">
								<i class="icon-user text-muted"></i>
							</div>
						</div>

						<div class="form-group">
							<button type="submit" class="btn bg-success-400 btn-block" name="enter">Enter <i class="icon-circle-right2 position-right"></i></button>
						</div>

					</div>
				</form>



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

	
	<script type="text/javascript">
	// camera
	    // seleksi elemen video
	    var video = document.querySelector("#video-webcam");

	    // minta izin user
	    navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia || navigator.oGetUserMedia;

	    // jika user memberikan izin
	    if (navigator.getUserMedia) {
	        // jalankan fungsi handleVideo, dan videoError jika izin ditolak
	        navigator.getUserMedia({ video: true }, handleVideo, videoError);
	    }

	    // fungsi ini akan dieksekusi jika  izin telah diberikan
	    function handleVideo(stream) {
	        video.srcObject = stream;
	    }

	    // fungsi ini akan dieksekusi kalau user menolak izin
	    function videoError(e) {
	        // do something
	        alert("Webcam Just For Selfie!")
	    }
	
	// camera

	// jam
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
