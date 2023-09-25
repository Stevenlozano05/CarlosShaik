<?php
//about theme info
add_action( 'admin_menu', 'docupress_gettingstarted_page' );
function docupress_gettingstarted_page() {      
    add_theme_page( esc_html__('DocuPress', 'docupress'), esc_html__('All About DocuPress', 'docupress'), 'edit_theme_options', 'docupress_mainpage', 'docupress_mostrar_guide');   
}


function docupress_notice() {
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {?>
    <div class="notice notice-success is-dismissible getting_started">
        <div class="notice-content">
            <p><?php esc_html_e( 'Thanks For Choosing CA WP Themes', 'docupress' ); ?></p>
            <h2><?php esc_html_e( 'Thanks for installing DocuPress Free Theme!', 'docupress' ) ?> </h2>
            <p><?php esc_html_e( "Please Click on the link below to Check The Full Theme Edit Documentation", 'docupress' ) ?></p>
            <div class="info-link">
                <a href="<?php echo esc_url( docupress_PRO_DOCUMENTATION ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'docupress' ); ?></a>
            </div>
            <h2><?php esc_html_e( 'Check The Pro Version: DocuPress Premium for Amazing Features for Unlimited Site', 'docupress' ); ?></h2>
            <div class="info-link">
                <a href="<?php echo esc_url( docupress_PRO_URL ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'docupress' ); ?></a>
            </div>
            <div class="info-link">
                <a href="<?php echo esc_url( docupress_PRO_DEMO ); ?>" target="_blank"> <?php esc_html_e( 'Premium Demo', 'docupress' ); ?></a>
            </div>
            <div><h3><?php esc_html_e( 'Use the coupon code "Special10" to avail a special 10% discount on all premium WordPress themes. Hurry, the offer is valid for One day only for free theme users!', 'docupress' ); ?></h3></div>
        </div>
    </div>
    <?php }
}

add_action( 'admin_notices', 'docupress_notice' );





// Add a Custom CSS file to WP Admin Area
function docupress_admin_page_theme_style() {
   wp_enqueue_style('docupress-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getstarted/getstarted.css');
   wp_enqueue_script('docupress-tabs', esc_url(get_template_directory_uri()) . '/inc/getstarted/tabs.js');
}
add_action('admin_enqueue_scripts', 'docupress_admin_page_theme_style');

