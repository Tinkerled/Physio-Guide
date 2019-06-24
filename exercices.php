
<form id="formCard" class="col s12 m6 card" method="post" action="index.php"
      onsubmit="return required(input_text)">
  <input type="hidden" name="action" value="<?=$action?>" />
  <input type="hidden" name="id" value="<?=$id?>" />
  <h4><?= $titreForme ?></h4>
  
  <!-- Nom -->
  <div class="row">
    <div class="input-field col s6">
      <input id="input_text" type="text" name="nom" length="45"
             value="<?= $nom ?>">
      <label for="input_text">Nom de l'exercice</label>
    </div>
    
    <div class="col s3 right"><p>id:</p><?=$id?></div>
  </div>
  
  <!-- Description -->
  <div class="row">
    <div class="input-field col s12 descField">
          <textarea id="textarea2" class="materialize-textarea" length="250"
                    name="description"><?= $description ?></textarea>
      <label for="textarea2">Description de l'exercice</label>
    </div>
  </div>
  
  <div class="row typeField">
    <div class="input-field col s6">
      <div class="row">
        
        <label>Partie du corps</label>
        <select name="partie" class="select-list">
          <option value="" disabled selected>Choisissez une option</option>
  
          <?php
          $parties = $options->findAllPartie();
          foreach ($parties as $partie) {
            ?>
            <option value="<?= $partie ?>"><?= $partie ?></option>
            <?php
          }
          ?>
        </select>
      </div>
    </div>
    
    <div class="input-field col s6">
      
      <label>Type d'exercice</label>
      <select class="select-list" name"type[]" multiple>
      <option value="" disabled selected>Choisissez une option</option>
      <?php
      $types = $options->findAllType();
      foreach ($types as $type) {
        ?>
        <option value="<?= $type ?>"><?= $type ?></option>
        <?php
      }
      ?>
      </select>
    </div>
  
  </div>
  <div class="row boutons">
    
    <button class="btn waves-effect waves-light right" type="submit" name="bOK" >
      <?= $textBouton ?>
    </button>
    <button class="waves-effect waves-red waves-lighten-5 btn-flat">
      <?= $btnAnnuler ?>
    </button>
  
  </div>
</form>

<div class="col s12 m5 right">
  
  <div class="row">
    <ul class="collapsible expandable">
      <li><h5 class="center">Liste des exercices disponibles</h5></li>
      <?php
      $listeExe = $dao->findAll();
      foreach ($listeExe as $exercice) {
        ?>
        <li>
          <div class="collapsible-header">
            
            <?= $exercice->getNom() ?>
            <a href="?action=edit&id=<?=$exercice->getId()?>" class="right">
              <i class="material-icons right">edit</i></a>
          </div>
          <div class="collapsible-body">
            <div class="row">
              <div class="col s8">
                <?= $exercice->getDesc() ?>
  
              </div>
              <div class="col s4 ">
                <a href="?action=supp&id=<?=$exercice->getId()?>" class="right">
                  <i class="material-icons right icon-red">delete</i></a>
  
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
