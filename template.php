<?php
  /**
   * @file menu-block-wrapper.tpl.php
  */  

  /**
   * Implements theme_easy_greadcrumb()
   */
  function etsh_base_easy_breadcrumb($variables) {
    
    $breadcrumb = $variables['breadcrumb'];
    $segments_quantity = $variables['segments_quantity'];
    $separator = $variables['separator'];
    
    $html = '';
    
    if ($segments_quantity > 0) {
      
      for ($i = 0, $s = $segments_quantity - 1; $i < $segments_quantity; ++$i) {
        $it = $breadcrumb[$i];
        $content = decode_entities($it['content']);
        if (isset($it['url'])) {
          $html .= l($content, $it['url'], array('attributes' => array('class' => $it['class'])));
        } else {
          $class = implode(' ', $it['class']);
          $html .= '<span class="' . $class . '">'	. check_plain($content) . '</span>';
        }
        if ($i < $s) {
          $html .= '<span class="easy-breadcrumb_segment-separator"> ' . $separator . ' </span>';
        }
      }
    }
  
    return $html;
  }