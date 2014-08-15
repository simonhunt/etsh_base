<?php
  /**
   * @file page.tpl.php
  */  
?>

<!-- Sidr Menu Type From Div -->
<!-- This element must be set to display: none in the styleshee -->

<nav id="responsive-menu">
  <?php print render($page['responsive_menu']) ?>
  <?php print render($page['search_form']) ?>
  <button type="button" onclick="$.sidr('close', 'sidr-responsive-menu');">Close</button>
</nav>

<!-- Main Page Content -->

<div id="page">
  <nav id="mobile-navigation" class="row">
    <button class="menu-button" href="#sidr-responsive-menu">Menu</button>
  </nav>
    
  <div class="row">
    <header>
      <?php print render($page['alerts']); ?>
    </header>
  </div>
  
  <div class="row">    
    <section>
      <?php print render($page['help']); ?>
      <?php print $messages; ?>
    </section>
  </div>
  
  <div class="row">
    <nav id="breadcrumb">
      <h2>Breadcrumb</h2>
      <?php print render($page['breadcrumb']); ?>
    </nav>
  </div>
    
  <div class="row">
    <nav id="local tasks">
      <h2>
        Tabs
      </h2>
      <ul class="links clearfix"><?php print render($primary_local_tasks) ?></ul>
      <ul class="links clearfix"><?php print render($secondary_local_tasks) ?></ul>
      <ul class="links clearfix"><?php print render($action_links); ?></ul>
    </nav>
          
    <section id="content">
      <?php print render($title_prefix); ?>
      <h2 class="page-title"><?php print $title ?></h2>
      <?php print render($title_suffix); ?>

      <?php print render($page['content']) ?>

      <?php print $feed_icons ?>
    </section>  
  </div>
</div>