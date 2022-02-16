<?php
function load_stylesheets(){
    wp_register_style( 'stylesheet', get_template_directory_uri() . '/style.css', '20', '1.0.0', 'all');
    wp_enqueue_style( 'stylesheet');
}

add_action( 'wp_enqueue_scripts', 'load_stylesheets');


function add_webflow_styles(){
    // normalize
    wp_register_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array() , '1.0.0' , 'all');
    wp_enqueue_style('normalize');

    //webflow
    wp_register_style( 'webflow', get_template_directory_uri() . '/css/webflow.css', array('normalize'), '1.0.0', 'all');
    wp_enqueue_style( 'webflow');

    //lhdc.wordpress
    wp_register_style( 'lhdc_webflow', get_template_directory_uri() . '/css/lhdc.webflow.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'lhdc_webflow'); 

    //image-wrapper
    // wp_register_style( 'image_wrapper', get_template_directory_uri() . '/css/image-wrapper.css', array(), '1.0.0', 'all');
    // wp_enqueue_style( 'image_wrapper');

    //woocommerce image styling
    wp_register_style( 'wc_image_styling', get_template_directory_uri() . '/css/woocommerce-image.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'wc_image_styling');  

    //woocommerce image styling
    wp_register_style( 'wc_cart_styling', get_template_directory_uri() . '/css/woocommerce-cart.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'wc_cart_styling'); 

    //custom
    wp_register_style( 'custom', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'custom'); 
}

add_action( 'wp_enqueue_scripts', 'add_webflow_styles');

function load_google_font(){
    wp_enqueue_script( 'webfont', 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js', array(), null, false );
    wp_enqueue_script( 'webfont_loader', get_template_directory_uri() . '/js/webfont-loader.js', array('webfont'), null, false);
}

add_action( 'wp_enqueue_scripts', 'load_google_font');

function load_javascript(){

    // wp_deregister_script('jquery');
    // wp_register_script( 'jquery', 'https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=61a644c49f4ce955f607666b', array(), null, true);
    // wp_enqueue_script( 'jquery');

    wp_register_script( 'webfont', get_template_directory_uri() . '/js/webfont.js', array(), 1, 1, false );
    wp_enqueue_script( 'webfont');

    wp_register_script( 'webflow', get_template_directory_uri() . '/js/webflow.js', array('jquery'), null, true );
    wp_enqueue_script( 'webflow');

    wp_register_script( 'header', get_template_directory_uri() . '/js/header.js', array(), null, false);
    wp_enqueue_script( 'header');
}

add_action('wp_enqueue_scripts','load_javascript');




//add support
add_theme_support('menus');
add_theme_support( 'post-thumbnails');


register_nav_menus( 
    array(
        'top-menu' => __('Top Menu','theme'),
        'footer-menu-1' => __('Footer Menu', 'theme'),
        'footer-menu-2' => __('Help Menu', 'theme'),
        'footer-menu-3' => __('Categories Menu', 'theme')
    )
);




function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );

    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/**
 * Unload WooCommerce assets on non WooCommerce pages.
 */
function sk_conditionally_remove_wc_assets() {

    // if WooCommerce is not active, abort.
    if ( ! class_exists( 'WooCommerce' ) ) {
        return;
    }
    

    // if this is a WooCommerce related page, abort.
    if ( is_cart() || is_checkout() || is_page( array( 'my-account' ) ) ) {
        return;
    }else if (is_product()){
        // remove_action( 'wp_enqueue_scripts', [ WC_Frontend_Scripts::class, 'load_scripts' ] );
        remove_action( 'wp_print_scripts', [ WC_Frontend_Scripts::class, 'localize_printed_scripts' ], 5 );
        // remove_action( 'wp_print_footer_scripts', [ WC_Frontend_Scripts::class, 'localize_printed_scripts' ], 5 );
    }else{
        remove_action( 'wp_enqueue_scripts', [ WC_Frontend_Scripts::class, 'load_scripts' ] );
        remove_action( 'wp_print_scripts', [ WC_Frontend_Scripts::class, 'localize_printed_scripts' ], 5 );
        remove_action( 'wp_print_footer_scripts', [ WC_Frontend_Scripts::class, 'localize_printed_scripts' ], 5 );
    }

    //check for blog page
    // if(( is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag()) && 'post' == get_post_type()){
    //     echo "on blog page";
    // }else{
    //     echo "not blog page";
    // }

    // remove_action( 'wp_enqueue_scripts', [ WC_Frontend_Scripts::class, 'load_scripts' ] );
    // remove_action( 'wp_print_scripts', [ WC_Frontend_Scripts::class, 'localize_printed_scripts' ], 5 );
    // remove_action( 'wp_print_footer_scripts', [ WC_Frontend_Scripts::class, 'localize_printed_scripts' ], 5 );

}

add_action( 'get_header', 'sk_conditionally_remove_wc_assets' );


// //remove the weblfow css from woocommerce pages
// function remove_webflow_css(){
//     //remove webflow css from woocommerce pages
//     if(is_realy_woocommerce_page()){
//         echo "this is a woocommerce page";
//         wp_dequeue_style( 'webflow' );
//         wp_dequeue_style( 'lhdc_webflow' );
//         wp_deregister_style( "webflow" );
//         wp_deregister_style( "lhdc_webflow" );
//     }else{
//         echo "not a woocommerce page";
//     }
// }

// // add_action('wp_enqueue_scripts','remove_webflow_css',99999);





if ( ! function_exists( 'woocommerce_content' ) ) {

    /**
     * Output WooCommerce content.
     *
     * This function is only used in the optional 'woocommerce.php' template.
     * which people can add to their themes to add basic woocommerce support.
     * without hooks or modifying core templates.
     *
     */
    function woocommerce_content() {
    
        if ( is_singular( 'product' ) ) {
    
            while ( have_posts() ) : the_post();
    
                // Template depends from category slug
            
                if ( has_term( 'hair-vitamins', 'product_cat' ) ) {
    
                  woocommerce_get_template_part( 'content', 'single-product-hair-vitamins' );  
                // woocommerce_get_template_part( 'content', 'single-product' ); 
                } else {
    
                  woocommerce_get_template_part( 'content', 'single-product' ); 
    
                }
    
            endwhile;
    
        } else { ?>
    
            <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
    
                <h1 class="page-title"><?php woocommerce_page_title(); ?></h1>
    
            <?php endif; ?>
    
            <?php do_action( 'woocommerce_archive_description' ); ?>
    
            <?php if ( have_posts() ) : ?>
    
                <?php do_action('woocommerce_before_shop_loop'); ?>
    
                <?php woocommerce_product_loop_start(); ?>
    
                    <?php woocommerce_product_subcategories(); ?>
    
                    <?php while ( have_posts() ) : the_post(); ?>
    
                        <?php wc_get_template_part( 'content', 'product' ); ?>
    
                    <?php endwhile; // end of the loop. ?>
    
                <?php woocommerce_product_loop_end(); ?>
    
                <?php do_action('woocommerce_after_shop_loop'); ?>
    
            <?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>
    
                <?php wc_get_template( 'loop/no-products-found.php' ); ?>
    
            <?php endif;
    
        }
      }
    }

    //register sidebar
    //add a widget
register_sidebar( 
    array(
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
        'class' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    )
);


register_sidebar( 
    array(
        'name' => 'Blog Sidebar',
        'id' => 'blog-sidebar',
        'class' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    )
);


/**
* is_realy_woocommerce_page - Returns true if on a page which uses WooCommerce templates (cart and checkout are standard pages with shortcodes and which are also included)
*
* @access public
* @return bool
*/
function is_realy_woocommerce_page () {
    if( function_exists ( "is_woocommerce" ) && is_woocommerce()){
        return true;
    }
    $woocommerce_keys = array ( "woocommerce_shop_page_id" ,
        "woocommerce_terms_page_id" ,
        "woocommerce_cart_page_id" ,
        "woocommerce_checkout_page_id" ,
        "woocommerce_pay_page_id" ,
        "woocommerce_thanks_page_id" ,
        "woocommerce_myaccount_page_id" ,
        "woocommerce_edit_address_page_id" ,
        "woocommerce_view_order_page_id" ,
        "woocommerce_change_password_page_id" ,
        "woocommerce_logout_page_id" ,
        "woocommerce_lost_password_page_id" ) ;

    foreach ( $woocommerce_keys as $wc_page_id ) {
        if ( get_the_ID () == get_option ( $wc_page_id , 0 ) ) {
            return true ;
        }
    }
    return false;
}

remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);


//remove products from url/products/slug

/*
put . in product-cat
add_filter( 'request', function( $vars ) {
 
    global $wpdb;
 
    if( ! empty( $vars['pagename'] ) || ! empty( $vars['category_name'] ) || ! empty( $vars['name'] ) || ! empty( $vars['attachment'] ) ) {
 
        $slug = ! empty( $vars['pagename'] ) ? $vars['pagename'] : ( ! empty( $vars['name'] ) ? $vars['name'] : ( !empty( $vars['category_name'] ) ? $vars['category_name'] : $vars['attachment'] ) );
 
        $exists = $wpdb->get_var( $wpdb->prepare( "SELECT t.term_id FROM $wpdb->terms t LEFT JOIN $wpdb->term_taxonomy tt ON tt.term_id = t.term_id WHERE tt.taxonomy = 'product_cat' AND t.slug = %s" ,array( $slug )));
 
        if( $exists ){
 
            $old_vars = $vars;
 
            $vars = array('product_cat' => $slug );
 
            if ( !empty( $old_vars['paged'] ) || !empty( $old_vars['page'] ) )
 
                $vars['paged'] = ! empty( $old_vars['paged'] ) ? $old_vars['paged'] : $old_vars['page'];
 
            if ( !empty( $old_vars['orderby'] ) )
 
                    $vars['orderby'] = $old_vars['orderby'];
 
                if ( !empty( $old_vars['order'] ) )
 
                    $vars['order'] = $old_vars['order'];    
 
        }
 
    }
 
    return $vars;
 
});

function na_remove_slug( $post_link, $post, $leavename ) {
 
    if ( 'product' != $post->post_type || 'publish' != $post->post_status ) {

    return $post_link;

}

    $post_link = str_replace( '/product/', '/', $post_link );

    return $post_link;

}

add_filter( 'post_type_link', 'na_remove_slug', 10, 3 );

function change_slug_struct( $query ) {

    if ( ! $query->is_main_query() || 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {

    return;

}

            if ( ! empty( $query->query['name'] ) ) {

            $query->set( 'post_type', array( 'post', 'product', 'page' ) );

            } elseif ( ! empty( $query->query['pagename'] ) && false === strpos( $query->query['pagename'], '/' ) ) {

            $query->set( 'post_type', array( 'post', 'product', 'page' ) );

    // We also need to set the name query var since redirect_guess_404_permalink() relies on it.

    $query->set( 'name', $query->query['pagename'] );

}

}

add_action( 'pre_get_posts', 'change_slug_struct', 99 );

*/
//end of code for changing url structure https://www.businessbloomer.com/woocommerce-how-to-change-permalinks/