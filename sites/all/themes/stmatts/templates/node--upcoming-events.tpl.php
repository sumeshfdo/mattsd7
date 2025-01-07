<?php
//echo "<pre>" . print_r($node, true) . "</pre>";
?>




<div class="row verticle-align-start uce-wrapper">
  <div class="col-md-7">
    <div class="uce-date">
      <?php print render($content['field_upcoming_event_date']); ?>
      <?php print render($content['field_upcoming_event_month']); ?>
    </div>

    <div class="uce-time">
      <?php print render($content['field_upcoming_event_time_hrs_']); ?>:<?php print render($content['field_upcoming_event_time_mins_']); ?>, 
      <?php print render($content['field_event_am_pm']); ?>
    </div>

    <div class="uce-body">
      <?php print render($content['body']); ?>
    </div>
  </div>

  <div class="col-md-5">
    <div class="uce-image">
      <?php print render($content['field_upcoming_event_image']); ?>
    </div>
  </div>
</div>

<!-- function hello()
{
    print "Hello world!";
} -->