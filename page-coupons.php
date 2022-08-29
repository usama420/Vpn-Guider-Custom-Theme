<?php get_header();?>

  <div class="pageWrapper" id="coupon">
    <div class="page-header">
      <div class="container">
          <h1>Coupon Codes</h1>
          <p>List of all the Coupon codes we've available for use</p>
      </div>
  </div>

  <div class="coupon">
    <div class="container">
        <?php
    	if( have_rows('coupons') ):
    		while ( have_rows('coupons') ) : the_row(); ?>
    
          <div class="coupon-card">
            <div class="coupon-img">
              <img src="<?php the_sub_field('image')?>" alt="">
            </div>
            <div class="discount">
              <h3><?php the_sub_field('%_off'); ?>%</h3>
              <p>OFF</p>
              <span>COUPON CODE</span>
            </div>
            <div class="coupon-info">
              <span><svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" width="19.26" height="19.26" viewBox="0 0 19.26 19.26"><path id="checkmark-circle-2" d="M11.63,2a9.63,9.63,0,1,0,9.63,9.63A9.63,9.63,0,0,0,11.63,2Zm4.141,7.329-4.4,5.778a.966.966,0,0,1-1.522.01L7.5,12.121A.964.964,0,0,1,9.02,10.937l1.57,2,3.64-4.815A.969.969,0,0,1,15.771,9.3Z" transform="translate(-2 -2)" fill="#4caf50"/></svg>
              Verified
              </span>
              <h3>Save <?php the_sub_field('%_off'); ?>% OFF</h3>
              <p>Get an Extra <?php the_sub_field('%_off'); ?>% Off When You Use Promo Code</p>
              <div class="show-code">
                <h2><?php the_sub_field('coupon_code'); ?></h2>
                <a href="#">Show Coupon Code</a>
                <div class="copied-alert">Click to Copy Code</div>
              </div>
            </div>
          </div>
          
      	<?php	endwhile;
    		else :
    		endif;
    	?>
    </div>
  </div>
</div>

<?php get_footer(); ?>