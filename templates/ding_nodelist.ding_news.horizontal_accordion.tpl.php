<?php

/**
 * @file
 * Ding news horizontal accordion template.
 */

$image_field = 'field_' . $item->type . '_list_image';
$image = _ding_nodelist_get_dams_image_info($item, $image_field);
$category = field_view_field('node', $item, 'field_ding_news_category', 'teaser');
$slide_image = l($image ? theme('image_style', array_merge($image, array('style_name' => $conf['image_style']))) : '', 'node/' . $item->nid, array('html' => TRUE));
?>
<li class="item news">
  <div class="item_content">
    <div class="expand"><?php print l($item->title, 'node/' . $item->nid);?></div>
    <div class="label"><?php print drupal_render($category);?></div>
    <div class="image">
      <?php print $slide_image; ?>
    </div>
    <div class="data">
      <div class="caption">
        <h3 class="node-title">
          <?php print l($item->title, 'node/' . $item->nid);?>
        </h3>
        <div class="category">
          <?php print drupal_render($category); ?>
        </div>
        <div class="teaser">
          <p>
            <?php print $item->teaser_lead; ?>
          </p>
       </div>
      </div>
    </div>
  </div>
</li>
