<footer class="container-fluid footer_section">
    <div class="contact_section_3">
        <div class="container container_footer">
            <div class="contact_taital">
                <div class="row web">
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="map_main map_location">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/map-icon.png">
                            <span class="londan_text">Bucharest</span>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="map_main">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone-icon.png">
                            <span class="londan_text">+40 766734762</span>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="map_main">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/email-icon.png">
                            <span class="londan_text">contact@luxury-clean.ro</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact_product">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <h4 class="useful_text">SERVICII</h4>
                    <div class="menu">
                        <ul>
                            <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'footer-menu',
                                    'walker'         => new Footer_image(),
                                ) );
                            ?>
                        </ul>
                    </div>  
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-8">
                        <h4 class="useful_text">LINK-URI UTILE</h4>
                        <div class="menu multi_column_menu">
                           <ul>
                               <?php
                                    wp_nav_menu( array(
                                        'theme_location' => 'footer-menu-doi',
                                        'walker'         => new Footer_image(),
                                        'menu_class'     => 'footer_menu',
                                    ) );
                                ?>
                           </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="icon_main">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="menu_text">
                            <ul>
                               <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/fb-icon.png"></a></li>
                               <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter-icon.png"></a></li>
                               <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/in-icon.png"></a></li>
                               <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/google-icon.png"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p>
      &copy; 2024 All Rights Reserved Creative Agency
    </p>
</footer>
<?php wp_footer(); ?>
</body>
</html>
