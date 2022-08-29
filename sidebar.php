<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package oz
 */
?>


<?php 
	
	$current_page_url = $current_url =  home_url( $wp->request ); 

?>
				<div class="mobile-overlay">
					
				</div>
<div class="compare-filters">
<aside id="site-sidebar">
	<form action="<?php echo $current_page_url; ?>" class='filters-sidebar'>
		<div class='filter-head'>
			<div class='filters-heading col-8'>Filter results</div>
			<div class="col-4 text-right">
				<a href='<?php echo $current_page_url; ?>' class='btn btn-grey'>Reset</a>
			</div>
		</div>
		<div class="accordion-box">
			<div class="accordion">
    			    <div class="accordion__header">
        				<label for="operating_system" class='filter-title'>
        					I want VPN for
        				</label>
    				</div>
    				<div class="accordion__body">
    				<select name="vf[]" id="vpn_for" class='form-control select2-multiple' multiple="multiple" data-placeholder="I want VPN for">
    					<option></option>
    					<?php 
    						$terms = get_terms( array (
    							'hide_empty'	=> false,
    							'taxonomy'	=> 'vpn-for'
    						) );
    						foreach ( $terms as $term ):
    							$selected = "";
    							if ( isset($_GET['vf'])  && is_array($_GET['vf']) && in_array($term->slug, $_GET['vf']) ) {
    								$selected = 'selected="selected"';
    							}
    					?>
    					<option value="<?php echo $term->slug ?>" <?php echo $selected; ?>>
    					 <?php echo $term->name; ?> 
    					 </option>
    					<?php endforeach; ?>
    				</select>
    				    <div class="vpn-for-main">
    					   
        					<?php foreach ( $terms as $term ) {
        					    $image = get_field('logo', $term); ?>
        					    <div class="multiple-card" data-title="<?php echo $term->slug ?>">
        					        <div class="multiple-title">
            					        <img src="<?php echo $image; ?>">
            					        <span><?php echo $term->name ?></span>
        					        </div>
        					        <svg xmlns="http://www.w3.org/2000/svg" width="8.683" height="8.683" viewBox="0 0 8.683 8.683"><path id="ic_check_circle_24px" d="M6.342,2a4.342,4.342,0,1,0,4.342,4.342A4.343,4.343,0,0,0,6.342,2ZM5.473,8.512,3.3,6.342l.612-.612L5.473,7.284l3.3-3.3.612.617Z" transform="translate(-2 -2)" fill="#868686"/></svg>
        					    </div>    
        		            <?php	}?>
    					
    					</div>
    			</div>
    		</div>
    		<div class="accordion">
    			    
    			    <div class="accordion__header">
        				<label for="operating_system" class='filter-title'>
        					Operating System
        				</label>
    				</div>
    				<div class="accordion__body">
    				<select name="os[]" id="operating_system" class='form-control select2-multiple' multiple="multiple" data-placeholder="Select Operating System">
    					<option></option>
    					<?php 
    						$terms = get_terms( array (
    							'hide_empty'	=> false,
    							'taxonomy'	=> 'operating-systems'
    						) );
    						foreach ( $terms as $term ):
    							$selected = "";
    							if ( isset($_GET['os'])  && is_array($_GET['os']) && in_array($term->slug, $_GET['os']) ) {
    								$selected = 'selected="selected"';
    							}
    					?>
    					<option value="<?php echo $term->slug ?>" <?php echo $selected; ?>>
    					 <?php echo $term->name; ?> 
    					 </option>
    					<?php endforeach; ?>
    				</select>
    				    <div class="operating-systems-main">
    					   
        					<?php foreach ( $terms as $term ) {
        					    $image = get_field('logo', $term); ?>
        					    <div class="multiple-card" data-title="<?php echo $term->slug ?>">
        					        <div class="multiple-title">
            					        <img src="<?php echo $image; ?>">
            					        <span><?php echo $term->name ?></span>
        					        </div>
        					        <svg xmlns="http://www.w3.org/2000/svg" width="8.683" height="8.683" viewBox="0 0 8.683 8.683"><path id="ic_check_circle_24px" d="M6.342,2a4.342,4.342,0,1,0,4.342,4.342A4.343,4.343,0,0,0,6.342,2ZM5.473,8.512,3.3,6.342l.612-.612L5.473,7.284l3.3-3.3.612.617Z" transform="translate(-2 -2)" fill="#868686"/></svg>
        					    </div>    
        		            <?php	}?>
    					
    					</div>
    			</div>
    		</div>
    		<div class="accordion">
    			    <div class="accordion__header">
    				<label for="sidebar-pricing-area" class='filter-title'>
    					Max Price in USD
    				</label>
    				</div>
    				<div class="accordion__body">
    				  <div class="price-range">
    				    <svg xmlns="http://www.w3.org/2000/svg" width="12.113" height="12.113" viewBox="0 0 12.113 12.113"><path id="dollar-sign-icon" d="M6.057,0A6.057,6.057,0,1,1,0,6.057,6.057,6.057,0,0,1,6.057,0Zm.887,4.962A.627.627,0,0,0,6.7,4.5a.708.708,0,0,0-.223-.113L6.466,5.528l.141.032a3.416,3.416,0,0,1,.717.235,2,2,0,0,1,.523.351,1.346,1.346,0,0,1,.321.466,1.607,1.607,0,0,1,.113.591,1.55,1.55,0,0,1-.262.887,1.628,1.628,0,0,1-.744.569,2.779,2.779,0,0,1-.852.185L6.416,9.4H5.724l.007-.559a2.859,2.859,0,0,1-.818-.189,1.676,1.676,0,0,1-.794-.624,1.893,1.893,0,0,1-.291-1.061H5.1a.825.825,0,0,0,.14.44.768.768,0,0,0,.346.267,1.072,1.072,0,0,0,.165.053l.015-1.209-.266-.061a2.5,2.5,0,0,1-1.119-.528,1.248,1.248,0,0,1-.406-.986,1.472,1.472,0,0,1,.273-.887A1.807,1.807,0,0,1,5,3.463a2.6,2.6,0,0,1,.8-.2l.007-.551h.7L6.5,3.274a2.391,2.391,0,0,1,.718.2,1.705,1.705,0,0,1,.728.6,1.6,1.6,0,0,1,.265.9ZM5.789,4.371a.751.751,0,0,0-.106.033.571.571,0,0,0-.261.185.46.46,0,0,0-.089.265.394.394,0,0,0,.05.218.518.518,0,0,0,.161.164,1.068,1.068,0,0,0,.228.114l.013-.977Zm.652,3.358a.746.746,0,0,0,.109-.035.654.654,0,0,0,.29-.2.477.477,0,0,0,.1-.3.4.4,0,0,0-.1-.265.743.743,0,0,0-.287-.2c-.033-.014-.068-.028-.105-.041L6.439,7.725Zm-.384-6.7A5.027,5.027,0,1,1,1.029,6.061,5.027,5.027,0,0,1,6.057,1.033Z" fill="#868686" fill-rule="evenodd"/></svg>
    				    <input inputmode="decimal" id="amount" name="amount" class='filter-amount' value="<?php echo (isset($_GET['amount']) && !empty($_GET['amount'])) ? floatval($_GET['amount']) : ''; ?>" type="text" name='amount' placeholder="Enter Amount in USD" id="amount" inputmode="decimal"
    					class='form-control'>
    				  </div>
    			</div>
    		</div>
    		<div class="accordion">
    			    <div class="accordion__header">
    				<label for="connection" class='filter-title'>
    					Simultaneous Connections
    				</label>
    				</div>
    				<div class="accordion__body">
    				<select name="connection[]" id="connection" class='form-control select2-multiple' multiple="multiple" data-placeholder="Select Simultaneous Connections">
    					<option></option>
    					<?php 
    						$terms = get_terms( array (
    							'hide_empty'	=> false,
    							'taxonomy'	=> 'simultaneous-connections'
    						) );
    						foreach ( $terms as $term ):
    						$selected = "";
    						if ( isset($_GET['connection'])  && is_array($_GET['connection']) && in_array($term->slug, $_GET['connection']) ) {
    							$selected = 'selected="selected"';
    						}
    					?>
    					<option value="<?php echo $term->slug ?>" <?php echo $selected; ?>> <?php echo $term->name; ?> </option>
    					<?php endforeach; ?>
    				</select>
    				    <div class="connections-main">
        					<?php foreach ( $terms as $term ) { ?>
        					    <div class="multiple-card" data-title="<?php echo $term->slug ?>">
        					        <div class="multiple-title">
            					        <span><?php echo $term->name ?></span>
        					        </div>
        					        <svg xmlns="http://www.w3.org/2000/svg" width="8.683" height="8.683" viewBox="0 0 8.683 8.683"><path id="ic_check_circle_24px" d="M6.342,2a4.342,4.342,0,1,0,4.342,4.342A4.343,4.343,0,0,0,6.342,2ZM5.473,8.512,3.3,6.342l.612-.612L5.473,7.284l3.3-3.3.612.617Z" transform="translate(-2 -2)" fill="#868686"/></svg>
        					    </div>    
        		            <?php	}?>
    					
    					</div>
    			</div>
    		</div>
    		<div class="accordion">
    			    <div class="accordion__header">
    				<label for="works_with" class='filter-title'>
    					Work With
    				</label>
    				</div>
    				<div class="accordion__body">
    				<div class='filter-works-with'>
    				<?php
    					$terms = get_terms( array (
    						'hide_empty'	=> false,
    						'taxonomy'	=> 'works-with'
    					) );
    				
                        if ( count ($terms)  > 0 ) {
    						foreach ( $terms as $term) {
    							$image = get_field('logo', $term);
    							$checked  = ( isset($_GET['works_with']) && is_array($_GET['works_with']) && in_array($term->slug, $_GET['works_with']) ) ? 'checked="checked"' : '';
                    ?>
    					<label for="works_with_<?php echo $term->slug; ?>" class="workswith-item <?php echo !empty($checked) ? 'checked' : '' ?>">
    					    <div class="multiple-card">
        						<div class="multiple-title">
            						<img src="<?php echo $image; ?>" class='img-fluid' alt="<?php  echo $term->name; ?>">
            						<input type="checkbox" id="works_with_<?php echo $term->slug; ?>" name="works_with[]" value="<?php echo $term->slug ?>" <?php echo $checked ?>>
            						<span><?php echo $term->name ?></span>
        						</div>
        						<svg xmlns="http://www.w3.org/2000/svg" width="8.683" height="8.683" viewBox="0 0 8.683 8.683"><path id="ic_check_circle_24px" d="M6.342,2a4.342,4.342,0,1,0,4.342,4.342A4.343,4.343,0,0,0,6.342,2ZM5.473,8.512,3.3,6.342l.612-.612L5.473,7.284l3.3-3.3.612.617Z" transform="translate(-2 -2)" fill="#868686"/></svg>
    						</div>
    					</label>
    					
    					<?php } ?>
                    <?php } else  { ?>
                        N/A
                    <?php } ?>
    				</div>
    			</div>
    		</div>
    		<div class="accordion">
    			    <div class="accordion__header">
    				<label for="Logs_Policy" class='filter-title'>
    					Logs Policy
    				</label>
    				</div>
    				<div class="accordion__body">
    				<select name="logs_policy" id="logs_policy" class='form-control'>
    					<option value="">Select</option>
                        <option value="yes" <?php echo ( isset($_GET['logs_policy']) && $_GET['logs_policy'] == 'yes') ? 'selected="selected"' : ''; ?>>Yes</option>
                        <option value="no" <?php echo ( isset($_GET['logs_policy']) && $_GET['logs_policy'] == 'no') ? 'selected="selected"' : ''; ?>>No</option>
    
    				</select>
    			</div>
    		</div>
    		<div class="accordion">
    			    <div class="accordion__header">
    				<label for="protocols" class='filter-title'>
    					Protocols
    				</label>
    				</div>
    				<div class="accordion__body">
    				<select name="protocols[]" id="protocols" class='form-control select2-multiple' multiple="multiple" data-placeholder="Select Protocols">
    					<option></option>
    					<?php 
    						$terms = get_terms( array (
    							'hide_empty'	=> false,
    							'taxonomy'	=> 'protocols'
    						) );
    						foreach ( $terms as $term ):
    							$selected = "";
    							if ( isset($_GET['protocols'])  && is_array($_GET['protocols']) && in_array($term->slug, $_GET['protocols']) ) {
    								$selected = 'selected="selected"';
    							}
    					?>
    					<option value="<?php echo $term->slug ?>" <?php echo $selected; ?>> <?php echo $term->name; ?> </option>
    					<?php endforeach; ?>
    				</select>
    				    <div class="protocols-main">
        					<?php foreach ( $terms as $term ) { ?>
        					    <div class="multiple-card" data-title="<?php echo $term->slug ?>">
        					        <div class="multiple-title">
            					        <span><?php echo $term->name ?></span>
        					        </div>
        					        <svg xmlns="http://www.w3.org/2000/svg" width="8.683" height="8.683" viewBox="0 0 8.683 8.683"><path id="ic_check_circle_24px" d="M6.342,2a4.342,4.342,0,1,0,4.342,4.342A4.343,4.343,0,0,0,6.342,2ZM5.473,8.512,3.3,6.342l.612-.612L5.473,7.284l3.3-3.3.612.617Z" transform="translate(-2 -2)" fill="#868686"/></svg>
        					    </div>    
        		            <?php	}?>
    					</div>
    			</div>
    		</div>
    		<div class="accordion">
    			    <div class="accordion__header">
    				<label for="payment_methods" class='filter-title'>
    					Payment Methods
    				</label>
    				</div>
    				<div class="accordion__body">
    				<select name="payment_methods[]" id="payment_methods" class='form-control select2-multiple' multiple="multiple" data-placeholder="Select Payment Methods">
    				<option></option>
    					<?php 
    						$terms = get_terms( array (
    							'hide_empty'	=> false,
    							'taxonomy'	=> 'payment-methods'
    						) );
    						foreach ( $terms as $term ):
    							$selected = "";
    							if ( isset($_GET['payment_methods'])  && is_array($_GET['payment_methods']) && in_array($term->slug, $_GET['payment_methods']) ) {
    								$selected = 'selected="selected"';
    							}
    					?>
    					<option value="<?php echo $term->slug ?>" <?php echo $selected; ?>> <?php echo $term->name; ?> </option>
    					<?php endforeach; ?>
    				</select>
    				
    				    <div class="payment-main">
    					   
        					<?php foreach ( $terms as $term ) {
        					    $image = get_field('logo', $term); ?>
        					    <div class="multiple-card" data-title="<?php echo $term->slug ?>">
        					        <div class="multiple-title">
            					        <img src="<?php echo $image; ?>">
            					        <span><?php echo $term->name ?></span>
        					        </div>
        					        <svg xmlns="http://www.w3.org/2000/svg" width="8.683" height="8.683" viewBox="0 0 8.683 8.683"><path id="ic_check_circle_24px" d="M6.342,2a4.342,4.342,0,1,0,4.342,4.342A4.343,4.343,0,0,0,6.342,2ZM5.473,8.512,3.3,6.342l.612-.612L5.473,7.284l3.3-3.3.612.617Z" transform="translate(-2 -2)" fill="#868686"/></svg>
        					    </div>    
        		            <?php	}?>
    					
    					</div>
    			</div>
    		</div>
    		<div class="accordion">
        		    <div class="accordion__header">
        			<label for="payment_methods" class='filter-title'>
        				Money-back Guarantee
        			</label>
        			</div>
        			<div class="accordion__body">
        			<select name="money_back" id="money_back_guarantee" class='form-control'>
        				<option value="">Select</option>
                        <option value="yes" <?php echo ( isset($_GET['money_back']) && $_GET['money_back'] == 'yes') ? 'selected="selected"' : ''; ?>>Yes</option>
                        <option value="no" <?php echo ( isset($_GET['money_back']) && $_GET['money_back'] == 'no') ? 'selected="selected"' : ''; ?>>No</option>
        
        			</select>
        		</div>
        
        		<div class="apply-filters">
        			<button type="submit" class="btn btn-success btn-block"> APPLY FILTERS </button>
        		</div>
    		</div>
		</div>
	</form>
</aside>
</div>



<!-- Modal -->
