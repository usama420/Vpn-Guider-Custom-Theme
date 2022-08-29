// TOGGLER

$("#toggler").click(function () {
  $("#nav").slideToggle();
});

// *************************************************************************************************** \\

// TABS

// var tab_nav = $('.nav-tab') // tab nav
// var tab_content = $('.content') // tab content

// $(tab_nav).children('li:first-of-type').addClass('active')
// // Dynamic classes
// tab_content.each(function (i) {
//   $(this).attr('id', 'tab-' + i);
// })
// tab_nav.children('li').children('a').each(function (i) {
//   $(this).attr('href', '#tab-' + i)
// })

// // Show first tab
// tab_content.hide();
// tab_content.first().show();

// // Click function
// tab_nav.children('li').children('a').on('click', function (e) {
//   e.preventDefault();
//   tab_nav.children('li').removeClass('active');
//   $(this).parent().addClass('active');
//   var activeTab = $(this).attr('href');

//   $(activeTab).siblings().hide().removeClass("active");
//   $(activeTab).fadeIn().addClass("active")
// });

$('.archive-main .nav-tab a').each(function(){
    if($(this).attr('href') == window.location.pathname){
        $(this).addClass('tab-active');
    }
})

// *************************************************************************************************** \\

// ACCORDION

var $question = $(".accordion__header"); // accordion opener
var $answer = $(".accordion__body"); // accordion content

$answer.hide();
$('#site-sidebar .accordion:first-of-type .accordion__header').addClass("open").next($answer).slideDown();

$question.click(function () {
  $answer.slideUp();
  if ($(this).hasClass("open")) {
    $(this).removeClass("open").next($answer).slideUp();
  } else {
    $question.removeClass("open");
    $(this).addClass("open").next($answer).slideDown();
  }
});
// sticky header

$(window).scroll(function() 
{
 if ($(this).scrollTop() > 1)
 {
  $('header').addClass("sticky_header");
 }
 else
 {
  $('header').removeClass("sticky_header");
 }
});


// *************************************************************************************************** \\

// SUB MENU OPENER

function menuOpener() {
	if ($(window).width() < 992) {
		$('.nav-menu .menu-item-has-children').on('click',function(){
    $(this).children('.sub-menu').toggleClass('sub-menu-open')
})
// 		$('.menu-item').on('click', function() {
// 			$(this).siblings().removeClass('active')
// 			if($(this).hasClass('active')) {
// 				$(this).removeClass('active')
// 			} else if(!$(this).hasClass('active')) {
// 				$(this).addClass('active')
// 			}
// 		})
	} else {}
}

$(window).on('resize', menuOpener)
$(document).ready(menuOpener)

// *************************************************************************************************** \\

// TABLE WRAPPER

$(document).ready(function() {
  $(".formatting table").wrap("<div class='table-container'></div>");
})


var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 50,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
  },
  breakpoints: {
    767: {
      slidesPerView: 2,
      spaceBetween: 50,
    },
    1200: {
      slidesPerView: 3,
      spaceBetween: 50,
    },
  }
});



const slider = jQuery(".related-main");

jQuery(".next").on("click", function () {
  const scrollVal = jQuery(".related-main").width() + 50;
  slider.scrollLeft(slider.scrollLeft() + scrollVal);
});

jQuery(".prev").on("click", function () {
  const scrollVal = jQuery(".related-main").width() + 50;
  slider.scrollLeft(slider.scrollLeft() - scrollVal);
});



// privacy blog slider mobile

const sliderHome = jQuery(".privacy-news .latest-guides-main");
$('.privacy-news .latest-guides-card:first-of-type').addClass('active-slide');


$('.privacy-news .latest-guides-card').each(function(index){
$(this).attr('data-index',index);
})
jQuery(".privacy-news .next").on("click", function () {
  const scrollVal = jQuery(".privacy-news .latest-guides-card").width() + 50;
  sliderHome.scrollLeft(sliderHome.scrollLeft() + scrollVal);

  var activeSlide = +$('.privacy-news .latest-guides-card.active-slide').attr('data-index');
  if($('.privacy-news .latest-guides-card').length - 1 > activeSlide){
  $(`.privacy-news .latest-guides-card[data-index="${activeSlide}"]`).removeClass('active-slide');
  $(`.privacy-news .latest-guides-card[data-index="${activeSlide}"]`).next().addClass('active-slide');
  }
  else{

  }

  $(bullet).each(function(){
    if ($('.active-slide').attr('data-index') === $(this).attr('data-index')) {
          $(this).addClass('active-bullet')
          $(this).prev().removeClass('active-bullet')
  }
  })
});

jQuery(".privacy-news .prev").on("click", function () {
  const scrollVal = jQuery(".privacy-news .latest-guides-card").width() + 50;
  sliderHome.scrollLeft(sliderHome.scrollLeft() - scrollVal);

  var activeSlide = +$('.privacy-news .latest-guides-card.active-slide').attr('data-index');
  if(0 < activeSlide){
  $(`.privacy-news .latest-guides-card[data-index="${activeSlide}"]`).removeClass('active-slide');
  $(`.privacy-news .latest-guides-card[data-index="${activeSlide}"]`).prev().addClass('active-slide');
  }
  else{

  }

  $(bullet).each(function(){
    if ($('.active-slide').attr('data-index') === $(this).attr('data-index')) {
          $(this).addClass('active-bullet')
          $(this).next().removeClass('active-bullet')
  }
  })
});

var cardNo = $('.privacy-news .latest-guides-card');

$(cardNo).each(function(index){
    $('.privacy-news .mobile-slider-pagination').append(`<span class="dot" data-index="${index}"></span>`)
})

var bullet = $('.dot');

$('.privacy-news .dot:first-of-type').addClass('active-bullet');


