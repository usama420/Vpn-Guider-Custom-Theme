                <div class="streaming-card">
                  <div class="archive-post-main">
                    <div class="archive-img">
                      <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                    </div>
                    <div class="archive-heading">
                      <h2><?php the_title(); ?></h2>
                      <div class="dealbox-ranking mt-2 mb-lg-0">
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