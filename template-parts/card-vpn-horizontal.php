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