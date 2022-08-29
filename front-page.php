<?php get_header(); ?>

<div class="pageWrapper" id="home">

    <section class="hero">
      <div class="container">
        <div class="hero-main">
          <div class="hero-content">
            <h1><?php the_field('hero_title')?></h1>
            <p><?php the_field('hero_description')?></p>
            <a href="<?php the_field('hero_button_link')?>" class="btn-primary">Read Reviews</a>
          </div>
          <div class="hero-img">
            <img src="<?php the_field('hero_image')?>" alt="hero">
          </div>
        </div>
      </div>
    </section>

    <section class="top-providers">
      <div class="container">
        <div class="section-head">
          <h2>Top <span>VPN Provider</span></h2>
        </div>

        <div class="top-providers-main">
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
					<?php 
						$selectedVpns = get_field('vpns');
						$args = array(
							'post_type' => 'vpn',
							'post__in' => $selectedVpns,
						);
						$the_query = new WP_Query( $args ); ?>

						<?php 
							if ( $the_query->have_posts() ) :
								while ( $the_query->have_posts() ) : $the_query->the_post(); 
						?>
									
								  <div class="swiper-slide">
									<div class="deal-box custom-dealbox">
									  <div class="dealbox-rating"><?php the_field('overall_score')?></div>
									  <div class="dealbox-company-logo">
										<img src="<?php the_post_thumbnail_url() ?>" class="image-fluid" alt="">
									  </div>
									  <div class="vpn-title">
										<h3><?php the_title();?></h3>
									  </div>
									  <div class="dealbox-ranking">
										  <?php 
										  $stars = round(floatval(get_field('overall_score')));

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
									  <div class="dealbox-pricing">
										<del>$<?php the_field('old_price'); ?></del>
										<span class="text-info">$<?php the_field('new_price'); ?></span>
									  </div>
									  <!-- <div class="dealbox-service-list">
 										 <ul class="highlight-list">
											<?php // if( have_rows('highlights') ): while ( have_rows('highlights') ) : the_row(); ?>
												<li><img src="<?php // echo get_template_directory_uri();?>/assets/svg/Group 440.svg" alt="<?php // the_sub_field('text')?>"><?php // the_sub_field('text')?></li>
											<?php // endwhile; endif; ?>
										</ul>
									  </div>
 									  <div class="dealbox-sponsor-img">
										  <?php
