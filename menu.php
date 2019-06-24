<nav class="blue darken-3">
  <div class="nav-wrapper container">
    <a href="#!" class="brand-logo"><?= $titre ?></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="#">Programmes</a></li>
      <li><a href="#">Exercices</a></li>
      <li><a href="#">Profile</a></li>
    </ul>
  </div>
</nav>
<!--

<header class="navbar navbar-default navbar-static-top">
  <nav class="nav-extended">
    <div class="nav-wrapper">
      <a href="#test" class="brand-logo">Logo</a>
      <a href="#test" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <?php
        $urls = array(
        'Accueil' => '#test1',
        'Exercices' => '#test1',
        );
        
        foreach ($urls as $name => $url){
          echo '<li class"tab" '.(($currentPage === $name) ? '  ': '"').
          '><a href="'.$url.'">'.$name.'</a></li>';
        }
        ?>
        <li class="tab"><a href="#test1">Test 1</a></li>
      </ul>
    </div>
  </nav>
  
  <ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">JavaScript</a></li>
  </ul>
  
  <div id="test1" class="col s12">Test 1</div>
  <div id="test2" class="col s12">Test 2</div>
  <div id="test3" class="col s12">Test 3</div>
  <div id="test4" class="col s12">Test 4</div>
</header>
-->
