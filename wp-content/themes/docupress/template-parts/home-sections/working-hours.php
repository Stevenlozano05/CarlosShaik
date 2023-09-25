<?php
/**
 * Home Working Hours Template
 *
 * @package DocuPress
 */

// All section-specific code goes here...

$section_one = get_theme_mod( 'docupress_working_hours_section_enable' );
if ( 'Disable' == $section_one ) {
  return;
} ?>

<section id="working-hour" class="working-hour">
  <div class="container">
    <div class="section-heading-main">
      <?php if(get_theme_mod('docupress_working_hours_section_title',true) != ''){?>
    <h3><?php echo esc_html(get_theme_mod('docupress_working_hours_section_title')); ?></h3>
    <p><?php echo esc_html(get_theme_mod('docupress_working_hours_section_text')); ?></p>
    <?php }?>
    </div>
    <div class="row">
      <?php 
        for($i=1;$i<=7;$i++){
      ?>
          <div class="col-lg-3 col-12">
            <?php if(get_theme_mod('docupress_working_hours_section_working_day'.$i)!=''){ ?>
              <div class="day-box">
                <h4 class="day-content"><?php echo esc_html(get_theme_mod('docupress_working_hours_section_working_day'.$i)); ?></h4>
                <div class="time-content">
                  <p><?php echo esc_html(get_theme_mod('docupress_working_hours_section_working_time'.$i)); ?></p>
                </div>
              </div>
            <?php } ?>
          </div>
      <?php } ?>
    </div>
</div>
</section>






