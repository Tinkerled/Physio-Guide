<?php include_once('./header.php'); ?>
<!-- tag div supplementaire pour sortir du container a la sorti du header -->
</div>
<div class="parallax-container">
  <div class="parallax">
    <img src="media/gym.jpg" />
  </div>
  <div class="container ">
    <div class="row ">
      <div class="parLogin">

        <div class="card blue darken-2 hoverable">
          <div class="card-content white-text">
            <span class="card-title">Votre guide post-op</span>
            <p>Le rétablissement post operatoir peut durée des mois, mais l'application Physio-Guide vous aide en facilitant l'entrainement et en enregistrant votre suivie.</p>
          </div>
          <div class="card-action right-align">
            <a href="#" class="left">Nouveau compte</a>
            <a href="#modalLogin" class="btn modal-trigger red white-text">LOGIN</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>
<div class="section white">
  <div class="container">
    <div class="row">
      <div class="col">
        <img src="media/shoulder1.gif" style="width: 300px;" class="right" alt="">
        <h4 class="header hide-on-med-and-down">Parallax</h4>
        <p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad consectetur dolorem fugit libero magnam placeat quaerat quisquam suscipit vel velit! Accusamus alias dolores incidunt iure nostrum repellendus sequi suscipit, veniam.</p>

        <a href="#modalDemo" class="modal-trigger" >Example d'exercice</a>
      </div>
    </div>
  </div>
  
</div>
<div class="parallax-container">
  <div class="parallax">
    <img src="media/gym.jpg" />
  </div>
</div>
<div class="section container">
  <div class="row">
    <div class="col">
      <h2 class="header">Parallax</h2>
      <p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad consectetur dolorem fugit libero magnam placeat quaerat quisquam suscipit vel velit! Accusamus alias dolores incidunt iure nostrum repellendus sequi suscipit, veniam.</p>

    </div>

  </div>
</div>

<!-- Modal Structure -->
<div id="modalLogin" class="modal">
  <div class="row modal-content valign-center">
    <div class="col s6 loginTitre valign-center">
      <h4>Rebonjour!</h4>
    </div>
    <div class="col s6">
      <div class="row">
        <div class="col s12">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
        <div class="col s12">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
        
      </div>
      <p>
        <a href="programme.php" class="btn wave-effect red">login</a>
      </p>
    </div>
  </div>
  
</div>


<!-- Modal Structure -->
<div id="modalDemo" class="modal white">
  <img src="media/shoulder1.gif" class="right modal-img" alt="">
  <div class="modal-content">
    <h4>Exercice</h4>
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
        <input type="range" class="left" id="test5" min="0" max="10" />
        <input type="number" class="left"  name="quantity" min="1" max="5">
      </p>
    </form>

    <a  href="#!" class="modal-close waves-effect blue waves-green btn right">Ok</a>

  </div>
</div>

</div>

<div>
<?php include_once ('footer.php'); ?>
