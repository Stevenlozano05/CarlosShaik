<?php
/**
 * Home Banner Template
 *
 * @package DocuPress
 */

// All section-specific code goes here...

$section_one = get_theme_mod('docupress_section_banner');
if ('Disable' == $section_one) {
    return;
}
?>

<section id="banner-section-first">
    <div class="container banner-start">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="left-content">
                    <?php if(get_theme_mod('docupress_section_bannerimage_section_text')!=''){ ?>
                         <div class="slide-title-btn">
                             <span></span>
                             <p><?php echo esc_html(get_theme_mod('docupress_section_bannerimage_section_text')); ?></p>
                         </div>
                    <?php } ?>
                     <div class="main-heading">
                          <h2><?php echo esc_html(get_theme_mod('docupress_section_bannerimage_section_title')); ?></h2>
                     </div>
                     <div class="slide-text">
                        <ul>
                            <?php if(get_theme_mod('docupress_section_bannerimage_section_text_li1')!=''){ ?>
                                <li>&#x2713; <?php echo esc_html(get_theme_mod('docupress_section_bannerimage_section_text_li1')); ?></li>
                            <?php } ?>
                            <?php if(get_theme_mod('docupress_section_bannerimage_section_text_li2')!=''){ ?>
                                <li>&#x2713; <?php echo esc_html(get_theme_mod('docupress_section_bannerimage_section_text_li2')); ?>.</li>
                            <?php } ?>
                            <?php if(get_theme_mod('docupress_section_bannerimage_section_text_li3')!=''){ ?>
                                <li>&#x2713; <?php echo esc_html(get_theme_mod('docupress_section_bannerimage_section_text_li3')); ?></li>
                            <?php } ?>
                        </ul>
                     </div>
                     <div class="appointment-btn">
                          <?php if(get_theme_mod('docupress_banner_btn_text')!=''){ ?>
                                <div class="theme-btn">
                                  <a href="<?php echo esc_html(get_theme_mod('docupress_banner_btn_text_url')); ?>"><?php echo esc_html(get_theme_mod('docupress_banner_btn_text')); ?></a>
                                </div>
                          <?php } ?>
                     </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <?php if(get_theme_mod('docupress_section_bannerimage_section',true) != '') { ?>
                    <div class="right-content">
                            <img src="<?php echo esc_url(get_theme_mod('docupress_section_bannerimage_section')); ?>" alt="Image">
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
