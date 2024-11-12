<!DOCTYPE html>
<html lang="en">
<head>
  <title>HanifU</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="Shortcut icon" type="text/css" href="img/logo.JPG">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="Home.php">HanifU</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="Home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Logic</a>
      </li>   
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:30px" >
  <div class="row">
    <div class="col-sm-3">
      <h2>About Me</h2>
      <h5>Photo Of Me</h5>
      <img src="img/Me.jpg" class="rounded-circle" alt="Cinque Terre" width="150" height="200">
      <p style="text-align: justify;">Mijn Naam Is Muhammad Hanif Van Indonesië En Ik Ben Nog Maar Een Kleine Jongen</p>
      <h3>Social Media</h3>
      <p>Volg Me Op</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link" href="https://www.instagram.com/mhanif98"><img src="img/ig.png" width="20" height="20"> Instagram</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.facebook.com"><img src="img/fb.png" width="20" height="20"> Facebook</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.twitter.com/mhaniff98"><img src="img/twt.png" width="20" height="20"> Twitter</a>
        </li>
      </ul>
      
    </div>
    <div class="col-sm-8">
      <h2>Logic Menu</h2>
      <br>
      <h5>Please Input Your Name!</h5>
      <form action="Logic.php" method="POST" class="needs-validation" novalidate>
        <div class="form-group">
          <label for="name">Name :</label>
          <input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name" required>
          <div class="valid-feedback">OK.</div>
          <div class="invalid-feedback">Please fill your Name.</div>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Done</button>
      </form>
    </div>
  </div>
</div>
<br>
<div class="jumbotron text-center" style="margin-bottom:0">
  <p>2020 © HanifU</p>
</div>
<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</body>
</html>