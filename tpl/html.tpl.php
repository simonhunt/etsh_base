<?php
  /**
   * @file html.tpl.php
  */  
?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Your site description." />

    <?php print $head; ?>
    
    <title><?php print $head_title; ?></title>
    
    <?php print $styles; ?>
    <?php print $scripts; ?>
    
    <!--[if lt IE 9 &!(IEMobile)]>
      <script src="<?php echo path_to_theme(); ?>/js/vendor/html5shiv.min.js"></script>
      <script src="<?php echo path_to_theme(); ?>/js/vendor/respond.min.js"></script>
    <![endif]-->
</head>
    
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
    <!-- Disability skip link to be added at a later date -->

    <!-- Content -->
    
    <?php print $page_top; ?>
    <?php print $page; ?>
    <?php print $page_bottom; ?>
    
    <!--div class="row">
        <div id="dismiss" class="col-s-3">
            <button role="button" data-dismiss-target="#dismiss">&times;</button>
            This is a section that I would like to make dismissable.
        </div>
        <div id="dismiss" class="col-s-3">
            <button role="button" data-dismiss-target="#dismiss">&times;</button>
            This is a section that I would like to make dismissable.
        </div>
        <div id="dismiss" class="col-s-3">
            <button role="button" data-dismiss-target="#dismiss">&times;</button>
            This is a section that I would like to make dismissable.
        </div>
        <div id="dismiss" class="col-s-3">
            <button role="button" data-dismiss-target="#dismiss">&times;</button>
            This is a section that I would like to make dismissable.
        </div>
    </div-->


    <!-- SCRIPTS -->
    
    <!--[if IE 8]>     
    <script src="<?php echo path_to_theme(); ?>/js/vendor/jquery-1.11.1.min.js"></script>
    <![endif]-->
    <!--[if gt IE 8]><!-->
    <script src="<?php echo path_to_theme(); ?>/js/vendor/jquery-2.1.1.min.js"></script>
    <!--<![endif]-->
    <script src="<?php echo path_to_theme(); ?>/js/vendor/jquery.sidr.min.js"></script>
    <script src="<?php echo path_to_theme(); ?>/js/vendor/jquery.touchwipe.js"></script>
    <script src="<?php echo path_to_theme(); ?>/js/vendor/responsive.min.js"></script>
    <script src="<?php echo path_to_theme(); ?>/js/scripts.js"></script>

</body>
</html>