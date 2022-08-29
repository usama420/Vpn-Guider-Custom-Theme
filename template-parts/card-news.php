					  <div class="latest-guides-card">
						  <a href="<?php the_permalink(); ?>">
							<img src="<?php the_post_thumbnail_url(); ?>" alt="">
						  </a>
						  <div class="guide-card-content">
							  <span class="category">NEWS</span>
							  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							  <p><?php the_excerpt(); ?></p>
							  <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
							  <div class="author">
								  <img src="<?php echo get_avatar_url( get_the_author_meta('ID') )?>" alt="">
								  <div>
									  <h4 class="name"><?php echo get_the_author_meta('nickname') ?></h4>
									  <p><?php echo get_the_date()?></p>
								  </div>
							  </div>
						  </div>
					  </div>