<?php include_once('./header.php'); ?>
<div class="row">

  <a href="" class="btn right red ">Nouveau programme</a>
  <h5>Programmes d'entrainement récents</h5>
</div>

<!-- Programme -->
<div class="collection with-header col s10">
  <div class="collection-item collection-header">
    <div class="row">
      <h5>Programme post-op</h5>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias eos in itaque, minima officiis quia similique! Animi aperiam eaque expedita harum, illo inventore laborum magnam pariatur quaerat quas ratione, recusandae repellat reprehenderit, saepe sequi similique tenetur ullam voluptatem. Enim nobis perferendis quas tempore vitae? Ad beatae debitis maxime minima obcaecati odit, qui repudiandae sunt tempora voluptatum. Atque dolorem, doloribus eius eos iure libero perferendis qui quis, quisquam similique totam unde? Autem debitis dolorum ipsam maxime saepe. Ab accusantium ad asperiores dolor esse, id laboriosam mollitia nemo nisi numquam quas qui saepe sapiente sequi tempore. Cupiditate laborum minima quod velit veniam!
      </p>
      <h6 class="left bold">Durée: ~ 5 min</h6>

      <button href="#modalExecution" class="btn modal-trigger red right voir-exe">commencer</button>
      <button id="bouton" class="right waves-effect waves-pink waves-lighten-3 btn-flat">voir</button>
    </div>
  </div>
  
  <!-- Liste des exercices -->
<?php for($i=1; $i<=10; $i++){ ?>
  <a href="#modal1" data-target="modal1" class="collection-item modal-trigger collectionContent">Exercice <?= $i ?>
    <i class="material-icons right">edit</i>
    <span class="right black-text">
    3 x 2 rep - 5 sec</span>
  </a>
<?php } ?>
</div>

<hr>
<h5>Programmes recus</h5>
<h5>...</h5>
<!-- Modal Structure -->
<div id="modal1" class="modal white">
  <img src="media/shoulder1.gif" class="right modal-img" alt="">
  <div class="modal-content">
    <h4>Exercice <?= $i ?></h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aut autem cumque dignissimos earum esse laborum molestiae mollitia, nisi non officiis quaerat quam reprehenderit similique tempore voluptas voluptate! Excepturi expedita molestiae suscipit? Assumenda blanditiis eum fugit illo quidem vitae. Accusamus at itaque nemo quibusdam? Doloremque fugit itaque nesciunt repellendus ullam.</p>
    
    
    <div class="chip">
      Epaule
    </div>
    <div class="chip">
      Isometrie
    </div>
  </div>
  
  <div class="modal-footer">
    <form action="#" class="left">
      <p class="range-field">
        <input type="range" id="test5" min="0" max="10" />
      </p>
    </form>

    <a  href="#!" class="modal-close waves-effect blue waves-green btn right">Ok</a>
    
    </div>
  </div>
  
</div>

<div id="modalExecution" class="modal">
  <div class="container">
    <img src="media/shoulder1.gif" class="right modal-img" alt="">
    <h5>Exercice 1: Poing contre mur</h5>
    <h5>5 rep restantes</h5>
    <h4>5 seconds</h4>
    <p>Prochain exercice: Coude contre mur 10 x 5 second</p>
    
    <a href="#!" class="modal-close btn">Finir</a>
  </div>
</div>

<?php include_once ('footer.php'); ?>
