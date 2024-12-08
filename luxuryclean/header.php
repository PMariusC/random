<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
   
    <?php wp_head(); ?>
    <meta name="google-site-verification" content="CfnUicO2B9qwoBvME0gMQ4zAiY7eadOurUmS-O28MpI" />
</head>
<?php $current_language = pll_current_language(); ?>
<body <?php body_class(); ?>>
          <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container">
<!-- custom menu -->
  <div class="custom_menu-container">
    <div class="container">
      <div class="custom_menu">
        <div class="logo">
             <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="" />
                Luxury-Clean
            </a>
        </div>
        <ul class="navbar-nav ">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'header-menu', 
            'container'      => false,
            'items_wrap'     => '%3$s',
            'menu_class'     => 'navbar-nav',
            'fallback_cb'    => false,
            'depth' => 2,
        ));
        ?>
        </ul>
        <div class="user_option">
            <div class="call_btn">
<?php if ($current_language === 'ro') {               
            echo 'Telefon: +040 766734762';
} elseif ($current_language === 'en') {
            echo 'Call: +01234567890';
} ?>
          </div>
        </div>
        <?php
            $current_language = pll_current_language( 'slug' ); // Get current language slug
            $languages = pll_the_languages( array( 'raw' => 1 ) ); // Get language data as an array

            if ( ! empty( $languages ) ) {
            // Display the current language flag
                if ( isset( $languages[$current_language] ) ) {
                    $current_flag = $languages[$current_language]['flag'];
                    echo '<div class="language-switcher">';
                    echo '<button class="pll-button">';
                    echo '<img src="' . $current_flag . '" alt="' . $languages[$current_language]['name'] . '">';
                    echo '</button>';
                }

                // Dropdown menu for all languages
                echo '<ul class="language-dropdown">';
                foreach ( $languages as $lang ) {
                    echo '<li>';
                    echo '<a href="' . $lang['url'] . '" title="' . $lang['name'] . '">';
                    echo '<img src="' . $lang['flag'] . '" alt="' . $lang['name'] . '">';
                    echo  $lang['name'];
                    echo '</a>';
                    echo '</li>';
                }
                echo '</ul>';
                echo '</div>';
            }
        ?>
      </div>
    </div>
  </div>

<!-- custom menu -->
        
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="logo logomobile">
             <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="" />
                <span>Luxury-Clean</span>
             </a>
            </div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mr-2">
                <?php
                    wp_nav_menu(array(
                    'theme_location' => 'header-menu', 
                    'container'      => false,
                    'items_wrap'     => '%3$s',
                    'menu_class'     => 'navbar-nav',
                    'fallback_cb'    => false,
                    'depth' => 2,
                    ));
                ?>
            </ul>
          </div>
        </nav>
      </div>
        </header>
