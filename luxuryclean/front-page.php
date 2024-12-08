<?php get_header(); ?>

    <?php 
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    else :
        echo '<p>No posts found</p>';
    endif;
    ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
