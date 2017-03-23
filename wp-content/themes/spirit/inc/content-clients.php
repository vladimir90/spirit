<!-- Clients Section
==========================================-->
<div id="tf-clients" class="text-center">
    <div class="overlay">
        <div class="container">

            <div class="section-title center">
                <h2>Some of <strong>our Clients</strong></h2>
                <div class="line">
                    <hr>
                </div>
            </div>
            <div id="clients" class="owl-carousel owl-theme">


              <?php

              // WP_Query arguments
              $args = array(
                'post_type'              => array( 'clients' ),
                'posts_per_page'         => '4',
                'order'                  => 'DESC',
                'orderby'                => 'id',
              );

              // The Query
              $query = new WP_Query( $args );


              if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                      $query->the_post(); ?>
                      <div class="item">

                          <?php the_post_thumbnail('clients');?>


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
</div>
