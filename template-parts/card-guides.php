						  <div class="latest-guides-card">
							  <a href="<?php the_permalink();?>">
								<img src="<?php the_post_thumbnail_url() ?>" alt="">
								<div class="guide-card-content">
								  <span class="category">VPN GUIDES</span>
								  <h3><?php the_title(); ?></h3>
								  <div class="author">
									<img src="<?php echo get_avatar_url( get_the_author_meta('ID') )?>" alt="">
									<div>
									  <h4 class="name"><?php echo get_the_author_meta('nickname') ?></h4>
									  <p><?php echo get_the_date()?></p>
									</div>
								  </div>
								</div>
							  </a>
						  </div>