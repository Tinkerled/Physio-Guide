<?php include_once('./header.php'); ?>

<div class="section">
  <a href="newprogramme.php" class="btn right red ">Nouveau programme</a>
  <h5>Programmes d'entrainement récents</h5>
</div>

<!-- Programme -->
<div class="collection with-header col s10">
  <div class="collection-item collection-header">
    <div class="row">
      <span class="card-title"><h5>Programme post-op</h5></span>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias eos in itaque, minima officiis quia similique!
        Animi aperiam eaque expedita harum, illo inventore laborum magnam pariatur quaerat quas ratione, recusandae
        repellat reprehenderit, saepe sequi similique tenetur ullam voluptatem. Enim nobis perferendis quas tempore
        vitae? Ad beatae debitis maxime minima obcaecati odit, qui repudiandae sunt tempora voluptatum. Atque dolorem,
        doloribus eius eos iure libero perferendis qui quis, quisquam similique totam unde? Autem debitis dolorum ipsam
        maxime saepe. Ab accusantium ad asperiores dolor esse, id laboriosam mollitia nemo nisi numquam quas qui saepe
        sapiente sequi tempore. Cupiditate laborum minima quod velit veniam!
      </p>
      <h6 class="left bold">Durée: ~ 5 min</h6>

      <button href="#modalExecution" class="btn modal-trigger red right voir-exe">commencer</button>
      <button id="bouton" class="right waves-effect waves-pink waves-lighten-3 btn-flat">voir</button>
    </div>
  </div>

  <!-- Liste des exercices -->
  <?php for ($i = 1; $i <= 10; $i++) { ?>
    <a href="#modal1" data-target="modal1" class="collection-item modal-trigger collectionContent">Exercice <?= $i ?>
      <i class="material-icons right">edit</i>

      <span class="right black-text">5 sec</span>
      <span class="right black-text"> 2 rep <i class="material-icons tiny">keyboard_arrow_right</i></span>
      <span class="right black-text"> 3 <i class="material-icons tiny">keyboard_arrow_right</i></span>
      </a>
  <?php } ?>
</div>

<div class="divider"></div>

<div class="section">
  <h5>Programmes recus</h5>

  <h5>...</h5>
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

<div id="modalExecution" class="modal">
  <img src="media/shoulder1.gif" class="right modal-img" alt="">
  <h5>Exercice 1: Poing contre mur</h5>
  <h5>5 rep restantes</h5>
  <h4>5 seconds</h4>
  <p>Prochain exercice: Coude contre mur 10 x 5 second</p>

  <a href="#!" class="modal-close btn">Finir</a>
</div>

<?php include_once('footer.php'); ?>
