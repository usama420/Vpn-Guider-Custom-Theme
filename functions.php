<?php
/**
 * vpn-guider functions and definitions
 *
 *
 * @package vpn-guider
 */

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}
function vpn_guider_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'vpn-guider' ),
		)
	);
	
	register_nav_menus(
		array(
			'footer-menu-1' => esc_html__( 'Footer 1', 'vpn-guider' ),
		)
	);
	
	register_nav_menus(
		array(
			'footer-menu-2' => esc_html__( 'Footer 2', 'vpn-guider' ),
		)
	);

	register_nav_menus(
		array(
			'footer-menu-3' => esc_html__( 'Footer 3', 'vpn-guider' ),
		)
	);

	register_nav_menus(
		array(
			'footer-menu-4' => esc_html__( 'Footer 4', 'vpn-guider' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
}
add_action( 'after_setup_theme', 'vpn_guider_setup' );

 function custom_search_form( $form ) {
      $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
        <div class="custom-form"><label class="screen-reader-text" for="s">' . __( 'Search:' ) . '</label>
		<div class="input-field">
					<div class="search-close">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490 490" style="enable-background:new 0 0 490 490;" xml:space="preserve"><polygon points="11.387,490 245,255.832 478.613,490 489.439,479.174 255.809,244.996 489.439,10.811 478.613,0 245,234.161   11.387,0 0.561,10.811 234.191,244.996 0.561,479.174 "></polygon><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
			</div>
        	<input type="text" value="' . get_search_query() . '" name="s" id="s" />
		</div>
		<input type="image" alt="Search" value="'. esc_attr__( 'Search' ) .'"  src="/wp-content/uploads/2022/08/Path-12.png">
      </div>
      </form>';

      return $form;
 }
 add_filter( 'get_search_form', 'custom_search_form', 40 );


function vpn_guider_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'vpn-guider' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'vpn-guider' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	
	
}
add_action( 'widgets_init', 'vpn_guider_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function vpn_guider_scripts() {
// 	wp_enqueue_style( 'vpn-guider-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_enqueue_script( 'vpn-guider-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
}
add_action( 'wp_enqueue_scripts', 'vpn_guider_scripts' );



function create_toc($html) {
    $toc = '';
    if (is_single()) {
        if (!$html) return $html;
        $dom = new DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML(mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8'));
        libxml_clear_errors();
        $toc = '<div class="blog-sidebar">
                <h3>Table of Content</h3>
            <ol class="toc">';
        $h2_status = 0;
        $h3_status = 0;
        $i = 1;
        foreach($dom->getElementsByTagName('*') as $element) {
            if($element->tagName == 'h2') {
                if($h3_status){
                    $toc .= '</ol>';
                    $h3_status = 0;
                    }
                 if($h2_status){
                    $toc .= '</li>';
                    $h2_status = 0;
                  }
                  $h2_status = 1;
                  $toc .= '<li><a class="h2s" href="' . get_the_permalink() . '#toc-' . $i . '">' . $element->textContent . '</a>';
                  $element->setAttribute('id', 'toc-' . $i);
                  $i++;
            }elseif($element->tagName == 'h3') {
                if(!$h3_status){
                    $toc .= '<ol class="toc-sub">';
                    $h3_status = 1;
                }
                $toc .= '<li><a href="' . get_the_permalink() . '#toc-' . $i . '">' . $element->textContent . '</a></li>';
                $element->setAttribute('id', 'toc-' . $i);
                $i++;
            }
        }
        if($h3_status){
            $toc .= '</ol>';
        }
        if($h2_status){
            $toc .= '</li>';
        }
        $toc .= '</ol></div>';
        $html = $dom->saveHTML();
    }
    return $toc . $html;
}
add_filter('the_content', 'create_toc');

// Compare filters

function oz_compare_filters()
{
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

	$args = array(
		'post_type' => 'vpn',
		'post_status' => 'publish',
		'posts_per_page' => 12,
		'paged' => $paged,
		'tax_query' => array(),
		'meta_query' => array()
	);

	$orderby = $_GET['sortby'] ?? '';

	switch ($orderby) {
		case 'title_AZ':
			$args['orderby'] = 'title';
			$args['order'] = 'ASC';
			break;

		case 'title_ZA':
			$args['orderby'] = 'title';
			$args['order'] = 'DESC';
			break;

		case 'low_price':
			$args['meta_key'] = 'new_price';
			$args['orderby'] = 'meta_value_num';
			$args['order'] = 'ASC';
			break;

		case 'high_price':
			$args['meta_key'] = 'new_price';
			$args['orderby'] = 'meta_value_num';
			$args['order'] = 'DESC';
			break;

		case 'low_rating':
			$args['meta_key'] = 'overall_score';
			$args['orderby'] = 'meta_value_num';
			$args['order'] = 'ASC';
			break;

		case 'high_rating':
			$args['meta_key'] = 'overall_score';
			$args['orderby'] = 'meta_value_num';
			$args['order'] = 'DESC';
			break;

		default:
			$args['orderby'] = 'title';
			$args['order'] = 'ASC';
			break;
	}


	$count = 1;
	$count_meta = 1;
	if (isset($_GET['vf']) && !empty($_GET['vf'])) {

		$vpn_for_arr = array_map('sanitize_text_field', $_GET['vf']);



		$args['tax_query'][] = array(
			'taxonomy' => 'vpn-for',
			'field' => 'slug',
			'terms' => $vpn_for_arr
		);

		$count++;
	}
	
	if (isset($_GET['os']) && !empty($_GET['os'])) {

		$operating_system_arr = array_map('sanitize_text_field', $_GET['os']);



		$args['tax_query'][] = array(
			'taxonomy' => 'operating-systems',
			'field' => 'slug',
			'terms' => $operating_system_arr
		);

		$count++;
	}


	if (isset($_GET['works_with']) && !empty($_GET['works_with'])) {

		$works_with_arr = array_map('sanitize_text_field', $_GET['works_with']);

		$args['tax_query'][] = array(
			'taxonomy' => 'works-with',
			'field' => 'slug',
			'terms' => $works_with_arr
		);

		$count++;
	}

	if (isset($_GET['logs_policy']) && !empty($_GET['logs_policy'])) {

		$args['meta_query'][] = array(
			'key' => 'logs_policy',
			'compare' => '=',
			'value' => sanitize_text_field($_GET['logs_policy'])
		);

		$count_meta++;
	}


	if (isset($_GET['money_back']) && !empty($_GET['money_back'])) {

		$args['meta_query'][] = array(
			'key' => 'money_back_guarantee',
			'compare' => '=',
			'value' => sanitize_text_field($_GET['money_back'])
		);

		$count_meta++;
	}

	if (isset($_GET['amount']) && !empty($_GET['amount'])) {

		$amount = floatval($_GET['amount']);
		$amount = strval($amount);

		$args['meta_query'][] = array(
			'key' => 'new_price',
			'compare' => '<=',
			'type' => 'DECIMAL(10,3)',
			'value' => $amount
		);


		$count_meta++;
	}


	if (isset($_GET['connection']) && !empty($_GET['connection'])) {
		$connection_arr = array_map('sanitize_text_field', $_GET['connection']);

		$args['tax_query'][] = array(
			'taxonomy' => 'simultaneous-connections',
			'field' => 'slug',
			'terms' => $connection_arr
		);
		$count++;
	}


	if (isset($_GET['payment_methods']) && !empty($_GET['payment_methods'])) {
		$payment_arr = array_map('sanitize_text_field', $_GET['payment_methods']);
		$args['tax_query'][] = array(
			'taxonomy' => 'payment-methods',
			'field' => 'slug',
			'terms' => $payment_arr
		);
		$count++;
	}
	if (isset($_GET['protocols']) && !empty($_GET['protocols'])) {
		$protocols_arr = array_map('sanitize_text_field', $_GET['protocols']);
		$args['tax_query'][] = array(
			'taxonomy' => 'protocols',
			'field' => 'slug',
			'terms' => $protocols_arr
		);
		$count++;
	}



	if ($count > 2) {
		$args['tax_query']['relation'] = 'AND';
	}

	if ($count_meta > 1) {
		$args['meta_query']['relation'] = 'AND';
	}


	if (empty($args['tax_query'])) {
		unset($args['tax_query']);
	}



	if (empty($args['meta_query'])) {
		unset($args['meta_query']);
	}



	return $args;
}

add_filter('oz_compare_filters', 'oz_compare_filters', 10);


function md_loadmore_ajax_handler() {
    				$queryArgs = unserialize(stripslashes($_POST['query']));
					$args['posts_per_page'] = $queryArgs['posts_per_page'];
					$args['post_type'] = $queryArgs['post_type'];
	  				$args['paged'] = (int)$_POST['page'] + 1;
					if($queryArgs['tax_query'][0]['taxonomy']){
						$args['tax_query'][0] = array(
										'taxonomy' => $queryArgs['tax_query'][0]['taxonomy'],
										'field'    => 'slug',
										'terms'    => $queryArgs['tax_query'][0]['terms'],
									);
					}
    				$the_query = new WP_Query( $args ); 
    				if ( $the_query->have_posts() ) :
    				    $i = 0;
    					while ( $the_query->have_posts() ) : $the_query->the_post(); 
    			        $i++;
					if($queryArgs['post_type'] == 'vpn'){
						echo get_template_part('template-parts/card','vpn-horizontal');
 					}
					if($queryArgs['post_type'] == 'streaming'){
						print_r($args['posts_per_page']);
						echo get_template_part('template-parts/card','streaming');
					}
					if($queryArgs['post_type'] == 'post' && $queryArgs['tax_query'][0]['terms'] == 'guides'){?>

						<div class="latest-guides-card">
						 <a href="<?php the_permalink(); ?>">
						  <img src="<?php the_post_thumbnail_url(); ?>" alt="">
						  <div class="guide-card-content">
							<span class="category"><?php echo $queryArgs['tax_query'][0]['terms'] ?></span>
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

					<?php	}
					if($queryArgs['post_type'] == 'post' && $queryArgs['tax_query'][0]['terms'] == 'vpn-and-privacy-news'){
						echo get_template_part('template-parts/card','news');
					}
					
					if($queryArgs['post_type'] == 'post' && $queryArgs['tax_query'][0]['terms'] == 'best-for'){
						echo get_template_part('template-parts/card','news');
					}

				endwhile; 
					wp_reset_postdata(); 
				else : 

				?>
				<p><?php _e( 'Sorry, no more posts.' ); ?></p>
				<?php 

				endif; 
			
}
add_action('wp_ajax_loadmore', 'md_loadmore_ajax_handler');
add_action('wp_ajax_nopriv_loadmore', 'md_loadmore_ajax_handler');


// search 

function SearchFilter($query) {
    if ($query->is_search) {
        $query->set('post_type', 'vpn');
    }
    return $query;
}
add_filter('pre_get_posts','SearchFilter');



// 
function wpse_307202_term_link( $termlink, $term, $taxonomy ) {
    if ( is_tax( 'category' ) ) {
        if ( get_queried_object_id() === $term->term_id ) {
            $termlink = get_post_type_archive_link( 'post' );
        }
    }

    return $termlink;
}
add_filter( 'term_link', 'wpse_307202_term_link', 10, 3 );