<?php get_header();
$term = get_the_category();
global $post;
$authorID = $post->post_author;
?>

    <div class="pageWrapper" id="single-blog">
      <section class="single-head">
        <div class="container--small">
          <div class="breadcrumbs">
            <a href="/">Home </a> > <a href="/category/<?= get_the_category()[0]->slug ?>/"> <?= get_the_category()[0]->name; ?> </a> > <span> <?php the_title(); ?></span>
          </div>
          <h1><?php the_title(); ?></h1>
          <div class="author-info">
            <img src="<?php echo get_avatar_url( get_the_author_meta('ID') )?>" alt="">
            <span>by <u><?php echo get_the_author_meta('nickname', $authorID) ?></u></span>
            <p><?php echo get_the_date()?></p>
          </div>

        </div>
      </section>
<div class="reverse-mobile">
	
		
        <?php if($term[0]->slug == 'best-for'){?>
	
      <section class="top-vpn-cards blog-related">
		  <div class="section-head">
          <h2><?php the_field('related_posts_heading')?></h2>
        </div>
        <div class="container--small">
			
                <?php 
                $selectedBlogVpns = get_field('select_related_posts');

    				$args = array(
    					'post_type' => 'vpn',
    					'posts_per_page' => '2',
    					'post__in' => $selectedBlogVpns,
    				);
    				$the_query = new WP_Query( $args ); 
    				if ( $the_query->have_posts() ) :
    				    $i = 0;
    					while ( $the_query->have_posts() ) : $the_query->the_post(); 
    			        $i++;
    			?>
    			
              <div class="deal-box-main">
                <div class="deal-box">
                    <div class="dealbox-rating"><?php the_field('overall_score'); ?></div>
                    <div class="dealbox-company-logo">
                        <img src="<?php the_post_thumbnail_url();?>" class="image-fluid" alt="">
                    </div>
                    <div class="vpn-title">
                        <h3><?php the_title(); ?></h3>
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
                    </div>
 				  <div class="dealbox-sponsor-img">
			          <?php
						$terms = get_the_terms($post, 'works-with');
						if (is_array($terms) && count($terms) > 0) {
							foreach ($terms as $works_with) {
								$image = get_field('logo', $works_with);
								?>
								        <div class="works-with-img">
										    <img src="<?php echo $image; ?>" class="img-fluid" alt="sponsor">
										</div>
									<?php 
									} 
			  						?>
									<?php 
								} else { ?>
										N/A
									<?php 
						} ?>
				  </div>
				  <div class="dealbox-pricing">
					<del>$<?php the_field('old_price'); ?></del>
					<span class="text-info">$<?php the_field('new_price'); ?></span>
				  </div>
				  <div class="dealbox-buttons">
					<a href="<?php the_permalink(); ?>" class="btn-primary">View Review</a>
					<a href="<?php the_field('get_a_deal_link'); ?>" class="btn-secondary" rel="nofollow">Get a Deal</a>
				  </div>
                </div>
                <div class="deal-box-footer">
                    <ul>
    					<?php
							if( have_rows('highlights') ):
								while ( have_rows('highlights') ) : the_row(); ?>
			                        <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19.898" height="15.818" viewBox="0 0 19.898 15.818">
                                            <g id="Group_440" data-name="Group 440" transform="translate(-33.66 -67.77)">
                                              <path id="Path_16" data-name="Path 16" d="M48.815,86.5v6.082a1.435,1.435,0,0,1-1.435,1.435H35.1a1.432,1.432,0,0,1-1.151-.577c-.019-.026-.038-.052-.055-.08a1.427,1.427,0,0,1-.23-.778V80.295A1.434,1.434,0,0,1,35.1,78.86H47.38a1.433,1.433,0,0,1,1.241.715L46.646,81.55l-4.371,4.372-3.184-3.184a1.708,1.708,0,0,0-2.247,0l-1.311,1.31a1.472,1.472,0,0,0-.385.759,1.682,1.682,0,0,0,.385,1.489l5.618,5.618a1.709,1.709,0,0,0,2.247,0L44.709,90.6,48.815,86.5Z" transform="translate(0 -10.427)" fill="#dfe8f7"/>
                                              <path id="Path_17" data-name="Path 17" d="M75.959,71.749l-4.321,4.322-4.105,4.105-1.311,1.311a1.709,1.709,0,0,1-2.247,0L58.357,75.87a1.682,1.682,0,0,1-.385-1.489,1.472,1.472,0,0,1,.385-.759l1.311-1.31a1.708,1.708,0,0,1,2.247,0L65.1,75.5l4.371-4.372,1.975-1.975.957-.956a1.708,1.708,0,0,1,2.247,0l1.311,1.31a1.408,1.408,0,0,1,.334.563A1.714,1.714,0,0,1,75.959,71.749Z" transform="translate(-22.823 0)" fill="#ff6a00"/>
                                            </g>
                                        </svg>
                                        <?php the_sub_field('text')?>
                                    </li>
						<?php	endwhile;
							else :
							endif;
						?>
                    </ul>
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
      </section>
    </div>
    <?php } ?>
    <section class="blog-main">
      <div class="container--small">
        <div class="blog-main-content">