// filter mobile

$('.compare a.filters').on('click',function(e){
  e.preventDefault();
  $('.compare-filters').toggleClass('filter-active');
  $('.mobile-overlay').toggleClass('filter-active');
})

$('.mobile-overlay').on('click',function(){
  $('.compare-filters').removeClass('filter-active');
  $('.mobile-overlay').removeClass('filter-active');
})


// archive tabs
if($(window).width() < 767){
  $('.archive-main .nav-tab').slideUp();


$('a.mobile-tabs').on('click',function(e){
    e.preventDefault();
    $('.archive-main .nav-tab').slideToggle();
	$(this).toggleClass("active");
})

$('.archive-main .nav-tab a').on('click',function(e){
    $('.archive-main .nav-tab').slideUp();
})
}


// coupon

$('.show-code a').on('click',function(e){
  e.preventDefault();
  $(this).parent('.show-code').addClass('code-shown');

  $('.show-code.code-shown h2').on('click',function(){
    var TempText = document.createElement("input");
    var TextToCopy = $(this).text();

    var TempText = document.createElement("input");
  TempText.value = TextToCopy;
  document.body.appendChild(TempText);
  TempText.select();
  document.execCommand("copy");
  document.body.removeChild(TempText);

  $('.show-code.code-shown .copied-alert').text('Code Copied');
})
})


// dynamic table of content

$(function(){
  var $toc = $('.blog-sidebar').clone();
  $('.blog-main-content').prepend($toc);
});

// Filters operating systems
// operating systems
var osArr = []
$('.operating-systems-main .multiple-card').on('click',function(){
    var item = $(this).attr('data-title');
    if(!osArr.includes(item)){
        osArr.push(item);
        jQuery("#operating_system").val(osArr)
        $(this).addClass('selected-option')
    }
    else{
        var newOs = osArr.filter(val => val !== item);
        osArr = newOs
        jQuery("#operating_system").val(newOs)
        $(this).removeClass('selected-option')
    }
})
// simultaneous connections 
var scArr = []
$('.connections-main .multiple-card').on('click',function(){
    var item = $(this).attr('data-title');
    if(!scArr.includes(item)){
        scArr.push(item);
        jQuery("#connection").val(scArr)
        $(this).addClass('selected-option')
    }
    else{
        var newSc = scArr.filter(val => val !== item);
        scArr = newSc
        jQuery("#connection").val(newSc)
        $(this).removeClass('selected-option')
    }
})

// works with

$('.filter-works-with .multiple-card input[type="checkbox"]').on('click',function(){
    if($(this).is(':checked')){
        $(this).closest('.multiple-card').addClass('selected-option')
    }
    else{
        $(this).closest('.multiple-card').removeClass('selected-option')
    }
})

// protocols

var pArr = []
$('.protocols-main .multiple-card').on('click',function(){
    var item = $(this).attr('data-title');
    if(!pArr.includes(item)){
        pArr.push(item);
        jQuery("#protocols").val(pArr)
        $(this).addClass('selected-option')
    }
    else{
        var newP = pArr.filter(val => val !== item);
        pArr = newP
        jQuery("#protocols").val(newP)
        $(this).removeClass('selected-option')
    }
})

// payment

var payArr = []
$('.payment-main .multiple-card').on('click',function(){
    var item = $(this).attr('data-title');
    if(!payArr.includes(item)){
        payArr.push(item);
        jQuery("#payment_methods").val(payArr)
        $(this).addClass('selected-option')
    }
    else{
        var newPay = payArr.filter(val => val !== item);
        payArr = newPay
        jQuery("#payment_methods").val(newPay)
        $(this).removeClass('selected-option')
    }
})

// VPN For

var vfArr = []
$('.vpn-for-main .multiple-card').on('click',function(){
    var item = $(this).attr('data-title');
    if(!vfArr.includes(item)){
        vfArr.push(item);
        jQuery("#vpn_for").val(vfArr)
        $(this).addClass('selected-option')
    }
    else{
        var newVf = vfArr.filter(val => val !== item);
        vfArr = newVf
        jQuery("#vpn_for").val(newVf)
        $(this).removeClass('selected-option')
    }
})

// header search open

$('.custom-form input[type="image"]').on('click',function(e){
    if(!$('.input-field').hasClass('search-open')){
        e.preventDefault();
        $('.input-field').addClass('search-open')
    }
})

$('.input-field .search-close').on('click',function(){
    $('.input-field').removeClass('search-open')
})

// hamburger

$('.mobile-hamburger .hamburger-main').on('click',function(){
    $('.nav-menu').addClass('menu-open')
})

$('.nav-menu .mobile-close').on('click',function(){
    $('.nav-menu').removeClass('menu-open')
})


// active table of content

$(window).on('scroll',function(){
  var wscroll = $(window).scrollTop();
  $('.blog-content h2, .blog-content h3:not(.blog-sidebar h3)').each(function(i, e){
      const scrollmargin = +getComputedStyle($(this)[0]).scrollMargin.split('px')[0];
      const id = e.getAttribute('id').split('-')[1];
      
      if (wscroll >= $(this).offset().top - scrollmargin - 50 && wscroll <= $(`#toc-${+id + 1}`).offset().top - scrollmargin - 50) {
          $('.blog-content h2, .blog-content h3').each(function(){
              $(this).removeClass('active-toc')    
          })
          
          $(this).addClass('active-toc');

          const hId = $(this).attr('id');

          $('.blog-sidebar li a').each(function(){
              
            if($(this).attr('href').split('/')[4].split('#')[1] == hId){
                $(this).addClass('active-toc');
            } 
              else{
                  $(this).removeClass('active-toc');
              }
          })
      }
  })    
})