<?php
/**
 * Add custom settings and controls to the WordPress Customizer
 */


//---------------------Code to add the Upgrade to Pro button in the Customizer----------

function docupress_customize_register_btn( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    get_template_part('inc/customizer-button/sanitize');
    get_template_part('inc/customizer-button/upsell-section');

    if ( isset( $wp_customize->selective_refresh ) ) {
        $wp_customize->selective_refresh->add_partial( 'blogname', array(
            'selector'        => '.site-title a',
            'render_callback' => 'docupress_customize_partial_blogname',
        ) );
        $wp_customize->selective_refresh->add_partial( 'blogdescription', array(
            'selector'        => '.site-description',
            'render_callback' => 'docupress_customize_partial_blogdescription',
        ) );
    }

    $wp_customize->register_section_type( 'docupress_Customize_Upsell_Section' );

    // Register section.
    $wp_customize->add_section(
        new docupress_Customize_Upsell_Section(
            $wp_customize,
            'theme_upsell',
            array(
                'title'    => esc_html__( 'DocuPress Pro', 'docupress' ),
                'pro_text' => esc_html__( 'Upgrade To Pro', 'docupress' ),
                'pro_url'  => 'https://wpthemes.chitrarchana.com/docupree-premium-wordpress-theme/',
                'priority' => 1,
            )
        )
    );
}
add_action( 'customize_register', 'docupress_customize_register_btn' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function docupress_customize_partial_blogname() {
    bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function docupress_customize_partial_blogdescription() {
    bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function docupress_customize_preview_js() {
    wp_enqueue_script( 'docupress-customizer', get_template_directory_uri() . '/inc/customizer-button/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'docupress_customize_preview_js' );

/**
 * Customizer control scripts and styles.
 *
 * @since 1.0.0
 */
function docupress_customizer_control_scripts() {

    wp_enqueue_style( 'docupress-customize-controls', get_template_directory_uri() . '/inc/customizer-button/customize-controls.css', '', '1.0.0' );

    wp_enqueue_script( 'docupress-customize-controls', get_template_directory_uri() . '/inc/customizer-button/customize-controls.js', array( 'customize-controls' ), '1.0.0', true );
}
add_action( 'customize_controls_enqueue_scripts', 'docupress_customizer_control_scripts', 0 );


//---------------------Code to add the Upgrade to Pro button in the Customizer End----------


//------------------Theme Information--------------------




function docupress_customize_register( $wp_customize ) {

  
  // Add a custom setting for the primary color
  $wp_customize->add_setting( 'docupress_primary_color', array(
    'default' => '#0073aa',
    'sanitize_callback' => 'sanitize_hex_color',
  ) );

  // Add a custom control for the primary color
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'docupress_primary_color', array(
    'label' => __( 'Primary Color', 'docupress' ),
    'section' => 'colors',
    'settings' => 'docupress_primary_color',
  ) ) );

  //-----------------------------------Home Front Page-------------------------------

  $wp_customize->add_panel( 'docupress_panel', array(
    'title'    => __( 'Front Page Settings', 'docupress' ),
    'priority' => 100,
  ) );


  //-------------------------------------Banner Image Section--------------

      $wp_customize->add_section( 'docupress_section_banner', array(
        'title'    => __( 'Home First Section', 'docupress' ),
        'priority' => 8,
        'panel'    => 'docupress_panel',
    ) );


  //-----------------Enable Option banner-------------

  $wp_customize->add_setting('docupress_section_banner',array(
      'default' => 'Enable',
      'sanitize_callback' => 'docupress_sanitize_choices'
  ));
  $wp_customize->add_control('docupress_section_banner',array(
        'type' => 'radio',
        'label' => __('Do you want this section', 'docupress'),
        'section' => 'docupress_section_banner',
        'choices' => array(
            'Enable' => __('Enable', 'docupress'),
            'Disable' => __('Disable', 'docupress')
  )));

  $wp_customize->add_setting('docupress_section_bannerimage_section',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize,'docupress_section_bannerimage_section',array(
    'label' => __('Section Right Image','docupress'),
    'description' => __('Dimention 500 * 500','docupress'),
    'section' => 'docupress_section_banner',
    'settings' => 'docupress_section_bannerimage_section'
  )));

    $wp_customize->add_setting('docupress_section_bannerimage_section_title',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('docupress_section_bannerimage_section_title',array(
      'label' => __('Main Title','docupress'),
      'section' => 'docupress_section_banner',
      'setting' => 'docupress_section_bannerimage_section_title',
      'type'    => 'text'
    )
  ); 

      $wp_customize->add_setting('docupress_section_bannerimage_section_text',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('docupress_section_bannerimage_section_text',array(
      'label' => __('First Title Text','docupress'),
      'section' => 'docupress_section_banner',
      'setting' => 'docupress_section_bannerimage_section_text',
      'type'    => 'text'
    )
  );

  $wp_customize->add_setting('docupress_section_bannerimage_section_text_li1',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('docupress_section_bannerimage_section_text_li1',array(
      'label' => __('Add First Detail','docupress'),
      'section' => 'docupress_section_banner',
      'setting' => 'docupress_section_bannerimage_section_text_li1',
      'type'    => 'text'
    )
  );


  $wp_customize->add_setting('docupress_section_bannerimage_section_text_li2',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('docupress_section_bannerimage_section_text_li2',array(
      'label' => __('Add Second Detail','docupress'),
      'section' => 'docupress_section_banner',
      'setting' => 'docupress_section_bannerimage_section_text_li2',
      'type'    => 'text'
    )
  );

  $wp_customize->add_setting('docupress_section_bannerimage_section_text_li3',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('docupress_section_bannerimage_section_text_li3',array(
      'label' => __('Add Third Detail','docupress'),
      'section' => 'docupress_section_banner',
      'setting' => 'docupress_section_bannerimage_section_text_li3',
      'type'    => 'text'
    )
  );

    $wp_customize->add_setting('docupress_banner_btn_text',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('docupress_banner_btn_text',array(
      'label' => __('Button Text','docupress'),
      'section' => 'docupress_section_banner',
      'setting' => 'docupress_banner_btn_text',
      'type'    => 'text'
    )
  );


    $wp_customize->add_setting('docupress_banner_btn_text_url',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('docupress_banner_btn_text_url',array(
      'label' => __('Button URL','docupress'),
      'section' => 'docupress_section_banner',
      'setting' => 'docupress_banner_btn_text_url',
      'type'    => 'text'
    )
  );





  //----------------------------------Appointment Section----------------------------



    $wp_customize->add_section( 'docupress_appointment_section', array(
        'title'    => __( 'Appointment Section', 'docupress' ),
        'priority' => 10,
        'panel'    => 'docupress_panel',
    ) );

  //-----------------Enable Option Section about-------------

  $wp_customize->add_setting('docupress_appointment_section_enable',array(
      'default' => 'Enable',
      'sanitize_callback' => 'docupress_sanitize_choices'
  ));
  $wp_customize->add_control('docupress_appointment_section_enable',array(
        'type' => 'radio',
        'label' => __('Do you want this section', 'docupress'),
        'section' => 'docupress_appointment_section',
        'choices' => array(
            'Enable' => __('Enable', 'docupress'),
            'Disable' => __('Disable', 'docupress')
  )));

    //--------------Appointment Title-----------------------

    $wp_customize->add_setting('docupress_appointment_section_title',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('docupress_appointment_section_title',array(
      'label' => __('Section Text','docupress'),
      'section' => 'docupress_appointment_section',
      'setting' => 'docupress_appointment_section_title',
      'type'    => 'text'
    )
  ); 


    $wp_customize->add_setting('docupress_appointment_section_phone_number',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('docupress_appointment_section_phone_number',array(
      'label' => __('Phone Number','docupress'),
      'section' => 'docupress_appointment_section',
      'setting' => 'docupress_appointment_section_phone_number',
      'type'    => 'text'
    )
  );


    $wp_customize->add_setting('docupress_appointment_section_btn_title',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('docupress_appointment_section_btn_title',array(
      'label' => __('Button Title','docupress'),
      'section' => 'docupress_appointment_section',
      'setting' => 'docupress_appointment_section_btn_title',
      'type'    => 'text'
    )
  );


    $wp_customize->add_setting('docupress_appointment_section_btn_url',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('docupress_appointment_section_btn_url',array(
      'label' => __('Button URL','docupress'),
      'section' => 'docupress_appointment_section',
      'setting' => 'docupress_appointment_section_btn_url',
      'type'    => 'text'
    )
  );

  
  //----------------------------------Working Hours Section---------------


    $wp_customize->add_section( 'docupress_working_hours_section', array(
        'title'    => __( 'Working Hours Section', 'docupress' ),
        'priority' => 10,
        'panel'    => 'docupress_panel',
    ) );

  //-----------------Enable Option Section about-------------

  $wp_customize->add_setting('docupress_working_hours_section_enable',array(
      'default' => 'Enable',
      'sanitize_callback' => 'docupress_sanitize_choices'
  ));
  $wp_customize->add_control('docupress_working_hours_section_enable',array(
        'type' => 'radio',
        'label' => __('Do you want this section', 'docupress'),
        'section' => 'docupress_working_hours_section',
        'choices' => array(
            'Enable' => __('Enable', 'docupress'),
            'Disable' => __('Disable', 'docupress')
  )));

  $wp_customize->add_setting('docupress_working_hours_section_title',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('docupress_working_hours_section_title',array(
      'label' => __('Section Title','docupress'),
      'section' => 'docupress_working_hours_section',
      'setting' => 'docupress_working_hours_section_title',
      'type'    => 'text'
    )
  );


    $wp_customize->add_setting('docupress_working_hours_section_text',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('docupress_working_hours_section_text',array(
      'label' => __('Section Text','docupress'),
      'section' => 'docupress_working_hours_section',
      'setting' => 'docupress_working_hours_section_text',
      'type'    => 'text'
    )
  );


  // ----Working Hoours---

    for($i=1;$i<=7;$i++)
  {

    $wp_customize->add_setting('docupress_working_hours_section_working_day'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('docupress_working_hours_section_working_day'.$i,array(
      'label' => __('Working day ','docupress').$i,
      'section' => 'docupress_working_hours_section',
      'setting' => 'docupress_working_hours_section_working_day'.$i,
      'type'    => 'text'
    ));

    $wp_customize->add_setting('docupress_working_hours_section_working_time'.$i,array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('docupress_working_hours_section_working_time'.$i,array(
      'label' => __('Working Time ','docupress').$i,
      'section' => 'docupress_working_hours_section',
      'setting' => 'docupress_working_hours_section_working_time'.$i,
      'type'    => 'text'
    )); 
}


  //-----------------Section One (Featured Post)------------------------------------------

  $wp_customize->add_section( 'docupress_section1', array(
        'title'    => __( 'Latest Post', 'docupress' ),
        'priority' => 10,
        'panel'    => 'docupress_panel',
    ) );


  //-----------------Enable Option Section One-------------

  $wp_customize->add_setting('docupress_section1_enable',array(
      'default' => 'Enable',
      'sanitize_callback' => 'docupress_sanitize_choices'
  ));
  $wp_customize->add_control('docupress_section1_enable',array(
        'type' => 'radio',
        'label' => __('Do you want this section', 'docupress'),
        'section' => 'docupress_section1',
        'choices' => array(
            'Enable' => __('Enable', 'docupress'),
            'Disable' => __('Disable', 'docupress')
  )));

    //--------------Section One Title-----------------------

    $wp_customize->add_setting('docupress_section1_title',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('docupress_section1_title',array(
      'label' => __('Section Title','docupress'),
      'section' => 'docupress_section1',
      'setting' => 'docupress_section1_title',
      'type'    => 'text'
    )
  ); 

  //-----------Category------------

  $categories = get_categories();
  $cats = array();
  $i = 0;
  foreach($categories as $category){
    if($i==0){
      $default = $category->name;
      $i++;
    }
    $cats[$category->name] = $category->name;
  }

  $wp_customize->add_setting('docupress_section1_category',array(
  'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('docupress_section1_category',array(
    'type'    => 'select',
    'choices' => $cats,
    'label' => __('Select Category to Display Post','docupress'),
    'section' => 'docupress_section1',
  ));



    $wp_customize->add_setting('docupress_section1_category_number_of_posts_setting',array(
    'default' => '3',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('docupress_section1_category_number_of_posts_setting',array(
    'label' => __('Number of Posts','docupress'),
    'section' => 'docupress_section1',
    'setting' => 'docupress_section1_category_number_of_posts_setting',
    'type'    => 'number'
  ));



//------------------------Blog Page Settings--------------------------


  $wp_customize->add_section( 'docupress_blogpage_settings', array(
        'title'    => __( 'Blog Page Settings', 'docupress' ),
        'priority' => 10,
        'panel'    => 'docupress_panel',
    ) );

    //--------------Section One Title-----------------------

    $wp_customize->add_setting('docupress_blogpage_title',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('docupress_blogpage_title',array(
      'label' => __('Blog Page Title','docupress'),
      'section' => 'docupress_blogpage_settings',
      'setting' => 'docupress_blogpage_title',
      'type'    => 'text'
    )
  ); 

  //-----------Category------------

  $categories = get_categories();
  $cats = array();
  $i = 0;
  foreach($categories as $category){
    if($i==0){
      $default = $category->name;
      $i++;
    }
    $cats[$category->name] = $category->name;
  }

  $wp_customize->add_setting('docupress_blogpage_category',array(
  'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('docupress_blogpage_category',array(
    'type'    => 'select',
    'choices' => $cats,
    'label' => __('Select Category to Display Post on Blog Page','docupress'),
    'section' => 'docupress_blogpage_settings',
  ));



    $wp_customize->add_setting('docupressblog_page_category_number_of_posts_setting',array(
    'default' => '18',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('docupressblog_page_category_number_of_posts_setting',array(
    'label' => __('Number of Posts','docupress'),
    'section' => 'docupress_blogpage_settings',
    'setting' => 'docupressblog_page_category_number_of_posts_setting',
    'type'    => 'number'
  )); 




  //-------------------------Footer Settings------------------------------


    $wp_customize->add_section( 'docupress_footer', array(
        'title'    => __( 'Footer Settings', 'docupress' ),
        'priority' => 10,
        'panel'    => 'docupress_panel',
    ) );


  // Add a custom setting for the footer text
  $wp_customize->add_setting( 'docupress_footer_text', array(
    'default' => 'DocuPress WordPress Theme',
    'sanitize_callback' => 'sanitize_text_field',
  ) );

  // Add a custom control for the footer text
  $wp_customize->add_control( 'docupress_footer_text', array(
    'label' => __( 'Footer Text', 'docupress' ),
    'section' => 'docupress_footer',
    'type' => 'text',
  ) );

}
add_action( 'customize_register', 'docupress_customize_register' );



