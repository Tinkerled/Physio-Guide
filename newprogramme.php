<?php
require_once('./header.php');
require_once('./classes/Ligne.php');
require_once('./classes/LigneDAO.php');
require_once('./classes/Programme.php');
require_once('./classes/Exercice.php');
require_once('./classes/ExerciceDAO.php');

$exeDao = new ExerciceDAO();
$modalExercice = '';
$action = 'sauver';

if (!isset($_SESSION))
  session_start();

if (isset($_REQUEST['action']))
  switch ($_REQUEST['action']) {
    
    case 'ajouter' :
      $idExe = $_REQUEST['id'];
      if (!isset($_SESSION['newPro'])) {
        $_SESSION['newPro'] = Array();
      }
      if (!isset($_SESSION['newPro'][$idExe])) {
        $exe = $exeDao->find($idExe);
        $_SESSION['newPro'][$idExe] = new Ligne($exe);
        
        // set position, name, description
        // le idExe devrait etre ligne,
      }
      break;
    
    case 'delete' :
      $idExe = $_REQUEST['id'];
      UNSET($_SESSION['newPro'][$idExe]);
      break;
    
    case 'sauver' :
      echo "<script>$('#modal1').leanModal('show')</script>";
      break;
    
    case 'annuler' :
      UNSET($_SESSION['newPro']);
      session_destroy();
      break;
    
  }


?>

<div class="row ">
  <form class="col s12 l6 card ">
    <input type="hidden" name="action" value="<?= $action ?>"/>
    <div class="card-content">
      <div class="card-title">
        Nouveau programme
      </div>

      <!-- Nom -->
      <div class="row">
        <div class="input-field col s6">
          <input id="input_text" type="text" name="nom" length="45" value="">
          <label for="input_text">Nom de l'exercice</label>
        </div>
        <div class="input-field col s6">
          <label>Type d'entrainement</label>
          <select name="partie" class="select-list">
            <option value="" disabled selected>Choisissez une option</option>
          </select>
        </div>
      </div>

      <!-- Description -->
      <div class="row">
        <div class="input-field col s12 descField">
          <textarea id="textarea2" class="materialize-textarea" length="250" name=""></textarea>
          <label for="textarea2">Description de l'exercice</label>
        </div>
      </div>

      <!-- OK annuler -->
      <div class="row boutons">
        <button href="?action=sauver"
                class="btn waves-effect waves-light right" type="submit" name="bOK">OK
        </button>
        <a href="?action=annuler" class="btn-flat">Annuler</a>
      </div>
    </div>

    <div class="collection">
      <!-- Liste des exercices du programme -->
      <?php
      if (!isset($_SESSION['newPro']) || Count($_SESSION['newPro']) == 0)
        echo "<p>Programme vide:</p>
            <p>Ajoutez des exercices en les selectionnant de la liste.</p>";
      else {
        $programme = $_SESSION['newPro'];
        
        foreach ($programme as $num => $ligne) {
          
          $exercice = $exeDao->find($num);
          ?>
          <div class="">
            <a href="?action=delete&id=<?= $exercice->getId() ?>">
              <i class="material-icons right">delete</i>
            </a>
            <a href="#modal<?= $exercice->getId() ?>" data-target="modal<?= $exercice->getId() ?>"
               class="collection-item modal-trigger"><?= $exercice->getNom() ?>
            </a>

            <!-- Modal Structure -->
            <div id="modal<?= $exercice->getId() ?>" class="modal white modal-content card-content"
            style="overflow: hidden">

                <div class="row">
                  <img src="media/shoulder1.gif" class="col s4 modal-img" alt="">

                  <div class="col s8 ">
                    <h4><?= $exercice->getNom() ?></h4>
                    <p><?= $exercice->getDesc() ?></p>
                  </div>
                </div>
              <div class="row">
                <form>
                  <div class="col s2">
                    <label for="serie">Series</label>
                    <input type="number" name="serie" min="1" max="5">
                  </div>
                  <div class="col s2">
                    <label for="reps">Reps</label>
                    <input type="number" id="reps" name="reps" min="1" max="5">
                  </div>
                  <div class="col s2">
                    <label for="poids">Poids ou Temps</label>
                    <input type="number" name="poids" min="1" max="5">
                  </div>
                  <div class="col s2 l6">
                    <a href="#!" class="modal-close waves-effect blue waves-green btn right">Ok</a>
                  </div>
                </form>
              </div>
                </div>
              </div>
          <?php
        }
      }
      ?>
    </div>
  </form>

  <div class="form col s12 l6" action="#">

    <ul class="collapsible white">
      <a href="#" class="btn red right">Ajouter</a>

      <li><h5 class="center">Liste des exercices disponibles</h5></li>
      <?php
      $listeExe = $exeDao->findAll();
      foreach (array_reverse($listeExe) as $exercice) {
        ?>
        <li>
          <div class="collapsible-header black-text">
            <?= $exercice->getNom() ?>
            <a href="?action=ajouter&id=<?= $exercice->getId() ?>" class="right">
              <i class="material-icons">add</i></a>
          </div>
          <div class="collapsible-body ">
            <div class="row">
              <div class="col s8 exeListe">
                <?= $exercice->getDesc() ?>
                <img src="media/shoulder1.gif" class="right modal-img" alt="">

              </div>
              <div class="col s4 ">

                <div class="chip">
                  Epaule
                </div>
                <div class="chip">
                  Isometrie
                </div>

              </div>
            </div>

          </div>
        </li>
        <?php
      }
      ?>
    </ul>

  </div>

</div>


<?php require_once('footer.php'); ?>
