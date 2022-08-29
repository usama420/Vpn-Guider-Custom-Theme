<?php get_header(); 
global $post;
$works_with = get_the_terms($post->ID, 'works-with');
$operating = get_the_terms($post->ID, 'operating-systems');
$connections = get_the_terms($post->ID, 'simultaneous-connections');
$payment = get_the_terms($post->ID, 'payment-methods');
$protocol = get_the_terms($post->ID, 'protocols');
?>

    <div class="pageWrapper" id="single-vpn-reviews">
        <section class="single-banner">
            <div class="container">
                <div class="banner-main">
                    <div class="single-logo">
                        <div class="logo-main">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                        </div>
                        <div class="single-title">
                            <h1><?php the_title(); ?></h1>
                            <span>Updated <?php echo get_the_date(); ?></span>
                            <a href="visit_vpn_link">Visit <?php the_title(); ?></a>
                        </div>
                    </div>
                    <div class="single-highlights">
                        <div class="highlights-main">
                        <div class="single-rating">Overall Score <span><?php the_field('overall_score')?></span></div>
                        <div class="highlights">
                            <h2>Highlights</h2>
                            <ul>
                                <?php
        							if( have_rows('highlights') ):
        								while ( have_rows('highlights') ) : the_row(); ?>
        			                        <li>
                                                <?php the_sub_field('text')?>
                                            </li>
        						<?php	endwhile;
        							else :
        							endif;
        						?>
                            </ul>
                        </div>
                        <div class="works-with">
                            <h2>Works With</h2>
                            <div class="dealbox-sponsor-img">
                                <?php foreach ($works_with as $term) : ?>
                                <div class="sponsor-img">
                                    <img src="<?php echo get_field('logo', $term); ?>" class="img-fluid" alt="sponsor">
                                </div>
                                <?php endforeach; ?>

                            </div>  
                        </div>
                        </div>
                        <div class="banner-footer">
                            <div class="features">
                                <div class="feature-card">
                                    <svg id="_1" data-name="1" xmlns="http://www.w3.org/2000/svg" width="37.484" height="36.814" viewBox="0 0 37.484 36.814">
                                        <path id="Path_68" data-name="Path 68" d="M13.453,23.279h4.059a2.149,2.149,0,0,0-4.059,0Z" transform="translate(3.259 4.681)" fill="#ff6a00"/>
                                        <path id="Path_69" data-name="Path 69" d="M15.12,24.962c-.295,0-.721.561-.721,1.442,0,.865.432,1.441.721,1.441s.721-.561.721-1.441S15.414,24.962,15.12,24.962Z" transform="translate(3.622 4.644)" fill="#ff6a00"/>
                                        <path id="Path_70" data-name="Path 70" d="M19.963,24.079h1.916l-1.622-4.325H12.606l-1.622,4.325H12.9a3.6,3.6,0,0,1,7.063,0Z" transform="translate(2.311 3.976)" fill="#ff6a00"/>
                                        <path id="Path_71" data-name="Path 71" d="M25.3,12.6V4.053L16.205,0l-9.1,4.053V12.6l9.1,9.459ZM12.209,16.389a.8.8,0,0,1-.226-.781l1.069-4.435L9.3,9.262a.745.745,0,0,1-.366-.72A.7.7,0,0,1,9.39,7.9l4.559-1.355,1.7-4.716a.574.574,0,0,1,1.115,0l1.7,4.716L23.023,7.9h0a.7.7,0,0,1,.458.642.745.745,0,0,1-.366.72l-3.756,1.912,1.066,4.435a.8.8,0,0,1-.226.781.529.529,0,0,1-.694.017l-3.3-2.617-3.3,2.617a.529.529,0,0,1-.694-.017Z" transform="translate(2.537)" fill="#ff6a00"/>
                                        <path id="Path_72" data-name="Path 72" d="M16.9,11.229l2.693,1.8-.9-3.159h0A.721.721,0,0,1,19.091,9l3.079-1.32-3.69-.922a.721.721,0,0,1-.488-.415l-1.5-3.5L15,6.347a.72.72,0,0,1-.487.415l-3.691.922L13.9,9a.721.721,0,0,1,.41.861l-.9,3.159,2.693-1.8a.724.724,0,0,1,.8,0Z" transform="translate(2.247 1.094)" fill="#ff6a00"/>
                                        <path id="Path_73" data-name="Path 73" d="M25.3,12.175v-1.69L16.6,19.53a.536.536,0,0,1-.8,0l-8.7-9.046v1.689l9.1,9.462Z" transform="translate(2.537 1.683)" fill="#ff6a00"/>
                                        <path id="Path_74" data-name="Path 74" d="M14.385,26.8c0-1.616.8-2.883,1.819-2.883s1.819,1.266,1.819,2.883-.8,2.883-1.819,2.883h9.1V26.381l-2.071-2.46H9.178l-2.07,2.46v3.306h9.1c-1.021,0-1.819-1.267-1.819-2.883Zm4.852,0h3.639v1.442H19.237Zm-6.065,1.442H9.534V26.8h3.639Z" transform="translate(2.537 4.244)" fill="#ff6a00"/>
                                        <path id="Path_75" data-name="Path 75" d="M7.142,9.338H3.263L4.7,12.221H7.142Z" transform="translate(1.061 1.943)" fill="#ff6a00"/>
                                        <path id="Path_76" data-name="Path 76" d="M26.523,29.129H6.686a.729.729,0,0,0,0,1.441H26.523a.729.729,0,0,0,0-1.441Z" transform="translate(2.137 6.243)" fill="#ff6a00"/>
                                        <path id="Path_77" data-name="Path 77" d="M7.742,6.214H1.7L3.143,9.1h4.6Z" transform="translate(0.461 1.293)" fill="#ff6a00"/>
                                        <path id="Path_78" data-name="Path 78" d="M23.773,12.221h2.438l1.442-2.882h-3.88Z" transform="translate(5.507 1.943)" fill="#ff6a00"/>
                                        <path id="Path_79" data-name="Path 79" d="M8.342,3.089H.139L1.58,5.971H8.342Z" transform="translate(-0.139 1.186)" fill="#ff6a00"/>
                                        <path id="Path_80" data-name="Path 80" d="M23.773,3.089V5.971h6.762l1.442-2.882Z" transform="translate(5.507 1.186)" fill="#ff6a00"/>
                                        <path id="Path_81" data-name="Path 81" d="M23.773,9.1h4.6l1.442-2.882H23.773Z" transform="translate(5.507 1.293)" fill="#ff6a00"/>
                                      </svg>
                                    <div class="feature-card-content">
                                        <h3>Overall Rank</h3>
                                        <span><?php the_field('overall_rank')?></span>
                                    </div>                              
                                </div>
        
                                <div class="feature-card">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32.678" height="33.401" viewBox="0 0 32.678 33.401">
                                        <g id="Group_549" data-name="Group 549" transform="translate(-1.834 0.215)">
                                          <path id="Path_84" data-name="Path 84" d="M25.288,32.577a7.288,7.288,0,1,1,7.288-7.288A7.3,7.3,0,0,1,25.288,32.577Zm0-14.056a6.768,6.768,0,1,0,6.768,6.768A6.776,6.776,0,0,0,25.288,18.521ZM19.823,39.343a.256.256,0,0,1-.1-.018q-.472-.187-.928-.4a.26.26,0,0,1,.224-.47q.44.21.9.39a.26.26,0,0,1-.1.5Z" transform="translate(-7.115 -8.442)" fill="#ff6a00" stroke="#ff6a00" stroke-width="0.4"/>
                                          <path id="Path_85" data-name="Path 85" d="M14.965,32.4a.272.272,0,0,1-.278-.266V30.1A13.324,13.324,0,0,1,5.226,17.5,12.927,12.927,0,0,1,9.4,8,14.165,14.165,0,0,1,19.416,4.2a.283.283,0,0,1,.279.273v.413L21.25,3.395,19.7,1.909v.429a.26.26,0,0,1-.083.189.346.346,0,0,1-.2.077L19.139,2.6C10.547,2.6,3.557,9.281,3.557,17.5a14.862,14.862,0,0,0,7.6,12.8.261.261,0,0,1,.1.365.287.287,0,0,1-.382.092A15.4,15.4,0,0,1,3,17.5C3,8.988,10.24,2.064,19.139,2.064v-.8a.266.266,0,0,1,.172-.246.289.289,0,0,1,.3.057L21.84,3.207a.258.258,0,0,1,0,.376L19.614,5.711a.287.287,0,0,1-.3.057.265.265,0,0,1-.172-.245v-.8h0A13.578,13.578,0,0,0,9.787,8.378a12.412,12.412,0,0,0-4,9.119,12.8,12.8,0,0,0,9.267,12.16.268.268,0,0,1,.193.253v2.221A.272.272,0,0,1,14.965,32.4Zm3.9,1.6a.287.287,0,0,1-.2-.078l-2.226-2.129a.258.258,0,0,1,0-.376l2.226-2.129a.287.287,0,0,1,.3-.057.265.265,0,0,1,.172.245v.8h0a13.578,13.578,0,0,0,9.349-3.653,12.412,12.412,0,0,0,4-9.119,12.8,12.8,0,0,0-9.267-12.16.268.268,0,0,1-.193-.253V2.863a.279.279,0,0,1,.557,0V4.891A13.324,13.324,0,0,1,33.051,17.5,12.927,12.927,0,0,1,28.88,27a14.183,14.183,0,0,1-10.018,3.8.283.283,0,0,1-.279-.273v-.413L17.028,31.6l1.554,1.486v-.429a.26.26,0,0,1,.083-.189.244.244,0,0,1,.2-.077l.274.007c8.592,0,15.582-6.685,15.582-14.9a14.862,14.862,0,0,0-7.6-12.8.261.261,0,0,1-.1-.365.287.287,0,0,1,.382-.092A15.4,15.4,0,0,1,35.277,17.5c0,8.51-7.24,15.433-16.139,15.433v.8a.266.266,0,0,1-.172.246A.283.283,0,0,1,18.86,33.995Z" transform="translate(-0.966 -1.01)" fill="#ff6a00" stroke="#ff6a00" stroke-width="0.4"/>
                                          <path id="Path_86" data-name="Path 86" d="M29.411,22.831H28.047a.228.228,0,0,1-.227-.227V21.467H26.227A.228.228,0,0,1,26,21.239V19.875a.228.228,0,0,1,.227-.227h3.411v-.91H26.227A.228.228,0,0,1,26,18.51V14.416a.228.228,0,0,1,.227-.227h1.592V13.052a.228.228,0,0,1,.227-.227h1.365a.228.228,0,0,1,.227.227v1.137h1.592a.228.228,0,0,1,.227.227v1.365a.228.228,0,0,1-.227.227H27.819v.91h3.411a.228.228,0,0,1,.227.227v4.094a.228.228,0,0,1-.227.227H29.639V22.6A.228.228,0,0,1,29.411,22.831Zm-1.137-.455h.91V21.239a.228.228,0,0,1,.227-.227H31V17.373H27.592a.228.228,0,0,1-.227-.227V15.781a.228.228,0,0,1,.227-.227H31v-.91H29.411a.228.228,0,0,1-.227-.227V13.279h-.91v1.137a.228.228,0,0,1-.227.227H26.455v3.639h3.411a.228.228,0,0,1,.227.227v1.365a.228.228,0,0,1-.227.227H26.455v.91h1.592a.228.228,0,0,1,.227.227Z" transform="translate(-10.556 -1.34)" fill="#ff6a00" stroke="#ff6a00" stroke-width="0.4"/>
                                          <path id="Path_87" data-name="Path 87" d="M22.971,33.583a.3.3,0,0,1-.2-.078l-1.832-1.727-2.4.921a.3.3,0,0,1-.218,0,.278.278,0,0,1-.153-.146l-.948-2.2H14.7a.277.277,0,0,1-.285-.269V27.643l-2.387-.948a.278.278,0,0,1-.153-.146.254.254,0,0,1,0-.206l.977-2.186-1.778-1.678a.258.258,0,0,1,0-.38l1.831-1.727-.977-2.263a.264.264,0,0,1,.156-.35l2.33-.895V14.492a.277.277,0,0,1,.285-.269h2.59L18.3,11.972a.279.279,0,0,1,.155-.145.3.3,0,0,1,.218,0l2.317.921,1.779-1.677a.3.3,0,0,1,.4,0L25,12.8l2.4-.921a.3.3,0,0,1,.218,0,.278.278,0,0,1,.153.146l.948,2.2h2.516a.277.277,0,0,1,.285.269v2.442l2.387.948a.278.278,0,0,1,.153.146.254.254,0,0,1,0,.206l-.977,2.186L34.865,22.1a.258.258,0,0,1,0,.38l-1.831,1.727.977,2.263a.264.264,0,0,1-.156.35l-2.33.895v2.372a.277.277,0,0,1-.285.269h-2.59L27.642,32.6a.279.279,0,0,1-.155.145.3.3,0,0,1-.218,0l-2.317-.921L23.173,33.5A.3.3,0,0,1,22.971,33.583Zm-1.965-2.391a.3.3,0,0,1,.2.079l1.764,1.664,1.713-1.615A.3.3,0,0,1,25,31.262l2.232.887L28.2,29.98a.286.286,0,0,1,.263-.165h2.494V27.532a.269.269,0,0,1,.178-.249l2.244-.861-.94-2.179a.258.258,0,0,1,.062-.291l1.763-1.663-1.713-1.615a.257.257,0,0,1-.061-.295l.94-2.105-2.3-.913a.268.268,0,0,1-.174-.247V14.761H28.531a.285.285,0,0,1-.264-.168l-.913-2.115-2.31.887a.3.3,0,0,1-.309-.059l-1.764-1.663-1.713,1.615a.3.3,0,0,1-.312.058l-2.232-.887L17.746,14.6a.286.286,0,0,1-.263.165H14.988v2.284a.269.269,0,0,1-.178.249l-2.244.861.94,2.179a.258.258,0,0,1-.062.291l-1.763,1.663L13.395,23.9a.257.257,0,0,1,.061.295l-.94,2.105,2.3.913a.268.268,0,0,1,.174.247v2.352h2.422a.285.285,0,0,1,.264.168l.913,2.115,2.31-.887A.283.283,0,0,1,21.005,31.192Z" transform="translate(-4.798 -5.8)" fill="#ff6a00" stroke="#ff6a00" stroke-width="0.4"/>
                                        </g>
                                      </svg>
                                      
                                    <div class="feature-card-content">
                                        <h3>Refund Policy</h3>
                                        <span><?php the_field('money_back_guarantee')?></span>
                                    </div>                              
                                </div>
        
                                <div class="feature-card setup">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="27.694" height="27.694" viewBox="0 0 27.694 27.694">
                                        <g id="Group_552" data-name="Group 552" transform="translate(-2 -2)">
                                          <path id="Path_88" data-name="Path 88" d="M15.847,10.82V3A12.846,12.846,0,1,1,6.763,6.763" fill="none" stroke="#ff6a00" stroke-miterlimit="10" stroke-width="2"/>
                                          <path id="Path_89" data-name="Path 89" d="M8.827,10.407a1.117,1.117,0,0,1,1.58-1.58l6.376,4.8a2.234,2.234,0,1,1-3.16,3.16Z" transform="translate(0.644 0.644)" fill="#FF6A00"/>
                                        </g>
                                      </svg>
                                      
                                    <div class="feature-card-content">
                                        <h3>Setup Time</h3>
                                        <span><?php the_field('setup_time')?></span>
                                    </div>                              
                                </div>
        
                                <div class="feature-card">
                                    <svg id="_4" data-name="4" xmlns="http://www.w3.org/2000/svg" width="34.344" height="31.995" viewBox="0 0 34.344 31.995">
                                        <path id="Path_82" data-name="Path 82" d="M31.412,0H8.6A1.466,1.466,0,0,0,7.118,1.483V6.508h2.965V3H29.93v22.27H14.385V30.3a3.791,3.791,0,0,1-.4,1.7H31.412a1.466,1.466,0,0,0,1.482-1.482V1.483A1.466,1.466,0,0,0,31.412,0ZM19.988,30.043A1.446,1.446,0,1,1,21.434,28.6,1.45,1.45,0,0,1,19.988,30.043Z" transform="translate(1.449 0)" fill="#f68000"/>
                                        <path id="Path_83" data-name="Path 83" d="M12.816,6.377H2.44a1.7,1.7,0,0,0-1.7,1.7V28.1a1.7,1.7,0,0,0,1.7,1.7H12.816a1.7,1.7,0,0,0,1.7-1.7V8.076A1.7,1.7,0,0,0,12.816,6.377ZM6.2,7.606H9.02a.4.4,0,0,1,0,.8H6.2a.4.4,0,0,1,0-.8ZM7.61,28.538a1.121,1.121,0,1,1,1.121-1.121A1.126,1.126,0,0,1,7.61,28.538Zm5.278-3.471H2.332V9.667H12.925v15.4Z" transform="translate(-0.741 2.19)" fill="#f68000"/>
                                      </svg>
                                      
                                    <div class="feature-card-content">
                                        <h3>Devices</h3>
                                        <span><?php the_field('device_count_per_license')?></span>
                                    </div>                              
                                </div>
        
                                <div class="feature-card">
                                    <svg id="_4" data-name="4" xmlns="http://www.w3.org/2000/svg" width="34.344" height="31.995" viewBox="0 0 34.344 31.995">
                                        <path id="Path_82" data-name="Path 82" d="M31.412,0H8.6A1.466,1.466,0,0,0,7.118,1.483V6.508h2.965V3H29.93v22.27H14.385V30.3a3.791,3.791,0,0,1-.4,1.7H31.412a1.466,1.466,0,0,0,1.482-1.482V1.483A1.466,1.466,0,0,0,31.412,0ZM19.988,30.043A1.446,1.446,0,1,1,21.434,28.6,1.45,1.45,0,0,1,19.988,30.043Z" transform="translate(1.449 0)" fill="#f68000"/>
                                        <path id="Path_83" data-name="Path 83" d="M12.816,6.377H2.44a1.7,1.7,0,0,0-1.7,1.7V28.1a1.7,1.7,0,0,0,1.7,1.7H12.816a1.7,1.7,0,0,0,1.7-1.7V8.076A1.7,1.7,0,0,0,12.816,6.377ZM6.2,7.606H9.02a.4.4,0,0,1,0,.8H6.2a.4.4,0,0,1,0-.8ZM7.61,28.538a1.121,1.121,0,1,1,1.121-1.121A1.126,1.126,0,0,1,7.61,28.538Zm5.278-3.471H2.332V9.667H12.925v15.4Z" transform="translate(-0.741 2.19)" fill="#f68000"/>
                                      </svg>
                                    <div class="feature-card-content">
                                        <h3>Operating System</h3>
                                        <span><?php the_field('operating_system')?></span>
                                    </div>                              
                                </div>
        
                                <div class="feature-card">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32.375" height="32.375" viewBox="0 0 32.375 32.375">
                                        <path id="_6" data-name="6" d="M31.638,15.531,17.195,1.088h0A3.713,3.713,0,0,0,14.569,0H5.921A5.571,5.571,0,0,0,.351,5.571v8.647a3.713,3.713,0,0,0,1.088,2.626L15.882,31.287a3.714,3.714,0,0,0,5.252,0l10.5-10.5a3.714,3.714,0,0,0,0-5.252ZM8.82,8.468A2.785,2.785,0,1,1,9.635,6.5,2.785,2.785,0,0,1,8.82,8.468ZM19.384,24.421v2.04H16.6V24.5a5.086,5.086,0,0,1-3.027-1.481l-.323-.328.325-.326,1.383-1.387.329-.33.329.33h0a3.1,3.1,0,0,0,2.316.788c1.475,0,1.475-.669,1.475-.888h0a.766.766,0,0,0-.19-.584,1.162,1.162,0,0,0-.717-.263l-1.326-.185a4.169,4.169,0,0,1-2.383-1.04,3.368,3.368,0,0,1-.921-2.482A3.6,3.6,0,0,1,16.6,12.758v-2.08h2.785v1.968a4.733,4.733,0,0,1,2.623,1.3l.341.33-.337.333-1.353,1.338-.321.317-.326-.312h0a2.591,2.591,0,0,0-1.926-.623c-.768,0-1.227.344-1.227.919a.609.609,0,0,0,.175.446A1.445,1.445,0,0,0,17.8,17l1.291.184h0a4.129,4.129,0,0,1,2.349.97,3.514,3.514,0,0,1,.989,2.658,3.662,3.662,0,0,1-3.042,3.606Z" transform="translate(-0.351)" fill="#f68000"/>
                                      </svg>
                                      
                                    <div class="feature-card-content">
                                        <h3>Best Price</h3>
                                        <span><?php the_field('best_price')?></span>
                                    </div>                              
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="single-ratings">
            <div class="container">
                <div class="single-ratings-main">
                    <h2><?php the_title()?> Ratings</h2>
                    <div class="single-rating">Overall Score <span><?php the_field('overall_score')?></span></div>
                    <div class="single-rating-cards">
                        <div class="rating-card security-rating">
                            <div class="feature-rating"><?php the_field('security_rating')?></div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="49.527" height="59.5" viewBox="0 0 49.527 59.5">
                                <g id="s1" transform="translate(-0.36 -0.273)">
                                  <path id="Path_101" data-name="Path 101" d="M25.123,59.773a2.3,2.3,0,0,1-1.319-.412C2.083,44.327.36,29.7.36,12.133A2.317,2.317,0,0,1,2.243,9.855,61.983,61.983,0,0,0,23.773.707a2.32,2.32,0,0,1,2.7,0A62.014,62.014,0,0,0,48,9.855a2.318,2.318,0,0,1,1.883,2.278c0,17.566-1.726,32.193-23.443,47.228A2.313,2.313,0,0,1,25.123,59.773Z" transform="translate(0 0)" fill="#FF6A00"/>
                                  <path id="Path_102" data-name="Path 102" d="M20.621,33.572a2.949,2.949,0,0,1-2.07-.846l-7.756-7.61A2.953,2.953,0,1,1,14.932,20.9L20.6,26.46,31.875,15.183a2.956,2.956,0,1,1,4.18,4.18L22.71,32.705a2.958,2.958,0,0,1-2.089.867Z" transform="translate(3.456 5.083)" fill="#fff"/>
                                </g>
                              </svg>
                            <h3>Security</h3>
                            <div class="progress-bar">
                                <div style="width:<?php echo get_field('security_rating')*10?>%"></div>
                            </div>
                        </div>

                        <div class="rating-card">
                            <div class="feature-rating"><?php the_field('speed_rating')?></div>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64.925" height="64.925" viewBox="0 0 64.925 64.925">
                                <defs>
                                  <clipPath id="clip-path">
                                    <rect id="Rectangle_60" data-name="Rectangle 60" width="64.925" height="64.925" transform="translate(0.376)" fill="#fff"/>
                                  </clipPath>
                                </defs>
                                <g id="s2" transform="translate(-0.376)" clip-path="url(#clip-path)">
                                  <path id="Path_103" data-name="Path 103" d="M1.264,26.773a31.693,31.693,0,0,0,6.521,20.5l2.329-3.959A27.89,27.89,0,0,1,5.456,26.774Z" transform="translate(0.129 3.972)" fill="#f68000" fill-rule="evenodd"/>
                                  <path id="Path_104" data-name="Path 104" d="M10.781,8.113a3.209,3.209,0,0,0-.932.7A30.576,30.576,0,0,0,1.465,26.746H5.658a28.89,28.89,0,0,1,7.22-14.907l.7-.7L10.782,8.112Z" transform="translate(0.162 1.204)" fill="#f68000" fill-rule="evenodd"/>
                                  <path id="Path_105" data-name="Path 105" d="M29.833.406A31.827,31.827,0,0,0,11.2,7.393l3.028,3.028A27.983,27.983,0,0,1,29.832,4.6V.405Z" transform="translate(1.606 0.06)" fill="#f68000" fill-rule="evenodd"/>
                                  <path id="Path_106" data-name="Path 106" d="M48.492,7.393A31.822,31.822,0,0,0,29.858.405V4.6a27.984,27.984,0,0,1,15.605,5.823Z" transform="translate(4.374 0.06)" fill="#f68000" fill-rule="evenodd"/>
                                  <path id="Path_107" data-name="Path 107" d="M57.416,26.746A31.733,31.733,0,0,0,48.1,8.112L45.071,11.14a26.889,26.889,0,0,1,8.152,15.605h4.193Z" transform="translate(6.632 1.204)" fill="#f68000" fill-rule="evenodd"/>
                                  <path id="Path_108" data-name="Path 108" d="M50.645,47.27a31.693,31.693,0,0,0,6.521-20.5H52.974A27.892,27.892,0,0,1,48.315,43.31Z" transform="translate(7.113 3.972)" fill="#f68000" fill-rule="evenodd"/>
                                  <path id="Path_109" data-name="Path 109" d="M25.445,44.839c-3.494-2.1-5.432-6.608-2.795-9.782s20.73-21.2,20.73-21.2c-1.124,2.527-6.056,24.922-8.152,28.416A7.141,7.141,0,0,1,25.445,44.839Zm5.59-9.782a2.876,2.876,0,0,1-3.028,4.891,2.916,2.916,0,0,1-.931-3.96A2.726,2.726,0,0,1,31.035,35.057Z" transform="translate(3.123 2.057)" fill="#f68000" fill-rule="evenodd"/>
                                </g>
                              </svg>
                              
                            <h3>Speed</h3>
                            <div class="progress-bar">
                                <div style="width:<?php echo get_field('speed_rating')*10?>%"></div>
                            </div>
                        </div>

                        <div class="rating-card">
                            <div class="feature-rating"><?php the_field('servers_rating')?></div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="61.221" height="46.634" viewBox="0 0 61.221 46.634">
                                <path id="s3" d="M57.975,0H5.124A4.185,4.185,0,0,0,.938,4.185v16.74A4.185,4.185,0,0,0,5.124,25.11H29.755V31.3a7.772,7.772,0,1,0,3.587,0V25.11H57.974a4.185,4.185,0,0,0,4.185-4.185V4.185A4.184,4.184,0,0,0,57.974,0ZM13.493,17.936a5.387,5.387,0,1,1,3.8-1.578A5.381,5.381,0,0,1,13.493,17.936Zm18.056-3.587H25.571a1.794,1.794,0,0,1,0-3.587h5.979a1.794,1.794,0,0,1,0,3.587Zm21.524,0H37.528a1.794,1.794,0,0,1,0-3.587H53.073a1.794,1.794,0,0,1,0,3.587Z" transform="translate(-0.938)" fill="#f68000"/>
                              </svg>
                              
                            <h3>Servers</h3>
                                                        <div class="progress-bar">
                                <div style="width:<?php echo get_field('servers_rating')*10?>%"></div>
                            </div> 
                        </div>

                        <div class="rating-card">
                            <div class="feature-rating"><?php the_field('support_rating')?></div>
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 502.626 502.626" style="enable-background:new 0 0 502.626 502.626;" xml:space="preserve"><g><g><g><path d="M422.251,180.181C417.936,79.877,343.215,0,251.345,0C159.454,0,84.711,79.877,80.418,180.159     c-13.439,3.581-23.361,15.682-23.361,30.199v78.065c0,17.321,14.021,31.364,31.385,31.364s31.407-14.021,31.407-31.364h0.022     v-6.04c14.841,69.091,50.799,158.567,131.474,158.567c80.632,0,116.612-89.411,131.474-158.502v5.975     c0,13.827,9.017,25.41,21.398,29.595c-0.884,15.811-9.448,99.355-91.093,134.235c-5.112-3.171-11.325-4.228-17.494-2.028     l-35.915,13.331c-10.44,3.861-15.768,15.488-11.929,25.863c3.904,10.462,15.466,15.79,25.928,11.972l35.915-13.309     c7.83-2.891,12.791-10.138,13.158-17.947c91.46-40.445,100.843-136.974,101.749-152.268     c12.166-4.249,21.032-15.747,21.032-29.444v-78.065C445.59,195.863,435.646,183.74,422.251,180.181z M251.345,59.557     c-71.421,0-130.266,56.71-139.434,130.137c-2.438-2.761-5.328-5.026-8.564-6.795c2.977-87.513,68.013-157.445,147.997-157.445     c79.963,0,144.999,69.932,147.976,157.445c-3.214,1.769-6.105,4.034-8.542,6.752C381.611,116.245,322.766,59.557,251.345,59.557z     "/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g>	</g>	<g>	</g>	<g>	</g>	<g>	</g>	<g>	</g>	<g>	</g>	<g>	</g>	<g>	</g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
								</svg>
                              
                            <h3>Support</h3>
                                                        <div class="progress-bar">
                                <div style="width:<?php echo get_field('support_rating')*10?>%"></div>
                            </div>  
                        </div>

                        <div class="rating-card">
                            <div class="feature-rating"><?php the_field('prices_rating')?></div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" version="1.0" viewBox="0 0 468 468"><path fill="#ff6a00" d="m2600 5595c0-237-3-305-12-305-7 0-63-5-125-10-140-12-299-49-398-91-11-4-49-20-85-35-304-124-635-421-789-706-33-63-80-169-88-202-35-143-41-258-23-421 37-323 180-591 420-785 77-62 83-66 116-87 28-18 244-126 279-140 27-10 103-36 115-38 19-5 100-27 120-35 59-20 254-55 418-75l52-7v-1031l-82 6c-76 5-198 30-223 45-5 4-12 7-15 8-71 14-269 163-285 215-4 11-10 19-14 19-12 0-75 133-95 200l-17 55-410-3-410-2 6-63c17-165 65-343 132-487 26-54 99-185 115-205 4-5 27-35 51-65 72-93 202-215 327-306 60-44 244-154 257-154 5 0 25-9 44-19 34-18 167-63 264-90 62-17 188-31 276-31h79v-650h750l2 332 3 333 85 6c121 9 341 58 430 96 8 3 18 7 22 7 3 1 10 4 14 8 4 5 13 8 20 8 16 0 162 70 249 119 39 22 77 44 85 48s20 12 27 17c7 6 36 27 64 46 70 47 221 181 267 237 20 24 47 57 60 71 36 42 132 200 162 267 104 232 133 496 79 720-11 44-21 89-24 100-7 28-110 235-132 264-193 254-402 410-708 524-138 51-348 95-495 102-58 3-129 8-158 11l-52 5 2 502 3 502 58-2c154-5 367-94 455-188 66-71 103-148 110-230l5-65h863l-4 38c-4 47-29 151-52 222-141 430-441 791-800 962-133 63-169 78-235 94-5 2-44 12-86 23s-123 25-180 31-112 13-121 16c-17 5-18 28-18 290v284h-750v-305zm0-1585v-450h-57c-52 1-84 6-159 23-30 7-158 59-164 66-3 3-18 13-35 21-54 28-151 128-186 192-32 59-34 69-34 158 0 69 6 111 20 154 56 167 269 281 528 285l87 1v-450zm975-1485c219-17 399-118 472-266 46-93 48-281 3-367-80-153-329-259-612-261l-88-1v448c0 247 3 452 7 456s37 4 73 2c36-3 101-8 145-11z" class="color000 svgShape" transform="matrix(.078 0 0 -.078 0 468)"></path></svg>


                            <h3>Price</h3>
                                                        <div class="progress-bar">
                                <div style="width:<?php echo get_field('prices_rating')*10?>%"></div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="review">
            <div class="container">
                <div class="review-main">
                    <div class="review-content">
                        <h2>General overview</h2>
                        <div class="formatting">
                            <?php the_field('overview'); ?>
                        </div>
                        
                        <?php
						if( have_rows('vpn_content_cards') ):
							while ( have_rows('vpn_content_cards') ) : the_row(); ?>
        			                     
                        <div class="single-feature-content">
                            <div class="feature-rating">Score <span><?php the_sub_field('score'); ?></span></div>
                            <div class="single-feature-head">
                                <div class="title">
                                    <img src="<?php the_sub_field('icon'); ?>">
                                    <h3><?php the_sub_field('title'); ?></h3>
                                </div>
                                <a href="<?php the_sub_field('visit_link'); ?>">Visit Provider</a>
                            </div>
                            <div class="main-content">
                                <div class="formatting">
                                    <?php the_sub_field('content'); ?>
                                </div>
                            </div>
                        </div>
                        
                		<?php	endwhile;
							else :
							endif;
						?>
                        
                    </div>
                    <div class="review-sidebar">
                        <div class="company-info">
                            <h3>Company Information</h3>
                            <ul>
                                <li><span>Company name:</span> <?php the_field('company_name')?></li>
                                <li><span>Company incorporation country:</span> <?php the_field('company_country')?></li>
                                <li><span>Years in market:</span> <?php the_field('years_in_market')?></li>
                                <li><span>No-logs:</span> <?php the_field('no_logs')?></li>
                            </ul>
                        </div>
                        <div class="overview">
                            <h3>Overview - Conclusion</h3>
                            <p><?php the_field('conclusion')?></p>
                        </div>
                        <div class="sidebar-features">
                            <h3>Features</h3>
                            <ul>
                                <li><span class="feature">Operating System</span> 
                                    <span class="value os">
                                        <?php foreach ($operating as $term) : ?>
                                            <img src="<?php echo get_field('logo', $term); ?>" alt="">
                                        <?php endforeach; ?>
                                    </span>
                                </li>
                                <li><span class="feature">Simulaneous Connections</span> 
                                    <span class="value simultaneous-connections">
                                    
                                        <?php echo $connections[0]->name ?>
                                    
                                    </span>
                                </li>
                                <li><span class="feature">Protocols</span> 
                                    <span class="value">
                                      <?php
										if($protocol){
                                         $counter = 0;
                                         $count = count($protocol) - 1;
                                         foreach ($protocol as $term) : 
                                            $comma = $counter == $count ? "" : ", ";
                                            $counter++;
                                            echo "$term->name$comma ";
                                         endforeach;
											}
                                      ?>
                                    </span>
                                </li>
                                <li><span class="feature">Logs Policy</span>
                                    <span class="value">
                                        <?php if(get_field('logs_policy') == 'yes'){?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
  <path id="Path_119" data-name="Path 119" d="M58,48A10,10,0,1,0,68,58,10,10,0,0,0,58,48ZM56.457,61.543a.663.663,0,0,1-.423.212.693.693,0,0,1-.428-.216l-2.692-2.692.856-.856,2.269,2.269,6-6.043.841.87Z" transform="translate(-48 -48)" fill="#ff6a00"/>
</svg>
                                        <?php }
                                        else{ ?>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><g id="cross" transform="translate(-951 -184)"><g id="Ellipse_4" data-name="Ellipse 4" transform="translate(951 184)" fill="#ff6a00" stroke="#ff6a00" stroke-width="1"><circle cx="10" cy="10" r="10" stroke="none"/><circle cx="10" cy="10" r="9.5" fill="none"/></g><path id="Union_1" data-name="Union 1" d="M4.284,5.064.779,8.569,0,7.789,3.505,4.284,0,.779.779,0,4.284,3.505,7.79,0l.779.779L5.063,4.284,8.569,7.789l-.779.779Z" transform="translate(956.716 189.716)" fill="#fff" stroke="#fff" stroke-width="1"/></g></svg>
                                    <?php    }
                                        ?>
                                    </span>
                                </li>
                                <li><span class="feature">Works With</span> 
                                    <span class="value works-with">
                                        <?php foreach ($works_with as $term) : ?>

                                        <div class="works-with-logo">
                                            <img src="<?php echo get_field('logo', $term); ?>" alt="">
                                        </div>
                                        
                                        <?php endforeach; ?>
                                    </span>
                                </li>
                                <li><span class="feature">Payment Methods</span> 
                                    <span class="value payment">
                                        <?php foreach ($payment as $term) : ?>
                                        <div class="payment-method-logo">
                                            <img src="<?php echo get_field('logo', $term); ?>" alt="<?php the_title()?>" aria-label="<?php the_title()?>">
                                        </div>
                                        <?php endforeach; ?>
                                    </span>
                                </li>
                                <li><span class="feature">Money Back Guarantee</span> 
                                    <span class="value">
                                        <?php if(get_field('money_back_guarantee') == 'yes'){?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
  <path id="Path_119" data-name="Path 119" d="M58,48A10,10,0,1,0,68,58,10,10,0,0,0,58,48ZM56.457,61.543a.663.663,0,0,1-.423.212.693.693,0,0,1-.428-.216l-2.692-2.692.856-.856,2.269,2.269,6-6.043.841.87Z" transform="translate(-48 -48)" fill="#ff6a00"/>
</svg>
                                        <?php }
                                        else{ ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><g id="cross" transform="translate(-951 -184)"><g id="Ellipse_4" data-name="Ellipse 4" transform="translate(951 184)" fill="#ff6a00" stroke="#ff6a00" stroke-width="1"><circle cx="10" cy="10" r="10" stroke="none"/><circle cx="10" cy="10" r="9.5" fill="none"/></g><path id="Union_1" data-name="Union 1" d="M4.284,5.064.779,8.569,0,7.789,3.505,4.284,0,.779.779,0,4.284,3.505,7.79,0l.779.779L5.063,4.284,8.569,7.789l-.779.779Z" transform="translate(956.716 189.716)" fill="#fff" stroke="#fff" stroke-width="1"/></g></svg>
                                 <?php       }
                                        ?>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="top-vpn-cards related">
            <div class="container">
                <div class="section-head">
                    <h2>Related <span>VPN</span></h2>
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
                <div class="related-main">
                <?php 
                $selectedRelVpns = get_field('related_vpns_select');
    				$args = array(
    					'post_type' => 'vpn',
    					'posts_per_page' => '4',
    					'post__in' => $selectedRelVpns,
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

                <div class="mobile-slider-pagination">
          
                </div>
            </div>
        </section>
    </div>

<?php get_footer(); ?>