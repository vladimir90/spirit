<?php
/*
Template Name: Home Spirit
*/
get_header();
?>



<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post();

      			get_template_part( 'inc/content', 'mainNav');

            get_template_part( 'inc/content', 'home');

            get_template_part( 'inc/content', 'about');

            get_template_part('inc/content','team');

            get_template_part('inc/content','services');

            get_template_part('inc/content','clients');

           endwhile; ?>
  <?php endif; ?>










<?php
get_footer();
?>
