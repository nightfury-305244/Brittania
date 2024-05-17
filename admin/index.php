<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  // Redirect to login page if not logged in
  header('Location: ucAdminP.php');
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/0fa496f194.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../assets/css/stylesAP.css">
  <link type="text/css" rel="stylesheet" href="../assets/css/jotfor/5e6b428acc8c4e222d1beb91.css" />
  <title>Brittania Admin</title>
  <style>
    .intro {
      height: 100%;
      text-align: center;
    }
  </style>
</head>

<body>

  <div id="nav-bar">
    <div id="nav-header"><a id="nav-title" href="">Brittania</a>
      <hr />
    </div>
    <div id="nav-content">
      <div class="nav-button"><a href="uploadRent_Buy.php"><i class="fas fa-download"></i><span>Rent/Buy</span></a></div>
      <div class="nav-button"><a href="uploadCommercial.php"><i class="fas fa-download"></i><span>Commercial</span></a></div>
      <hr />
      <div id="nav-content-highlight"></div>
    </div>
  </div>

  <div class="container">
    <div class="intro">
      <h1>Welcome to the Admin Page</h1>
      <p>Please upload your house information</p> 
    </div>
  </div>
</body>

</html>