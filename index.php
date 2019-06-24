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
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="script.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
</head>
<body class="grey lighten-3">

<?php
$currentPage = 'index';

include_once('./classes/Exercice.php');
include_once('./classes/ExerciceDAO.php');
include_once('./classes/programmeDAO.php');
include('./menu.php');


$dao = new ExerciceDAO();

$id = "";
$nom = "";
$description = "";

$boutonPartie = "Choisir partie";

$action = "inserer";
$titreForme = "Créer un exercice";
$textBouton = "Cr&eacute;er";
$btnAnnuler = "Annuler";

$accomplie = "";

if (isset($_REQUEST['action'])) {
  switch ($_REQUEST['action']) {
    
    case 'supp' : // suppression
      $exercice = new exercice();
      $exercice->setId($_REQUEST['id']);
      $dao->delete($exercice);
      break;
    
    case 'inserer' : // insertion
      if (isset($_REQUEST['bOK'])) {
        $exercice = new Exercice();
        $exercice->setNom($_REQUEST['nom']);
        $exercice->setDesc($_REQUEST['description']);
        $dao->create($exercice);
      }
      break;
    
    case 'edit': // modification
      $exercice = $dao->find($_REQUEST['id']);
      if ($exercice != NULL) {
        $id = $exercice->getId();
        $nom = $exercice->getNom();
        $description = $exercice->getDesc();
        $action = "sauver";
        $textBouton = "Modifier";
        $titreForme = "Modifier un exercice";
      }
      break;
    
    case 'sauver':
      if (isset($_REQUEST['bOK'])) {
        $exercice = new Exercice();
        $exercice->setId($_REQUEST['id']);
        $exercice->setNom($_REQUEST['nom']);
        $exercice->setDesc($_REQUEST['description']);
        $dao->update($exercice);
      }
      break;
  }
}
?>


<div class="container">
  <div class="row">
    <?php
    include('./exercices.php');
    ?>
  </div>
</div>
</body>
</html>






















