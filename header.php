<?php
$titre = "Physio-Guide"
?>

<!DOCTYPE html>
<html>

<head>
  <title><?= $titre ?></title>
  
  <base href="#">
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
  <script src="script.js"></script>
</head>
<body class="grey lighten-3">
<?php
include_once('./classes/Exercice.php');
include_once('./classes/ExerciceDAO.php');
include_once('./classes/ProgrammeDAO.php');
include_once('./classes/OptionDAO.php');
?>

<nav class="blue darken-3">
  <div class="nav-wrapper container">
    <a href="index.php" class="brand-logo"><i class="material-icons left">blur_on</i>
      <?= $titre ?></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="programme.php">Programmes</a></li>
      <li><a href="exercices.php">Exercices</a></li>
      <li><a href="profile.php">Profile</a></li>
    </ul>
  </div>
</nav>

<div class="container bodyContent">
