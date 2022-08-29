<?php get_header(); ?>

  <div class="pageWrapper" id="single-streaming">
    <section class="streaming-head">
      <div class="container--small">
          <div class="streaming-head-main">
            <div class="streaming-links">
              <div class="streaming-img">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                <div class="user-rating">
                  <span>User Ratings</span>
                  <strong><?php the_field('user_rating')?>/5</strong>
                </div>
              </div>
              <div class="streaming-title">
                  <h1><?php the_title()?></h1>
                  <span>Updated <?php echo get_the_date();?></span>
                  
            <?php
            if( have_rows('visit_link_buttons') ):
                $i = 0;
                while ( have_rows('visit_link_buttons') ) : the_row(); $i++;?>
                
                  <a href="<?php the_sub_field('button_link');?>">Visit Link #<?php echo $i;?></a>
                  
        <?php endwhile;
                else :
                endif;
            ?>
              </div>
            </div>
            <div class="streaming-info">
              <div class="streaming-highlights">
                <h2>Highlights </h2>
                <ul class="highlights">
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
                <ul class="lowlights">
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
              <div class="streaming-features">
                <div class="streaming-score">
                  <span>Overall Score</span>
                  <strong><?php the_field('overall_score'); ?></strong>
                </div>
                <div class="features-main">
                  <div class="single-feature">
                    <svg width="34" height="35" viewBox="0 0 34 35" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.6758 0.40918C17.9218 0.40918 19.0771 0.872368 20.0035 1.64858H20.0087C20.6492 2.18415 21.1779 2.86698 21.5586 3.65034L27.7549 15.617L27.7924 15.7129L32.5356 24.8461C33.0404 25.7898 33.3059 26.8733 33.3059 27.9799C33.3059 28.8473 33.1435 29.6767 32.851 30.4286L32.8562 30.4529C32.635 31.0106 32.3388 31.5278 31.9777 31.9868C31.5656 32.5207 31.0741 32.9723 30.5246 33.3221C29.7044 33.8513 28.7744 34.1351 27.8257 34.1457H27.733C26.5316 34.1469 25.3629 33.7116 24.4054 32.9063H24.4002C23.7596 32.3707 23.2309 31.6879 22.8503 30.9045L16.654 18.9379L16.6165 18.842L11.8504 9.66717C11.3589 8.72803 11.1006 7.66104 11.102 6.57501C11.102 5.9247 11.1936 5.29402 11.3632 4.70378L11.3726 4.66681L11.3892 4.61946C11.46 4.3792 11.5516 4.10198 11.5516 4.10198C11.77 3.55114 12.0624 3.04019 12.4187 2.58651L12.5061 2.47216L12.5269 2.4479V2.44213H12.5321L12.5436 2.42364L12.555 2.41902C12.9395 1.94937 13.3876 1.54913 13.8832 1.23275C14.7034 0.703585 15.6334 0.419803 16.5822 0.40918H16.6758ZM5.56244 34.1468H5.48022C4.53158 34.1354 3.60176 33.8517 2.78123 33.3233C2.22749 32.9733 1.74036 32.5182 1.32818 31.988C0.967052 31.529 0.670843 31.0118 0.449679 30.454L0.454883 30.4298C0.152731 29.6571 -0.00213349 28.8233 2.21993e-05 27.981C2.21993e-05 26.8317 0.282099 25.7621 0.770268 24.8473L5.51352 15.714L5.55099 15.6182L9.76861 7.47829C9.87166 8.4705 10.1475 9.44539 10.593 10.3348L10.6731 10.4861L15.3571 19.5039V19.4865L15.4497 19.7083L15.8504 20.4903L10.4556 30.9045C10.0749 31.6878 9.54621 32.3707 8.90573 32.9063H8.90052C7.94324 33.712 6.77435 34.1474 5.57285 34.1457L5.56244 34.1468Z" fill="#FF6A00"/></svg>
                    <div class="single-feature-info">
                      <span>Ads</span>
                      <strong><?php the_field('ads')?></strong>
                    </div>
                  </div>

                  <div class="single-feature">
                    <svg width="30" height="33" viewBox="0 0 30 33" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M25.9046 0.40918H11.0631C9.02959 0.40918 7.4013 2.1556 7.4013 4.33863V20.2549C7.4013 22.4379 9.06659 24.224 11.102 24.224H25.9046C27.9399 24.224 29.6052 22.4379 29.6052 20.2549V4.37832C29.6052 2.19529 27.9399 0.40918 25.9046 0.40918ZM25.9046 20.2549H11.102V4.37832H25.9046V20.2549ZM3.70065 16.2857H0V28.1932C0 30.3762 1.66529 32.1623 3.70065 32.1623H14.8026V28.1932H3.70065V16.2857Z" fill="#FF6A00"/></svg>
                    <div class="single-feature-info">
                      <span>Popup Ads</span>
                      <strong><?php the_field('popup_ads')?></strong>
                    </div>
                  </div>

                  <div class="single-feature">
                    <svg width="38" height="34" viewBox="0 0 38 34" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_572_4695)"><path d="M34.5399 0.00031165H11.2681C10.4199 0.00031165 9.75586 0.681046 9.75586 1.55124V6.80907H12.7802V3.13995H33.0279V26.4408H17.169V31.6987C17.169 32.3417 17.0217 32.9468 16.7633 33.4765H34.54C35.3881 33.4765 36.0522 32.7957 36.0522 31.9256L36.0519 1.55119C36.0519 0.680978 35.3881 0.000244141 34.5397 0.000244141L34.5399 0.00031165ZM22.8855 31.4338C22.0741 31.4338 21.4105 30.753 21.4105 29.9208C21.4105 29.0887 22.0741 28.408 22.8855 28.408C23.697 28.408 24.3606 29.0887 24.3606 29.9208C24.3609 30.753 23.697 31.4338 22.8855 31.4338Z" fill="#FF6A00"/><path d="M13.3339 8.9646H2.74904C1.7902 8.9646 1.01562 9.75908 1.01562 10.7424V31.698C1.01562 32.6815 1.79025 33.4758 2.74904 33.4758H13.3339C14.2927 33.4758 15.0673 32.6815 15.0673 31.698V10.7424C15.0673 9.75901 14.2929 8.9646 13.3339 8.9646ZM6.58465 10.2506H9.46136C9.6826 10.2506 9.86706 10.4398 9.86706 10.6667C9.86706 10.8936 9.6826 11.0828 9.46136 11.0828H6.58465C6.36341 11.0828 6.17895 10.8936 6.17895 10.6667C6.17895 10.4398 6.36341 10.2506 6.58465 10.2506ZM8.02301 32.1519C7.39607 32.1519 6.87976 31.6224 6.87976 30.9794C6.87976 30.3364 7.39608 29.8069 8.02301 29.8069C8.64994 29.8069 9.16625 30.3364 9.16625 30.9794C9.16651 31.6224 8.65019 32.1519 8.02301 32.1519ZM13.4078 28.5205H2.63852V12.4066H13.4446V28.5205H13.4078Z" fill="#FF6A00"/></g><defs><clipPath id="clip0_572_4695"><rect width="37.0065" height="33.7377" fill="white"/></clipPath></defs></svg>
                    <div class="single-feature-info">
                      <span>Mobile friendly</span>
                      <strong><?php the_field('mobile_friendly')?></strong>
                    </div>
                  </div>

                  <div class="single-feature">
                    <svg width="34" height="40" viewBox="0 0 34 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22.1941 32.4512H10.9094C10.7754 31.9191 10.5753 31.4088 10.3144 30.934L24.94 15.2473C25.9408 15.8805 27.102 16.1601 28.2592 16.0466C29.4163 15.933 30.5109 15.432 31.3879 14.6144C32.265 13.7968 32.8801 12.7042 33.1462 11.491C33.4123 10.2778 33.316 9.00558 32.8708 7.85437C32.4257 6.70315 31.6542 5.73125 30.6656 5.07621C29.6771 4.42116 28.5215 4.11616 27.3624 4.20435C26.2033 4.29255 25.0995 4.76947 24.207 5.56764C23.3146 6.36581 22.6788 7.44479 22.3896 8.65188H13.873V11.6268H22.3896C22.519 12.1596 22.7174 12.6703 22.979 13.144L8.35341 28.8307C7.35259 28.1975 6.19142 27.9179 5.03426 28.0315C3.8771 28.145 2.78255 28.6461 1.9055 29.4636C1.02846 30.2812 0.413352 31.3739 0.147226 32.587C-0.118899 33.8002 -0.0225612 35.0724 0.422607 36.2236C0.867775 37.3749 1.63923 38.3468 2.62778 39.0018C3.61634 39.6568 4.77193 39.9619 5.93101 39.8737C7.09009 39.7855 8.19396 39.3085 9.0864 38.5104C9.97883 37.7122 10.6146 36.6332 10.9038 35.4261H22.1941V39.8885H33.2888V27.9888H22.1941V32.4512ZM27.7414 7.16442C28.29 7.16442 28.8263 7.3389 29.2824 7.66578C29.7385 7.99267 30.094 8.45729 30.304 9.00089C30.5139 9.54448 30.5688 10.1426 30.4618 10.7197C30.3548 11.2968 30.0906 11.8269 29.7027 12.2429C29.3148 12.659 28.8206 12.9423 28.2826 13.0571C27.7445 13.1719 27.1868 13.113 26.68 12.8878C26.1732 12.6626 25.74 12.2813 25.4352 11.7921C25.1304 11.3029 24.9678 10.7277 24.9678 10.1393C24.9685 9.35058 25.2609 8.59436 25.781 8.03662C26.301 7.47889 27.006 7.16521 27.7414 7.16442V7.16442ZM5.552 36.9136C5.00341 36.9136 4.46715 36.7391 4.01102 36.4122C3.55489 36.0853 3.19938 35.6207 2.98945 35.0771C2.77952 34.5335 2.72459 33.9354 2.83161 33.3583C2.93863 32.7812 3.2028 32.2511 3.59071 31.8351C3.97861 31.419 4.47284 31.1357 5.01088 31.0209C5.54892 30.9061 6.10661 30.965 6.61344 31.1902C7.12026 31.4154 7.55345 31.7967 7.85823 32.2859C8.163 32.7751 8.32568 33.3503 8.32568 33.9387C8.32494 34.7274 8.03248 35.4837 7.51247 36.0414C6.99247 36.5991 6.2874 36.9128 5.552 36.9136ZM24.9678 30.9638H30.5151V36.9136H24.9678V30.9638ZM7.89992 15.7173C7.16207 15.0194 6.57114 14.161 6.16637 13.1993C5.7616 12.2376 5.55226 11.1945 5.55226 10.1393C5.55226 9.08417 5.7616 8.04108 6.16637 7.07935C6.57114 6.11763 7.16207 5.2593 7.89992 4.56137L9.73609 6.79256C9.29315 7.21132 8.93839 7.72641 8.69539 8.30358C8.45239 8.88075 8.32671 9.50679 8.32671 10.1401C8.32671 10.7734 8.45239 11.3994 8.69539 11.9766C8.93839 12.5538 9.29315 13.0688 9.73609 13.4876L7.89992 15.7173Z" fill="#FF6A00"/><path d="M4.22856 20.1813C2.9002 18.925 1.8363 17.3799 1.10757 15.6487C0.37884 13.9174 0.00195312 12.0397 0.00195312 10.1402C0.00195312 8.2407 0.37884 6.36295 1.10757 4.63172C1.8363 2.90048 2.9002 1.3554 4.22856 0.0991211L6.06475 2.3303C5.03153 3.30741 4.20401 4.50916 3.63719 5.85571C3.07037 7.20226 2.77722 8.66277 2.77722 10.1402C2.77722 11.6176 3.07037 13.0781 3.63719 14.4247C4.20401 15.7712 5.03153 16.973 6.06475 17.9501L4.22856 20.1813Z" fill="#FF6A00"/></svg>
                    <div class="single-feature-info">
                      <span>Streaming Quality</span>
                      <strong><?php the_field('streaming_quality')?></strong>
                    </div>
                  </div>

                  <div class="single-feature">
                    <svg width="26" height="36" viewBox="0 0 26 36" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22.2617 0.0822754C23.1848 0.0821503 24.0735 0.468662 24.7482 1.1637C25.4229 1.85873 25.8333 2.81046 25.8965 3.82653L25.9046 4.10163V31.787C25.9043 32.8051 25.5538 33.7852 24.9239 34.5293C24.294 35.2733 23.4317 35.7259 22.5111 35.7956L22.2617 35.8045H3.64283C2.71977 35.8047 1.83109 35.4182 1.15639 34.7231C0.481686 34.0281 0.0712733 33.0764 0.00809539 32.0603L2.75215e-08 31.787V4.10163C-0.000113368 3.08317 0.350189 2.10263 0.980113 1.35819C1.61004 0.61375 2.47261 0.160916 3.3935 0.0912075L3.64283 0.0822754H22.2617ZM6.07138 8.99989C5.74933 8.99989 5.44048 9.14105 5.21276 9.3923C4.98504 9.64356 4.8571 9.98434 4.8571 10.3397C4.8571 10.695 4.98504 11.0358 5.21276 11.287C5.44048 11.5383 5.74933 11.6795 6.07138 11.6795H19.8332C20.1552 11.6795 20.4641 11.5383 20.6918 11.287C20.9195 11.0358 21.0474 10.695 21.0474 10.3397C21.0474 9.98434 20.9195 9.64356 20.6918 9.3923C20.4641 9.14105 20.1552 8.99989 19.8332 8.99989H6.07138ZM4.8571 17.4852C4.8571 18.2248 5.4011 18.825 6.07138 18.825H19.8332C20.1552 18.825 20.4641 18.6838 20.6918 18.4326C20.9195 18.1813 21.0474 17.8405 21.0474 17.4852C21.0474 17.1299 20.9195 16.7891 20.6918 16.5378C20.4641 16.2866 20.1552 16.1454 19.8332 16.1454H6.07138C5.74933 16.1454 5.44048 16.2866 5.21276 16.5378C4.98504 16.7891 4.8571 17.1299 4.8571 17.4852ZM6.07138 23.2909C5.74933 23.2909 5.44048 23.4321 5.21276 23.6834C4.98504 23.9346 4.8571 24.2754 4.8571 24.6307C4.8571 24.9861 4.98504 25.3268 5.21276 25.5781C5.44048 25.8294 5.74933 25.9705 6.07138 25.9705H19.8332C20.1552 25.9705 20.4641 25.8294 20.6918 25.5781C20.9195 25.3268 21.0474 24.9861 21.0474 24.6307C21.0474 24.2754 20.9195 23.9346 20.6918 23.6834C20.4641 23.4321 20.1552 23.2909 19.8332 23.2909H6.07138Z" fill="#FF6A00"/></svg>
                    <div class="single-feature-info">
                      <span>Page Speed</span>
                      <strong><?php the_field('page_speed')?></strong>
                    </div>
                  </div>

                  <div class="single-feature">
                    <svg width="26" height="37" viewBox="0 0 26 37" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M25.9046 18.5333C25.9046 18.0595 25.734 17.6052 25.4303 17.2703C25.1267 16.9353 24.7149 16.7471 24.2855 16.7471H11.997L15.7208 12.6569C15.8718 12.4904 15.9915 12.2927 16.0732 12.0751C16.1549 11.8575 16.197 11.6243 16.197 11.3888C16.197 11.1533 16.1549 10.9201 16.0732 10.7025C15.9915 10.4849 15.8718 10.2872 15.7208 10.1207C15.5699 9.95412 15.3907 9.82202 15.1934 9.73189C14.9962 9.64177 14.7848 9.59538 14.5713 9.59538C14.3578 9.59538 14.1464 9.64177 13.9492 9.73189C13.752 9.82202 13.5728 9.95412 13.4218 10.1207L6.94566 17.2651C6.79826 17.435 6.68272 17.6353 6.60566 17.8545C6.44373 18.2894 6.44373 18.7771 6.60566 19.212C6.68272 19.4312 6.79826 19.6315 6.94566 19.8014L13.4218 26.9458C13.5723 27.1133 13.7514 27.2461 13.9487 27.3368C14.146 27.4275 14.3576 27.4742 14.5713 27.4742C14.785 27.4742 14.9967 27.4275 15.194 27.3368C15.3912 27.2461 15.5703 27.1133 15.7208 26.9458C15.8726 26.7798 15.993 26.5823 16.0752 26.3646C16.1574 26.1469 16.1997 25.9135 16.1997 25.6777C16.1997 25.4419 16.1574 25.2085 16.0752 24.9908C15.993 24.7732 15.8726 24.5756 15.7208 24.4096L11.997 20.3194H24.2855C24.7149 20.3194 25.1267 20.1312 25.4303 19.7962C25.734 19.4613 25.9046 19.007 25.9046 18.5333ZM21.0474 0.672119H4.8571C3.56892 0.672119 2.3335 1.23666 1.42261 2.24154C0.511729 3.24642 0 4.60934 0 6.03046V31.036C0 32.4572 0.511729 33.8201 1.42261 34.825C2.3335 35.8298 3.56892 36.3944 4.8571 36.3944H21.0474C22.3356 36.3944 23.5711 35.8298 24.4819 34.825C25.3928 33.8201 25.9046 32.4572 25.9046 31.036V25.6777C25.9046 25.204 25.734 24.7497 25.4303 24.4147C25.1267 24.0798 24.7149 23.8916 24.2855 23.8916C23.8561 23.8916 23.4443 24.0798 23.1407 24.4147C22.8371 24.7497 22.6665 25.204 22.6665 25.6777V31.036C22.6665 31.5097 22.4959 31.9641 22.1923 32.299C21.8887 32.634 21.4768 32.8222 21.0474 32.8222H4.8571C4.42771 32.8222 4.0159 32.634 3.71227 32.299C3.40865 31.9641 3.23807 31.5097 3.23807 31.036V6.03046C3.23807 5.55675 3.40865 5.10245 3.71227 4.76749C4.0159 4.43253 4.42771 4.24435 4.8571 4.24435H21.0474C21.4768 4.24435 21.8887 4.43253 22.1923 4.76749C22.4959 5.10245 22.6665 5.55675 22.6665 6.03046V11.3888C22.6665 11.8625 22.8371 12.3168 23.1407 12.6518C23.4443 12.9867 23.8561 13.1749 24.2855 13.1749C24.7149 13.1749 25.1267 12.9867 25.4303 12.6518C25.734 12.3168 25.9046 11.8625 25.9046 11.3888V6.03046C25.9046 4.60934 25.3928 3.24642 24.4819 2.24154C23.5711 1.23666 22.3356 0.672119 21.0474 0.672119Z" fill="#FF6A00"/></svg>
                    <div class="single-feature-info">
                      <span>Sign-Up Required</span>
                      <strong><?php the_field('sign-up_required')?></strong>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>

    <section class="streaming-main">
      <div class="container--small">
          
    <?php
    if( have_rows('streaming_content_cards') ):
        while ( have_rows('streaming_content_cards') ) : the_row(); ?>
        
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
                    <?php the_sub_field('main_content'); ?>
                </div>
            </div>
        </div>

    <?php        endwhile;
        else :
        endif;
    ?>
      </div>
    </section>

    <section class="related-streaming">
      <div class="container--small">
        <div class="section-head">
          <h2>Related <span>Streaming Services</span></h2>
        </div>

        <div class="related-main">
  			<?php 
  			$selectedStreaming = get_field('select_related_streaming');
			$args = array(
				'post_type' => 'streaming',
				'posts_per_page' => '3',
                'post__in' => $selectedStreaming,
			);
			$the_query = new WP_Query( $args ); ?>

			<?php 
				if ( $the_query->have_posts() ) :
					while ( $the_query->have_posts() ) : $the_query->the_post(); 
			?>
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
      </div>
    </section>
  </div>

<?php get_footer(); ?>