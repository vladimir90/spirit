<!-- Team Page
==========================================-->
<div id="tf-team" class="text-center">
    <div class="overlay">
        <div class="container">
            <div class="section-title center">
                <h2>Our Team</h2>
                <div class="line">
                    <hr>
                </div>
            </div>


            <div id="team" class="owl-carousel owl-theme row">
          <?php

          // WP_Query arguments
          $args = array(
          	'post_type'              => array( 'team' ),
          	'posts_per_page'         => '8',
          	'order'                  => 'DESC',
          	'orderby'                => 'id',
          );

          // The Query
          $query = new WP_Query( $args );


          if ( $query->have_posts() ) {
              	while ( $query->have_posts() ) {
              		$query->the_post(); ?>
                  <div class="item">
                      <div class="thumbnail">
                        <?php the_post_thumbnail('team', ['class' => 'img-circle team-img']);?>

                          <div class="caption">
                              <h3><?php the_title();?></h3>
                              <p><?php echo get_field("subtitle");?></p>
                              <p><?php the_content();?></p>
                          </div>
                      </div>
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
