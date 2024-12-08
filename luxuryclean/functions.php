<?php
function luxury_clean_enqueue_styles() {
     // CSS files
    wp_enqueue_style( 'layout-style', get_template_directory_uri() . '/assets/css/bootstrap.css' );
    // Main stylesheet
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/style.css' );
    //wp_enqueue_style( 'main-style-map', get_template_directory_uri() . '/assets/css/style.css.map', array(), null );
    wp_enqueue_style( 'carousel-style', get_template_directory_uri() . '/assets/css/owl.carousel.min.css' );
    wp_enqueue_style( 'font-style', get_template_directory_uri() . '/assets/css/css.css?family=Open+Sans:400,700|Poppins:400,700|Roboto:400,700&display=swap' );
    // fal responsive
    wp_enqueue_style( 'responsive-style', get_template_directory_uri() . '/assets/css/responsive.css' );
}

add_action( 'wp_enqueue_scripts', 'luxury_clean_enqueue_styles' );

function luxury_clean_enqueue_scripts() {
    // Deregister WordPress's built-in jQuery
    wp_deregister_script( 'jquery' );

    // Enqueue jQuery (3.4.1) pt tema merge cu 3.4 si nu stiu ce jquery e default
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js', array(), null, true );
    // Enqueue other JS files
    wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/circles.min.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/custom.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'slider-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array( 'jquery' ), null, true );
    
    // fuck performance if it dosen't use jquery then disable it 
}

add_action( 'wp_enqueue_scripts', 'luxury_clean_enqueue_scripts' );
//menu default wp
function my_custom_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'footer-menu' => __( 'Footer Menu' ),
            'footer-menu-doi' => __( 'Footer Doi' )
        )
    );
}
add_action( 'init', 'my_custom_menus' );
// clase custom pt menu
add_filter('nav_menu_css_class', function($classes, $item, $args) {
    $classes[] = 'nav-item'; // for li
    return $classes;
}, 10, 3);

add_filter('nav_menu_link_attributes', function($atts, $item, $args) {
    $atts['class'] = 'nav-link'; //  for a
    return $atts;
}, 10, 3);
// Disable updates
add_filter( 'auto_update_plugin', '__return_false' );
add_filter( 'auto_update_theme', '__return_false' );
// Disable admin notices about available updates
remove_action( 'admin_notices', 'update_nag', 3 );
add_filter( 'pre_site_transient_update_core', '__return_null' );
add_filter( 'pre_site_transient_update_plugins', '__return_null' );
add_filter( 'pre_site_transient_update_themes', '__return_null' );
//opresc editor html pt pagini si nu pentru posts
function disable_wpautop_for_pages($content) {
    // Check if we are on a page (not a post)
    if (is_page()) {
        remove_filter('the_content', 'wpautop');
    }
    return $content;
}
add_filter('the_content', 'disable_wpautop_for_pages', 1);
// Pentru footer
class Footer_image extends Walker_Nav_Menu {
    // Start the element output.
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $id = apply_filters('nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';

        $output .= '<li' . $id . $class_names .'>';

        $atts = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
        $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
        $atts['href']   = ! empty( $item->url )        ? $item->url        : '';

        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        // Add the image before the link text
        $image_html = '<img src="' . get_template_directory_uri() . '/assets/images/bulit-icon.png" class="footer_menu" alt="">';

        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $image_html . $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}
// Remove the current-menu-item class if it's an anchor link
function remove_anchor_from_menu_class($classes, $item) {
    if (strpos($item->url, '#') !== false) {
        $key = array_search('current-menu-item', $classes);
        if ($key !== false) {
            unset($classes[$key]);
        }
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'remove_anchor_from_menu_class', 10, 2);
//scos admin edit din fron end
add_filter('show_admin_bar', 'is_blog_admin');
