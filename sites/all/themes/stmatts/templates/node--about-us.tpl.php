<?php
//echo "<pre>" . print_r($node, true) . "</pre>";
?>


<div class="about-us-content-wrap">

  <div class="row align-items-end">
    <div class="col-md-12">
      <?php print render($content['body']); ?>
    </div>

    <div class="col-md-12 image-library mt-5">
      <?php print render($content['field_images']); ?>

    </div>
  </div>

</div>

<!-- function hello()
{
    print "Hello world!";
} -->