<?php
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<div class="colmask">
  <div class="colleft">
    <?php
    
      function is_odd($number) {
        return $number & 1; // 0 = even, 1 = odd
      }
    
      $col1 = ''; 
      $col2 = ''; 
      foreach ($rows as $id => $row) { 
    
        if(!is_odd($id)) {
          $col1 .= '<div class="'.$classes_array[$id].'">'.$row.'</div>';
        } else {
          $col2 .= '<div class="'.$classes_array[$id].'">'.$row.'</div>';    
        }
      }
    ?>
    
    <div class="col col1">
      <?php print $col1; ?>
    </div>
    <div class="col col2">  
      <?php print $col2; ?>
    </div>
  </div>
</div>