<!-- Services Section
==========================================-->
<div id="tf-services" class="text-center">
    <div class="container">
        <div class="section-title center">
            <h2>Take a look at <strong>our services</strong></h2>
            <div class="line">
                <hr>
            </div>
            <div class="clearfix"></div>
            <small><em>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</em></small>
        </div>
        <div class="space"></div>
        <div class="row">

          <?php

          // WP_Query arguments
          $args = array(
            'post_type'              => array( 'services' ),
            'posts_per_page'         => '4',
            'order'                  => 'DESC',
            'orderby'                => 'id',
          );

          // The Query
          $query = new WP_Query( $args );


          if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                  $query->the_post(); ?>
                  <div class="col-md-3 col-sm-6 service">
                      <i class="<?php echo get_field('fa-icon');?>"></i>
                      <h4><strong><?php the_title();?></strong></h4>
                      <p><?php the_content();?></p>
                  </div>

                  <?php
                }
              } else {
                // no posts found
              }

              // Restore original Post Data
              wp_reset_postdata();

              ?>
        </div>
    </div>
</div>
