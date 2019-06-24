<?php include_once('./header.php'); ?>

<ul class="collapsible">
  <li>
    <div class="collapsible-header">
      allo
    </div>
    <div class="collapsible-body">
      
      <div class="collection">
      <!-- Liste des exercices -->
      <?php for($i=1; $i<=10; $i++){ ?>

        <!-- Modal Trigger -->
        <a href="#modal1" onclick="$('.modal').openModal();" data-target="modal1" class="collection-item">Exercice <?= $i ?>
          <i class="material-icons right">edit</i>
          <span class="right black-text">
    3 <i class="material-icons tiny">close</i> 2 rep - 5 sec</span>
        </a>
  
  
      <?php } ?>
      </div>
    </div>
  </li>
</ul>

<!-- Programme -->
<div class="collection with-header col s10">
  <div class="collection-item collection-header"><h5>
      Programme post-op</h5>


  <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias eos in itaque, minima officiis quia similique! Animi aperiam eaque expedita harum, illo inventore laborum magnam pariatur quaerat quas ratione, recusandae repellat reprehenderit, saepe sequi similique tenetur ullam voluptatem. Enim nobis perferendis quas tempore vitae? Ad beatae debitis maxime minima obcaecati odit, qui repudiandae sunt tempora voluptatum. Atque dolorem, doloribus eius eos iure libero perferendis qui quis, quisquam similique totam unde? Autem debitis dolorum ipsam maxime saepe. Ab accusantium ad asperiores dolor esse, id laboriosam mollitia nemo nisi numquam quas qui saepe sapiente sequi tempore. Cupiditate laborum minima quod velit veniam!
  </p>
    <button class="btn primary-color">second</button>
  </div>
  
  <!-- Liste des exercices -->
<?php for($i=1; $i<=10; $i++){ ?>

  <!-- Modal Trigger -->
  <a href="#modal1" onclick="$('.modal').openModal();" data-target="modal1" class="collection-item">Exercice <?= $i ?>
    <i class="material-icons right">edit</i>
    <span class="right black-text">
    3 <i class="material-icons tiny">close</i> 2 rep - 5 sec</span>
  </a>
  

<?php } ?>
</div>

<!-- Modal Structure -->
<div id="#modal1" class="modal white">
  <img src="./gifs/shoulder1.gif" class="right modal-img" alt="">
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

<?php include_once ('footer.php'); ?>
