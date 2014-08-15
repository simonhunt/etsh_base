<?php
  /**
   * @file block.tpl.php
  */  
?>  
  
  <?php print render($title_prefix); ?>
  <?php if (!empty($title)): ?>
    <h2<?php print $title_attributes; ?>><?php print $title; ?></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <?php print $content; ?>