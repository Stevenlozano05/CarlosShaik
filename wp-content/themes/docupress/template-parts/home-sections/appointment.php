<?php 
/**
 * Home Appointment Template
 *
 * @package DocuPress
 */

// All section-specific code goes here...

$section_one = get_theme_mod( 'docupress_appointment_section_enable' );
if ( 'Disable' == $section_one ) {
  return;
} ?>

<section id="contact-sction" class="contact-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="cont-box">
          <p class="contact-text"><?php echo esc_html(get_theme_mod('docupress_appointment_section_title')); ?></p><p class="contct-text"> <?php echo esc_html(get_theme_mod('docupress_appointment_section_phone_number')); ?></p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="contact-btn">
            <?php if(get_theme_mod('docupress_appointment_section_btn_title')!=''){ ?>
                  <div class="theme-btn">
                    <a href="<?php echo esc_html(get_theme_mod('docupress_appointment_section_btn_url')); ?>"><?php echo esc_html(get_theme_mod('docupress_appointment_section_btn_title')); ?></a>
                  </div>
            <?php } ?>
       </div>
      </div>
    </div>
</div>
</section>






