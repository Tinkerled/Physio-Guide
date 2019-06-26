<?php include_once('./header.php'); ?>

<div class="row">
  <div class="col s12">
    <form id="formCard" class="card">
      <div class="collection">
      <div class="collection-item card-content">

        <div class="card-title">
          Nouveau programme
        </div>
    
      <!-- Nom -->
      <div class="row">
        <div class="input-field col s6">
          <input id="input_text" type="text" name="nom" length="45"
                 value="">
          <label for="input_text">Nom de l'exercice</label>
        </div>
      
        <div class="col s3 right"><p>id:</p>#</div>
      </div>
    
      <!-- Description -->
      <div class="row">
        <div class="input-field col s12 descField">
          <textarea id="textarea2" class="materialize-textarea" length="250"
                    name=""></textarea>
          <label for="textarea2">Description de l'exercice</label>
        </div>
      </div>
    
      <div class="row typeField">
        <div class="input-field col s6">
          <div class="row">
          
            <label>Type d'entrainement</label>
            <select name="partie" class="select-list">
              <option value="" disabled selected>Choisissez une option</option>
            
            </select>
          </div>
        </div>
      
        <div class="input-field col s6">
        
          <label>Type d'exercice</label>
          <select class="select-list" name"type[]" multiple>
          <option value="" disabled selected>Choisissez une option</option>
          
          </select>
        </div>
    
      </div>
      <div class="row boutons">
      
        <button class="btn waves-effect waves-light right" type="submit" name="bOK" >
          OK
        </button>
        <button class="waves-effect waves-red waves-lighten-5 btn-flat">
          annuler
        </button>
    
      </div>
      
      </div>
      
        <!-- Liste des exercices -->
        
        <?php for ($i = 1; $i <= 5; $i++) { ?>
        
          <a href="#modal1" data-target="modal1"
             class="collection-item modal-trigger ">Exercice <?= $i ?>
            <i class="material-icons left">drag_handle</i>
            <i class="material-icons right">edit</i>

            <span class="right black-text">5 sec</span>
            <span class="right black-text"> 2 rep <i class="material-icons tiny">keyboard_arrow_right</i></span>
            <span class="right black-text"> 3 <i class="material-icons tiny">keyboard_arrow_right</i></span>
          </a>
        <?php } ?>
      </div>
    </form>
    
  </div>

</div>

<div class="row">
  <div class="form" action="#">
  
  <ul class="collapsible white">
    <li><h5 class="center">Liste des exercices disponibles</h5></li>
    <?php for($i=1; $i<11; $i++) {
      ?>
      <li>
        <div class="collapsible-header black-text">
          <label>
            <i class="material-icons">crop_square</i>
            
            <input type="checkbox" />
            <span>Exercice <?= $i ?></span>
          </label>
        </div>
        <div class="collapsible-body ">
          <div class="row">
            <div class="col s8 exeListe">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto id in inventore mollitia nisi nobis quasi reprehenderit sunt temporibus ullam! Ad adipisci deleniti fuga optio quisquam reiciendis repellendus suscipit voluptas!</p>
              
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

<!-- Modal Structure -->
<div id="modal1" class="modal white">
  <img src="media/shoulder1.gif" class="right modal-img" alt="">
  <div class="modal-content">
    <h4>Exercice <?= $i ?></h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aut autem cumque dignissimos earum esse
      laborum molestiae mollitia, nisi non officiis quaerat quam reprehenderit similique tempore voluptas voluptate!
      Excepturi expedita molestiae suscipit? Assumenda blanditiis eum fugit illo quidem vitae. Accusamus at itaque nemo
      quibusdam? Doloremque fugit itaque nesciunt repellendus ullam.</p>


    <div class="chip">
      Epaule
    </div>
    <div class="chip">
      Isometrie
    </div>
  </div>

  <div class="modal-footer">
    <form action="#" class="left">
      <div class="range-field left">
        <label for="">Series</label>
        <input type="range" id="test5" min="1" max="5"/>
      </div>
      <div class="range-field left">
        <label for="">Repetitions</label>
        <input type="range" id="test5" min="0" max="10"/>
      </div>
      <div class="range-field left">
        <label for="">Intensite</label>
        <input type="range" id="test5" min="0" max="100"/>
      </div>
      <div class="range-field left">
        <label for="">Temps</label>
        <input type="range" id="test5" min="0" max="10"/>
      </div>
    </form>
    <a href="#!" class="modal-close waves-effect blue waves-green btn right">Ok</a>

  </div>
</div>

</div>

<?php include_once ('footer.php'); ?>
