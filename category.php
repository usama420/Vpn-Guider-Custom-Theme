<?php get_header(); 
$term = get_queried_object();
$category_parent = get_term( $term->category_parent );
?>

 <div class="pageWrapper" id="archive">
    <div class="page-header" style="background:url(/wp-content/uploads/2022/08/bg-<?php if($term->slug == 'guides'){ echo '2';} elseif($term->slug == 'vpn-and-privacy-news'){echo '3';} else {echo '5';}?>.png)">
      <div class="container">
          <h1><?php echo $term->name; ?></h1>
          <p>The complete guide on how to stay safe online</p>
      </div>
  </div>

  <div class="archive">
    <div class="container">
      <div class="archive-main">
        <div class="tab">
          <div class="tab-mobile">
            <a class="mobile-tabs" href="#">Select Category</a>
            <ul class="nav-tab">
			<?php if($category_parent->slug){ ?>
                <li><a href="/category/<?php echo $category_parent->slug?>">All</a></li>
                <?php
				}
				else{ ?>
				<li><a href="<?php echo $_SERVER['REQUEST_URI'] ?>">All</a></li>
			<?php	}
				if($term->parent == 0){
                    $children = get_terms( $term->taxonomy, array(
                        'parent'    => $term->term_id,
                        'hide_empty' => false,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    ) );
					$cCat = get_category($term->term_id);
				}
				else{
					$children = get_terms( $term->taxonomy, array(
                        'parent'    => $term->category_parent,
                        'hide_empty' => false,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    ) );
					$cCat = get_category($term->category_parent);
				}
                
                    if ( $children ) { 
                        foreach( $children as $subcat )
                        { ?>
                            <li><a href="/category/<?php echo $cCat->slug; ?>/<?php echo $subcat->slug?>/"><?php echo $subcat->name ?></a></li>
                    <?php  }
                    }
				
                ?>
            </ul>
          </div>
          <div class="tab-content">
            <div class="content">
              <div class="latest-guides-main <?php if($term->slug !== 'guides'): echo 'privacy-news'; endif;?>">
                
  			<?php 
			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => '6',
				'paged' => $paged,
				'tax_query' => array(
                    array(
                        'taxonomy' => 'category',
                        'field'    => 'slug',
                        'terms'    => $term->slug,		
                    ),
                ),
			);
			$the_query = new WP_Query( $args ); ?>

			<?php 
				if ( $the_query->have_posts() ) :
					while ( $the_query->have_posts() ) : $the_query->the_post(); 
			?>
			<?php if($term->slug == 'guides'){?>
			    <div class="latest-guides-card">
			     <a href="<?php the_permalink(); ?>">
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                  <div class="guide-card-content">
                    <span class="category"><?php echo $term->name; ?></span>
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
                
			<?php 
			}
			else{
			    get_template_part('template-parts/card','news');
			}
				endwhile; 
				wp_reset_postdata(); 
				else : 
			?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php 
				endif; 
	  		?>
				  <section class="pagination">
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
				</section>
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