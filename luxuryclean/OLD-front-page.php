<?php get_header(); ?>
<?php
$current_language = pll_current_language(); // Get the current language
/*$post_id = get_the_ID();
$fields = get_fields($post_id);
print_r($fields);*/

/*if ($current_language === 'en') { 
    $slider_image = get_field('slider_image_en');
    $slider_heading = get_field('slider_heading_en');
    $slider_subheading = get_field('subheading_en');
    $slider_link = get_field('slider_link_en');
} elseif ($current_language === 'ro') {
    $slider_image = get_field('slider_image_ro');
    $slider_heading = get_field('slider_heading_ro');
    $slider_subheading = get_field('subheading_ro');
    $slider_link = get_field('slider_link_ro');
} else {
    // Default or fallback
    $slider_image = get_field('slider_image');
    $slider_heading = get_field('slider_heading'); 
    $slider_subheading = get_field('slider_subheading');
    $slider_link = get_field('slider_link');
}
<?php echo esc_html($slider_heading); ?>
<?php echo esc_html($slider_image); ?>
*/
?>

    <section class="slider_section">
      <div class="container-fluid">
        <div class="carousel-inner">
          <div class="col-md-3 col-lg-3 offset-md-1">
            <div class="detail-box">
              <h1>Luxury Clean</h1>
              <p>Best services in town!</p>
              <div>
                <a href="">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-7 col-lg-7 floatright">
            <div class="img-box">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner_1.png" alt=""/>
            </div>
          </div>
       </div>
      </div>
    </section>
  </div>
<main>


  <!-- about section -->

  <section class="about_section layout_padding mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div class="img-box">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-img.png" alt="" />
          </div>
        </div>
        <div class="col-md-5">
          <div class="detail-box">
            <div class="custom_heading-container">
              <h2>
                About Design
              </h2>
            </div>

            <p>
              It is a long established fact that a reader will be distracted
              by the readable content of a page when looking at its layout.
              The point of using Lorem Ipsum is that it has a more-or-less
              normal distribution of letters, as opposed to using 'Content
              here , content here', making it
            </p>
            <div>
              <a href="">
                About More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- do section -->
  <section class="do_section layout_padding-bottom">
   <div id="service" class="choose_section">
        <div class="container">
            <div class="col-sm-12">
                <div class="custom_heading-container"><h2>Our Service</h2></div>
                <p class="lorem_text">Lorem ipsum dolor sittem ametamngcing elit, per sed do eiusmoad 
teimpor sittem elit inuning ut sed.</p>
            </div>
        </div>
    </div>
    <div class="choose_section_2">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="about_inner">
                        <div class="icon"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-1.png"></a></div>
                        <h3 class="totaly_text">Curatare si Spalare</h3>
                        <p class="making">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="about_inner">
                        <div class="icon"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-2.png"></a></div>
                        <h3 class="totaly_text">Dedicated Hosting</h3>
                        <p class="making">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="about_inner">
                        <div class="icon"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-3.png"></a></div>
                        <h3 class="totaly_text">Domain Registration</h3>
                        <p class="making">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.</p>
                    </div>
                </div>
            </div>          
        </div>
    </div>

    <div class="choose_section_2">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="about_inner">
                        <div class="icon"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-4.png"></a></div>
                        <h2 class="totaly_text">Shared Hosting</h2>
                        <p class="making">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="about_inner">
                        <div class="icon"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-5.png"></a></div>
                        <h2 class="totaly_text">Dedicated Hosting</h2>
                        <p class="making">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="about_inner">
                        <div class="icon"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-6.png"></a></div>
                        <h2 class="totaly_text">Domain Registration</h2>
                        <p class="making">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.</p>
                    </div>
                </div>
            </div>
            <div class="bt_main">
                <button class="read_more"><a href="#">Read More</a></button>
            </div>          
        </div>
    </div>
  </section>

  <!-- end do section -->
  <!-- before and after section -->

  <section class="skill_section layout_padding2">
    <div class="container">
      <div class="custom_heading-container">
        <h2>
          Before and After
        </h2>
      </div>
      <div class="skill_padding">
        <div class="row">
          <div class="container-bf">  
            <div id="before-after-slider-bf">
                <div id="before-image-bf">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-bf-12.jpg" alt="before"/>
                </div>
                 <div id="after-image-bf">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-bf-2.jpg" alt="After"/>
                </div>
                <div id="resizer-bf"></div>
            </div>
          </div>

           <div class="container-bf">  
            <div id="before-after-slider-bf-2">
                <div id="before-image-bf-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-bf-3.jpg" alt="before"/>
                </div>
                 <div id="after-image-bf-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-bf-4.jpg" alt="After"/>
                </div>
                <div id="resizer-bf-2"></div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- end before and after section -->

  <!-- client section -->
  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="custom_heading-container">
        <h2>
          Customers
        </h2>
      </div>
    </div>

    <?php echo do_shortcode( '[lgxlogoslider  id="38"]' ); ?>
  </section>

  <!-- end client section -->

  <!-- contact section -->

  <section class="contact_section ">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
            <div class="contact-fix-with-main">
            <div class="input_main">
                <div class="container">
                    <form action="/action_page.php">
                        <div class="form-group">
                            <input type="text" class="email-bt" placeholder="Name" name="Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="email-bt" placeholder="Email" name="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="email-bt" placeholder="Phone" name="Email">
                        </div>
                        <div class="form-group">
                            <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="text"></textarea>
                        </div>
                    </form>   
                </div> 
                <div class="send_btn">
                    <button type="button" class="main_bt"><a href="#">Send</a></button>
                </div>                   
            </div>
            </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="img-box2">
          <iframe src="https://www.openstreetmap.org/export/embed.html?bbox=26.094503402709964%2C44.423191339013705%2C26.108665466308597%2C44.43008711136956&amp;layer=mapnik&amp;marker=44.42663932687751%2C26.101584434509277" style="border: 1px solid black"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->
    <?php
    /*
    In caz ca vrei postarile noi, default wp 
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_title( '<h1>', '</h1>' );
            the_content();
        endwhile;
    else :
        echo '<p>No posts found</p>';
    endif;*/
    ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
