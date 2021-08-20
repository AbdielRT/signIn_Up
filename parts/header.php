<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./js/app.js" defer></script>
    <title>Login Page</title>
</head>
<body>
   
<nav class="navbar navbar-expand-md navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">MyService</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
        <?php 
        if (!isset($_SESSION['idUser'])){
        ?>
        <li class="nav-item">
          <a class="nav-link active" href="?page=login">Log In
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=signup">Sign Up</a>
        </li>
        <?php
        } else {
        ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" 
          href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <?php echo $_SESSION['name'] ." ". $_SESSION['lastName']; ?>
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Mon Espace</a>
            <a class="dropdown-item" href="#">Paramètres</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="./logout.php"> Log Out </a>
          </div>
        </li>
        <?php 
        }
        ?>
      </ul>
    </div>
  </div>
</nav>