//About Theme Info
function docupress_mostrar_guide() { 

    //custom function about theme customizer

    $return = add_query_arg( array()) ;
    $theme = wp_get_theme( 'docupress' );
?>

<div class="wrapper-info">
    <div class="col-left">
        <h2><?php esc_html_e( 'Welcome to DocuPress Theme', 'docupress' ); ?> <span class="version">Version: 1.0</span></h2>
        <p><?php esc_html_e('Chitrarchana is a premium WordPress theme development company that provides high-quality themes for various types of websites. They specialize in creating themes for businesses, eCommerce, portfolios, blogs, and many more. Their themes are easy to use and customize, making them perfect for those who want to create a professional-looking website without any coding skills.','docupress'); ?></p>
        <p><?php esc_html_e('Chitrarchana offers a wide range of themes that are designed to be responsive and compatible with the latest versions of WordPress. Our themes are also SEO optimized, ensuring that your website will rank well on search engines. They come with a variety of features such as customizable widgets, social media integration, and custom page templates.','docupress'); ?></p>
        <p><?php esc_html_e('One of the unique things about Chitrarchana is their focus on providing excellent customer support. They have a dedicated team of support staff who are available 24/7 to help customers with any issues they may encounter. Their support team is knowledgeable and friendly, ensuring that customers receive the best possible experience.','docupress'); ?></p>
    </div>
    <div class="col-right">
        <div class="admin_text-btn">
            <h4><?php esc_html_e('Buy DocuPress Premium Theme','docupress'); ?></h4>
            <div class="info-link">
                <a href="<?php echo esc_url( docupress_PRO_URL ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'docupress' ); ?></a>
            </div>
        </div>
        <hr>
        <div class="admin_text-btn">
            <h4><?php esc_html_e('Premium Theme Demo','docupress'); ?></h4>
            <div class="info-link">
                <a href="<?php echo esc_url( docupress_PRO_DEMO ); ?>" target="_blank"> <?php esc_html_e( 'Demo', 'docupress' ); ?></a>
            </div>
        </div>
        <hr>
        <div class="admin_text-btn">
            <h4><?php esc_html_e('Need Support? / Contact Us','docupress'); ?></h4>
            <div class="info-link">
                <a href="<?php echo esc_url( docupress_PRO_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Contact Us', 'docupress' ); ?></a>
            </div>
        </div>
        <hr>
        <div class="admin_text-btn">
            <h4><?php esc_html_e('Documentation','docupress'); ?></h4>
            <div class="info-link">
                <a href="<?php echo esc_url( docupress_PRO_DOCUMENTATION ); ?>" target="_blank"> <?php esc_html_e( 'Docs', 'docupress' ); ?></a>
            </div>
        </div>
        <hr>
        <div class="admin_text-btn">
            <h4><?php esc_html_e('Free Theme','docupress'); ?></h4>
            <div class="info-link">
                <a href="<?php echo esc_url( docupress_FREE_URL ); ?>" target="_blank"> <?php esc_html_e( 'Demo', 'docupress' ); ?></a>
            </div>
        </div>

    </div>
</div>


<div class="new_box">
     <div class="featurebox">
        <h3><?php esc_html_e( 'Theme Information', 'docupress' ); ?></h3>
        <div class="table-image">
            <table class="tablebox">
                <thead>
                    <tr>
                        <th></th>
                        <th><?php esc_html_e('Free Themes', 'docupress'); ?></th>
                        <th><?php esc_html_e('Premium Themes', 'docupress'); ?></th>
                    </tr>   
                </thead>
                <tbody>
                    <tr>
                        <td><?php esc_html_e('Theme Edit Options', 'docupress'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr class="odd">
                        <td><?php esc_html_e('Responsive Design', 'docupress'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Logo Upload', 'docupress'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr class="odd">
                        <td><?php esc_html_e('Social Media Links', 'docupress'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-no"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Slider Settings', 'docupress'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-no"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr class="odd">
                        <td><?php esc_html_e('About Us Page', 'docupress'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-no"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Template Pages', 'docupress'); ?></td>
                        <td class="table-img"><?php esc_html_e('2', 'docupress'); ?></td>
                        <td class="table-img"><?php esc_html_e('5', 'docupress'); ?></td>
                    </tr>
                    <tr class="odd">
                        <td><?php esc_html_e('Home Page Template', 'docupress'); ?></td>
                        <td class="table-img"><?php esc_html_e('1', 'docupress'); ?></td>
                        <td class="table-img"><?php esc_html_e('1', 'docupress'); ?></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Home Page sections', 'docupress'); ?></td>
                        <td class="table-img"><?php esc_html_e('2', 'docupress'); ?></td>
                        <td class="table-img"><?php esc_html_e('10 to 15', 'docupress'); ?></td>
                    </tr>
                    <tr class="odd">
                        <td><?php esc_html_e('Contact us Page Template', 'docupress'); ?></td>
                        <td class="table-img">0</td>
                        <td class="table-img"><?php esc_html_e('1', 'docupress'); ?></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Blog Templates & Layout', 'docupress'); ?></td>
                        <td class="table-img">0</td>
                        <td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'docupress'); ?></td>
                    </tr>
                    <tr class="odd">
                        <td><?php esc_html_e('Page Templates & Layout', 'docupress'); ?></td>
                        <td class="table-img">0</td>
                        <td class="table-img"><?php esc_html_e('2(Left/Right Sidebar)', 'docupress'); ?></td>
                    </tr>
                    <tr class="odd">
                        <td><?php esc_html_e('Global Color Option', 'docupress'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr class="odd">
                        <td><?php esc_html_e('Inbuild Demo Content', 'docupress'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-no"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Allow To Set Site Title, Tagline, Logo', 'docupress'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr class="odd">
                        <td><?php esc_html_e('Enable Disable Options On All Sections, Logo', 'docupress'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-no"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Full Documentation', 'docupress'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr class="odd">
                        <td><?php esc_html_e('Latest WordPress Compatibility', 'docupress'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Woo-Commerce Compatibility', 'docupress'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr class="odd">
                        <td><?php esc_html_e('Support 3rd Party Plugins', 'docupress'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Secure and Optimized Code', 'docupress'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr class="odd">
                        <td><?php esc_html_e('Exclusive Functionalities', 'docupress'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-no"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Section Enable / Disable', 'docupress'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-no"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Gallery', 'docupress'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-no"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Support to add custom CSS / JS ', 'docupress'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-no"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr class="odd">
                        <td><?php esc_html_e('Shortcodes', 'docupress'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-no"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'docupress'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-no"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr class="odd">
                        <td><?php esc_html_e('Premium Membership', 'docupress'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-no"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Budget Friendly Value', 'docupress'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-no"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr class="odd">
                        <td><?php esc_html_e('Priority Error Fixing', 'docupress'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-no"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Custom Feature Addition', 'docupress'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-no"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr class="odd">
                        <td><?php esc_html_e('All Access Theme Pass', 'docupress'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-no"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr>
                        <td><?php esc_html_e('Seamless Customer Support', 'docupress'); ?></td>
                        <td class="table-img"><span class="dashicons dashicons-no"></span></td>
                        <td class="table-img"><span class="dashicons dashicons-saved"></span></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="table-img"></td>
                        <td class="update-link"><a href="<?php echo esc_url( docupress_PRO_URL ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'docupress'); ?></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>    
</div>
<?php } ?>