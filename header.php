<!DOCTYPE html>
<html lang="en">

<head>
  <!-- META -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- LINK -->
  <!-- fonts -->


  <!-- styles -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style.css"> <!-- css -->
 <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri()?>/assets/svg/favicon.svg">


	<?php wp_head()?>
</head>

<body <?php body_class(); ?>>
  <header>
    <div class="container">
      <div class="header-main">
		<div class="mobile-hamburger">
			<div class="hamburger-main">
				<span class="line"></span>	
				<span class="line"></span>	
				<span class="line"></span>	
			</div>
		</div>
        <div class="header-logo">
			<a href="/">
          		<svg xmlns="http://www.w3.org/2000/svg" width="243" height="23" viewBox="0 0 163 15" fill="none" style="max-width: 100%;">
<path d="M61.5133 1.74046C60.3469 2.90688 59.7637 4.30839 59.7637 5.94951V14.8875H77.6307V5.94951H67.2143V8.92884H74.6513V11.9082H62.743V5.94951C62.743 5.13121 63.0324 4.43045 63.6201 3.84724C64.2033 3.26403 64.904 2.97469 65.7223 2.97469H77.6307V0.00439453H65.7223C64.0767 0.00439453 62.6752 0.583087 61.5133 1.74046Z" fill="#121630"></path>
<path d="M94.7011 11.9083H85.7722C84.9539 11.9083 84.2486 11.619 83.6699 11.0312C83.0867 10.448 82.7928 9.74727 82.7928 8.92897V0H79.8135V8.92897C79.8135 10.5746 80.3967 11.9761 81.5631 13.138C82.7205 14.3044 84.1265 14.8876 85.7722 14.8876H97.6805V0H94.7011V11.9083Z" fill="#121630"></path>
<path d="M103.21 0.00439453H100.23V14.892H103.21V0.00439453Z" fill="#121630"></path>
<path d="M117.677 0.00439453H105.76V14.892H117.677C119.314 14.892 120.72 14.3088 121.886 13.1424C123.044 11.985 123.627 10.579 123.627 8.93336V5.95403C123.627 4.31743 123.048 2.9114 121.886 1.74498C120.72 0.583085 119.318 0.00439453 117.677 0.00439453ZM120.647 8.92884C120.647 9.74714 120.358 10.4524 119.784 11.0311C119.201 11.6143 118.5 11.9082 117.682 11.9082H108.744V2.97017H117.682C118.5 2.97017 119.201 3.25951 119.784 3.84272C120.358 4.42593 120.647 5.12668 120.647 5.94498V8.92884Z" fill="#121630"></path>
<path d="M142.941 11.9082H125.815V14.8875H142.941V11.9082Z" fill="#121630"></path>
<path d="M142.941 5.94971H125.815V8.92904H142.941V5.94971Z" fill="#121630"></path>
<path d="M162.182 4.86899C162.724 3.81108 162.995 2.68535 162.995 1.48276V0.00439453H148.488H145.133H125.819V2.97469H145.133H148.112H148.402H154.035H159.772C159.46 3.85629 158.927 4.5706 158.167 5.12217C157.389 5.67825 156.521 5.95403 155.563 5.95403H148.402H148.112H145.133V14.892H148.112V8.93336H155.563C156.793 8.93336 157.846 9.3719 158.719 10.2445C159.587 11.1215 160.021 12.1704 160.021 13.4001V14.892H163V13.4001C163 12.2066 162.729 11.0808 162.186 10.0275C161.666 9.00118 160.943 8.13767 160.021 7.44144C160.938 6.74521 161.662 5.89074 162.182 4.86899Z" fill="#121630"></path>
<path d="M15.9591 0.00451851H14.2999L9.96428 11.9128H7.50485L3.16922 0.00451851H0L5.41615 14.8922H12.0394L16.375 2.97482H22.6231H34.5314C34.5314 3.80216 34.242 4.50291 33.6679 5.07708C33.0847 5.66029 32.3839 5.94963 31.5656 5.94963H22.6276H19.6483V14.8876H22.6276V8.92897H31.5656C33.2022 8.92897 34.6082 8.35028 35.7746 7.18838C36.932 6.02197 37.5152 4.61594 37.5152 2.9703V0H17.4601H15.9591V0.00451851Z" fill="#121630"></path>
<path d="M47.5791 0.00439453H39.708V14.8875H42.6874V2.97017H47.5791V0.00439453Z" fill="#121630"></path>
<path d="M57.575 9.91895H54.5957V14.8875H57.575V9.91895Z" fill="#121630"></path>
<path d="M52.4482 8.92893H51.0603C51.0603 7.61784 49.9933 6.54637 48.6777 6.54637V5.15842C50.7574 5.16294 52.4482 6.85379 52.4482 8.92893ZM48.6823 2.62666V4.01461C51.3949 4.01461 53.5966 6.22086 53.5966 8.92893H54.9845C54.9845 5.45681 52.1589 2.62666 48.6823 2.62666ZM56.1916 8.92893H57.5796C57.5796 4.02365 53.5921 0.0361328 48.6868 0.0361328V1.42408C52.8235 1.42408 56.1916 4.79222 56.1916 8.92893Z" fill="url(#paint0_linear_284_10240)"></path>
<defs>
<linearGradient id="paint0_linear_284_10240" x1="46.6147" y1="9.95954" x2="56.8966" y2="1.3168" gradientUnits="userSpaceOnUse">
<stop stop-color="#EE0979"></stop>
<stop offset="1" stop-color="#FF6A00"></stop>
</linearGradient>
</defs>
</svg>
			</a>
        </div>
        <div class="nav-menu">
			<div class="mobile-close">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490 490" style="enable-background:new 0 0 490 490;" xml:space="preserve"><polygon points="11.387,490 245,255.832 478.613,490 489.439,479.174 255.809,244.996 489.439,10.811 478.613,0 245,234.161   11.387,0 0.561,10.811 234.191,244.996 0.561,479.174 "/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
			</div>
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
			?>
        </div>
        <div class="header-search">
			<?php get_search_form(); ?>
          <a class="btn-primary" href="/top-10-vpns/">Top 10 VPN</a>
        </div>
      </div>
    </div>
  </header>