// 										  $terms = get_the_terms($post, 'works-with');
// 										  if (is_array($terms) && count($terms) > 0) {
// 											  foreach ($terms as $works_with) {
// 												  $image = get_field('logo', $works_with);
// 												  echo "<img src='$image' class='img-fluid' alt='sponsor'>";
// 											  }  
// 										  } else { echo "N/A"; }
										  ?>
									  </div> -->
									  <div class="dealbox-buttons">
										<a href="<?php the_permalink(); ?>" class="btn-primary">View Review</a>
										<a href="<?php the_field('get_a_deal_link'); ?>" class="btn-secondary" rel="nofollow">Get a Deal</a>
									  </div>
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
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="section-footer">
          <a href="/top-vpns-provider-list/">See all Reviews</a>
        </div>
      </div>
    </section>

    <section class="latest-guides">
      <div class="container">
        <div class="section-head">
          <h2>Our Latest <span>Guides</span></h2>
        </div>

        <div class="latest-guides-main">
			
						<?php 
						$selectedGuide = get_field('guides_to_show');
						$args = array(
							'post_type' => 'post',
							'post__in' => $selectedGuide,
							'posts_per_page' => 3,
						);
						$the_query = new WP_Query( $args ); ?>

						<?php 
							if ( $the_query->have_posts() ) :
								while ( $the_query->have_posts() ) : $the_query->the_post(); 
						?>
							<?php get_template_part('template-parts/card','guides');?>
						<?php 
							endwhile; 
							wp_reset_postdata(); 
							else : 
						?>
							<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php 
							endif; 
				  		?>
        </div>

        <div class="section-footer">
          <a href="/category/guides/">View all Guides</a>
        </div>
      </div>
    </section>

    <section class="best-providers">
      <div class="container">
        <div class="section-head">
          <h2><span>Best VPNs</span> Providers</h2>
        </div>

        <div class="best-providers-main">
			<?php
				if( have_rows('vpn_cards') ):
					while ( have_rows('vpn_cards') ) : the_row(); ?>
			
					<?php 
						$selectedBestVpn = get_sub_field('best_vpns_to_show');
						$args = array(
							'post_type' => 'vpn',
							'post__in' => array($selectedBestVpn),
						);
						$the_query = new WP_Query( $args ); 
							if ( $the_query->have_posts() ) :
								while ( $the_query->have_posts() ) : $the_query->the_post(); 
						?>
			
					<div class="best-providers-card">
						<p><?php the_sub_field('subtitle')?></p>
						<span><?php the_sub_field('title')?></span>

						<a href="<?php the_permalink(); ?>">
							<div class="best-rating"><?php the_field('overall_score') ?></div>
							<img src="<?php the_post_thumbnail_url(); ?>" alt="">
						</a>
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
				<?php	endwhile;
				else :
				endif;
			?>
        </div>
      </div>
    </section>

    <section class="privacy-news">
      <div class="container">
        <div class="section-head">
          <h2>Most Recent <span>VPN & Privacy News</span></h2>
        </div>
        <div class="mobile-slider-arrows">
          <div class="next">
              <svg xmlns="http://www.w3.org/2000/svg" width="17.28" height="31.42" viewBox="0 0 17.28 31.42">
                  <path id="Path_177" data-name="Path 177" d="M16.7.459a1.67,1.67,0,0,0-2.3,0L.953,13.442a3.064,3.064,0,0,0,0,4.441L14.5,30.961a1.672,1.672,0,0,0,2.284.016,1.532,1.532,0,0,0,.016-2.239L4.4,16.772a1.532,1.532,0,0,1,0-2.221L16.7,2.679a1.53,1.53,0,0,0,0-2.22" transform="translate(17.28 31.42) rotate(180)" fill="#ff6a00" fill-rule="evenodd"/>
                </svg>
          </div>
          <div class="prev">
              <svg xmlns="http://www.w3.org/2000/svg" width="17.279" height="31.416" viewBox="0 0 17.279 31.416">
                  <path id="Path_178" data-name="Path 178" d="M16.7.459a1.67,1.67,0,0,0-2.3,0L.953,13.44a3.063,3.063,0,0,0,0,4.441L14.5,30.957a1.672,1.672,0,0,0,2.284.016,1.531,1.531,0,0,0,.016-2.238L4.4,16.77a1.532,1.532,0,0,1,0-2.221L16.7,2.678a1.53,1.53,0,0,0,0-2.22" transform="translate(0)" fill="#ff6a00" fill-rule="evenodd"/>
                </svg>
          </div>
      </div>
        <div class="latest-guides-main">
			
			<?php 
				$selectedNews = get_field('news_to_show');
				$args = array(
					'post_type' => 'post',
					'post__in' => $selectedNews,
				);
				$the_query = new WP_Query( $args ); 
				if ( $the_query->have_posts() ) :
					while ( $the_query->have_posts() ) : $the_query->the_post(); 
			?>
				<?php get_template_part('template-parts/card','news');?>
			<?php 
				endwhile; 
					wp_reset_postdata(); 
				else : 
				?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php 
				endif; 
			?>
        </div>
        <div class="mobile-slider-pagination">
          
        </div>

        <div class="section-footer">
          <a href="/category/vpn-and-privacy-news/">Read More News</a>
        </div>
      </div>
    </section>

    <section class="faqs">
      <div class="container">
        <div class="section-head">
          <h2>Frequently Asked <span>Questions</span></h2>
        </div>
        <div class="faqs-main">
          <div class="faqs-img">
            <img src="<?php the_field('faqs_image')?>" alt="">
          </div>
          <div class="faqs-content">
            <div class="accordion-box">
				<?php
					if( have_rows('faqs') ):
						$i = 0;
						while( have_rows('faqs') ) : the_row(); $i++; ?>
							<div class="accordion">
								<div class="accordion__header">
								  <span><?php echo $i ?>. <?php the_sub_field('question')?></span>
								</div>

								<div class="accordion__body">
								  <div class="accordion__content"><?php the_sub_field('answer')?>
								  </div>
								</div>
							</div>
				<?php
						endwhile;
					else :
					endif;
				?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

<?php get_footer(); ?>