<?php get_header(); ?>

 <div class="pageWrapper" id="archive">
    <div class="page-header" style="background:url(/wp-content/uploads/2022/08/bg-1.png)">
      <div class="container">
          <h1>Top Streaming Service Provider List</h1>
          <p>List of all the Streaming Services we have reviewed</p>
      </div>
  </div>

  <div class="archive">
    <div class="container">
      <div class="archive-main">
        <div class="tab">
          <div class="tab-mobile">
            <a class="mobile-tabs" href="#">Select Category</a>
            <ul class="nav-tab">
                <li><a href="/top-streaming-service/">All</a></li>
                <?php
                    $children = get_terms( array(
                          'taxonomy' => 'categories',
                          'hide_empty' => false,
                    ) );
                
                    if ( $children ) { 
                        foreach( $children as $subcat )
                        { ?>
                            <li><a href="/categories/<?php echo $subcat->slug ?>/"><?php echo $subcat->name ?></a></li>
                    <?php    }
                    }
                ?>
            </ul>
          </div>
          <div class="tab-content">
            <div class="content">
              <div class="streaming-main">
                
  			<?php 
			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			$args = array(
				'post_type' => 'streaming',	
				'posts_per_page' => '5',
				'paged' => $paged,
			);
			$the_query = new WP_Query( $args ); ?>

			<?php 
				if ( $the_query->have_posts() ) :
					while ( $the_query->have_posts() ) : $the_query->the_post(); 
			?>
                <div class="streaming-card">
                  <div class="archive-post-main">
                    <div class="archive-img">
                      <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                    </div>
                    <div class="archive-heading">
                      <h2><?php the_title(); ?></h2>
                      <div class="dealbox-ranking mt-2 mb-lg-0">
                        <?php 
							  $stars = round(floatval(get_field('overall_score') / 2));

							  if (empty($stars) || $stars < 1) {
								  $stars = 1;
							  }
							  $remaining_stars = 5 - $stars;

							  for ($i = 0; $i < $stars; $i++) {

							  ?>
							  <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
								  <path d="M8.02447 0.463525C8.17415 0.00287008 8.82585 0.00287008 8.97553 0.463525L10.6329 5.56434C10.6998 5.77035 10.8918 5.90983 11.1084 5.90983H16.4717C16.9561 5.90983 17.1575 6.52964 16.7656 6.81434L12.4266 9.96681C12.2514 10.0941 12.178 10.3198 12.245 10.5258L13.9023 15.6266C14.052 16.0873 13.5248 16.4704 13.1329 16.1857L8.79389 13.0332C8.61865 12.9059 8.38135 12.9059 8.20611 13.0332L3.8671 16.1857C3.47524 16.4704 2.948 16.0873 3.09768 15.6266L4.75503 10.5258C4.82197 10.3198 4.74864 10.0941 4.57339 9.96681L0.234384 6.81434C-0.157473 6.52964 0.0439152 5.90983 0.528277 5.90983H5.89159C6.1082 5.90983 6.30018 5.77035 6.36712 5.56434L8.02447 0.463525Z" fill="#FF9900"/>
							  </svg>     
							  <?php 
							  }



							  for ($k = 0; $k < $remaining_stars; $k++) { ?>
							  <svg width="17" height="17" viewBox="0 0 17 17" style="filter: grayscale(100%);" xmlns="http://www.w3.org/2000/svg">
								  <path d="M8.02447 0.463525C8.17415 0.00287008 8.82585 0.00287008 8.97553 0.463525L10.6329 5.56434C10.6998 5.77035 10.8918 5.90983 11.1084 5.90983H16.4717C16.9561 5.90983 17.1575 6.52964 16.7656 6.81434L12.4266 9.96681C12.2514 10.0941 12.178 10.3198 12.245 10.5258L13.9023 15.6266C14.052 16.0873 13.5248 16.4704 13.1329 16.1857L8.79389 13.0332C8.61865 12.9059 8.38135 12.9059 8.20611 13.0332L3.8671 16.1857C3.47524 16.4704 2.948 16.0873 3.09768 15.6266L4.75503 10.5258C4.82197 10.3198 4.74864 10.0941 4.57339 9.96681L0.234384 6.81434C-0.157473 6.52964 0.0439152 5.90983 0.528277 5.90983H5.89159C6.1082 5.90983 6.30018 5.77035 6.36712 5.56434L8.02447 0.463525Z" fill="#FF9900"/>
							  </svg>
							  <?php

							  }

						?>
                      </div>
                    </div>
                    <div class="archive-highlights">
                      <ul>
                        <?php
                            if( have_rows('positive_highlights') ):
                                while ( have_rows('positive_highlights') ) : the_row(); ?>
                                   
                            <li class="highlights-icons">
                              <span><?php the_sub_field('text')?></span>
                            </li>
                        
                        <?php        endwhile;
                            else :
                            endif;
                        ?>
                      </ul>
                    </div>
                    <div class="archive-lowlights">
                      <ul>
                        <?php
                            if( have_rows('negative_hightlights') ):
                                while ( have_rows('negative_hightlights') ) : the_row(); ?>
                                   
                            <li class="highlights-icons">
                              <span><?php the_sub_field('text')?></span>
                            </li>
                        
                        <?php        endwhile;
                            else :
                            endif;
                        ?>
                      </ul>
                    </div>
                  </div>
                  <div class="archive-rating">
                    <div class="archive-rating-main">
                      <p>Overall Score</p>
                      <h2><?php the_field('overall_score')?></h2>
                    </div>
                    <a class="btn visit-link" href="<?php the_permalink(); ?>">Read Review</a>
                  </div>
                </div>
                
			<?php 
				endwhile; 
				wp_reset_postdata(); 
				else : 
			?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php 
				endif; 
	  		?>
				 <div class="pagination">
					<?php
						echo paginate_links( array(
							'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
							'total'        => $the_query->max_num_pages,
							'current'      => max( 1, get_query_var( 'paged' ) ),
							'format'       => '?paged=%#%',
							'show_all'     => false,
							'type'         => 'plain',
							'end_size'     => 2,
							'mid_size'     => 1,
							'prev_next'    => true,
							'prev_text'    => sprintf( '<i></i> %1$s', __( 'Newer Posts', 'text-domain' ) ),
							'next_text'    => sprintf( '%1$s <i></i>', __( 'Older Posts', 'text-domain' ) ),
							'add_args'     => false,
							'add_fragment' => '',
						) );
					?>
									<?php 
									if (  $the_query->max_num_pages > 1 ){
										echo '<div class="misha_loadmore">More posts</div>';
									}
									?>

				</div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
<script>
	var posts_myajax = '<?php echo serialize( $the_query->query_vars ) ?>';
	var max_pages_myajax = <?php echo $the_query->max_num_pages ?>;
	var current_page_myajax = 1;
</script>

<?php get_footer(); ?>