<!--           <div class="blog-sidebar">
            <h3>Table of Content</h3>
            <ol>
              <li>Introduction</li>
              <li>
                <ol>
                </ol>
              </li>
            </ol>
          </div> -->
          <div class="blog-content formatting"><div class="blog-img"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></div><?php the_content(); ?>
            <div class="social-share">
              <span>Share</span>
              <div class="share-icons">
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="60" viewBox="0 0 60 60"><defs><filter id="Ellipse_600" x="0" y="0" width="60" height="60" filterUnits="userSpaceOnUse"><feOffset dy="3" input="SourceAlpha"/><feGaussianBlur stdDeviation="3" result="blur"/><feFlood flood-opacity="0.161"/><feComposite operator="in" in2="blur"/><feComposite in="SourceGraphic"/></filter></defs><g id="Group_695" data-name="Group 695" transform="translate(-786.5 -3573)"><g transform="matrix(1, 0, 0, 1, 786.5, 3573)" filter="url(#Ellipse_600)"><circle id="Ellipse_600-2" data-name="Ellipse 600" cx="21" cy="21" r="21" transform="translate(9 6)" fill="#ff6a00"/></g><path id="Path_58094" data-name="Path 58094" d="M16,5.662h2.073V2.154A28.8,28.8,0,0,0,15.047,2C12.047,2,10,3.831,10,7.184v2.89H6.61V14H10V24.058h4.059V14H17.43l.507-3.926H14.055V7.57C14.055,6.412,14.363,5.662,16,5.662Z" transform="translate(804.358 3587.169)" fill="#fff"/></g></svg>
                </a>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="60" viewBox="0 0 60 60"><defs><filter id="Ellipse_602" x="0" y="0" width="60" height="60" filterUnits="userSpaceOnUse"><feOffset dy="3" input="SourceAlpha"/><feGaussianBlur stdDeviation="3" result="blur"/><feFlood flood-opacity="0.161"/><feComposite operator="in" in2="blur"/><feComposite in="SourceGraphic"/></filter></defs><g id="Group_694" data-name="Group 694" transform="translate(-898.5 -3573)"><g transform="matrix(1, 0, 0, 1, 898.5, 3573)" filter="url(#Ellipse_602)"><circle id="Ellipse_602-2" data-name="Ellipse 602" cx="21" cy="21" r="21" transform="translate(9 6)" fill="#ff6a00"/></g><path id="Path_58097" data-name="Path 58097" d="M25.753,6.166a10.083,10.083,0,0,1-2.8.76,4.9,4.9,0,0,0,2.15-2.7A9.751,9.751,0,0,1,22,5.418,4.869,4.869,0,0,0,13.686,9.86,13.824,13.824,0,0,1,3.651,4.765,4.941,4.941,0,0,0,3,7.223a4.857,4.857,0,0,0,2.162,4.05,4.81,4.81,0,0,1-2.209-.606v.059a4.869,4.869,0,0,0,3.919,4.751,4.667,4.667,0,0,1-1.306.2,5.819,5.819,0,0,1-.914-.083A4.881,4.881,0,0,0,9.2,18.969a9.762,9.762,0,0,1-6.009,2.09A9.418,9.418,0,0,1,2,20.988a13.741,13.741,0,0,0,7.47,2.2A13.765,13.765,0,0,0,23.378,9.313V8.684a10.012,10.012,0,0,0,2.375-2.518Z" transform="translate(914.747 3587.388)" fill="#fff"/></g></svg>
                </a>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="60" viewBox="0 0 60 60"><defs><filter id="Ellipse_602" x="0" y="0" width="60" height="60" filterUnits="userSpaceOnUse"><feOffset dy="3" input="SourceAlpha"/><feGaussianBlur stdDeviation="3" result="blur"/><feFlood flood-opacity="0.161"/><feComposite operator="in" in2="blur"/><feComposite in="SourceGraphic"/></filter></defs><g id="Group_774" data-name="Group 774" transform="translate(-887 -3573)"><g transform="matrix(1, 0, 0, 1, 887, 3573)" filter="url(#Ellipse_602)"><circle id="Ellipse_602-2" data-name="Ellipse 602" cx="21" cy="21" r="21" transform="translate(9 6)" fill="#ff6a00"/></g><path id="Path_58098" data-name="Path 58098" d="M18.975,15.956c-.233-.116-1.744-.814-1.976-.93a.548.548,0,0,0-.7.116c-.233.233-.7.93-.93,1.163-.116.233-.349.233-.581.116a9.5,9.5,0,0,1-2.325-1.4,13.383,13.383,0,0,1-1.628-1.976.511.511,0,0,1,.116-.581c.116-.116.233-.349.465-.465a.881.881,0,0,0,.233-.465.354.354,0,0,0,0-.465,20.667,20.667,0,0,1-.93-2.093c-.116-.814-.349-.814-.581-.814H9.557a1.326,1.326,0,0,0-.7.349,3.346,3.346,0,0,0-1.046,2.442,6.09,6.09,0,0,0,1.163,3.023,12.4,12.4,0,0,0,4.883,4.3,9.113,9.113,0,0,0,1.628.581,3.321,3.321,0,0,0,1.86.116,3.012,3.012,0,0,0,1.976-1.4,1.944,1.944,0,0,0,.116-1.4l-.465-.233m2.907-10.58A11.589,11.589,0,0,0,3.628,19.327L2,25.257l6.162-1.628A11.487,11.487,0,0,0,25.137,13.514a11.324,11.324,0,0,0-3.255-8.138M18.742,21.653a9.757,9.757,0,0,1-5.116,1.511,10.2,10.2,0,0,1-4.883-1.279l-.349-.233-3.6.93.93-3.488-.233-.349A9.762,9.762,0,0,1,8.627,5.376,9.458,9.458,0,0,1,21.765,8.4a9.594,9.594,0,0,1-3.023,13.254" transform="translate(903.429 3585.884)" fill="#fff"/></g></svg>
                </a>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="60" viewBox="0 0 60 60"><defs><filter id="pin" x="0" y="0" width="60" height="60" filterUnits="userSpaceOnUse"><feOffset dy="3" input="SourceAlpha"/><feGaussianBlur stdDeviation="3" result="blur"/><feFlood flood-opacity="0.161"/><feComposite operator="in" in2="blur"/><feComposite in="SourceGraphic"/></filter></defs><g id="Group_775" data-name="Group 775" transform="translate(-942.5 -3572.5)"><g transform="matrix(1, 0, 0, 1, 942.5, 3572.5)" filter="url(#pin)"><circle id="pin-2" data-name="pin" cx="21" cy="21" r="21" transform="translate(9 6)" fill="#ff6a00"/></g><path id="Path_58099" data-name="Path 58099" d="M12.351,0C5.594,0,2,4.33,2,9.052c0,2.19,1.224,4.92,3.182,5.786.3.134.459.077.525-.2.059-.21.316-1.219.441-1.7a.436.436,0,0,0-.1-.428A5.615,5.615,0,0,1,4.877,9.109c0-3.293,2.618-6.491,7.073-6.491,3.852,0,6.548,2.5,6.548,6.082,0,4.045-2.14,6.844-4.922,6.844a2.2,2.2,0,0,1-2.322-2.7c.439-1.78,1.3-3.694,1.3-4.977a1.912,1.912,0,0,0-1.979-2.1C9.008,5.76,7.737,7.312,7.737,9.4a5.183,5.183,0,0,0,.468,2.217L6.367,19.045a16.63,16.63,0,0,0,.114,5.463.162.162,0,0,0,.3.076,19.415,19.415,0,0,0,2.552-4.806c.191-.7.975-3.56.975-3.56A4.26,4.26,0,0,0,13.9,17.931c4.722,0,8.133-4.15,8.133-9.3C22.014,3.694,17.789,0,12.351,0" transform="translate(960.484 3587.673)" fill="#fff"/></g></svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>
<?php get_footer(); ?>