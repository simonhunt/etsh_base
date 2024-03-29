<?php
  /**
   * @file node.tpl.php
  */  
?>  

<?php print render($title_prefix); ?>
<?php if (!$page && $title): ?>
  <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
<?php endif; ?>
<?php print render($title_suffix); ?>

<?php
  // We hide the comments and links now so that we can render them later.
  hide($content['comments']);
  hide($content['links']);
  print render($content);
?>

<?php print render($content['links']); ?>

<?php print render($content['comments']); ?>