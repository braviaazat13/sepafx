jQuery(function($){
  'use strict';

  //mobile nav
  $('.main-nav__mobile__button').click(function(){
    $(this).toggleClass('main-nav__mobile__button--open');
    $(this).toggleClass('main-nav__mobile__button--close');
    $('.main-nav__mobile__wrapper').toggleClass('visually-hidden');
    $('.main-nav__mobile__socials').toggleClass('visually-hidden');
    $('.main-nav').toggleClass('bc-main');
    $('.main-nav').toggleClass('full-height');
  })

  //slider

  $('.carousel').slick({
    dots: true,
    infinite: true,
    arrows: false,
    slidesToShow: 1,
    responsive: true,
    adaptiveHeight: true,
    // autoplay: true,
    autoplaySpeed: 20000,
  });

  //hide load more block

  $('.alm-load-more-btn').on('click', function() {
    setTimeout(function() {
      if ($('.alm-load-more-btn').hasClass('done')) {
        $('.alm-btn-wrap').hide();
      }
    }, 1000);
  });

  //delete table inline styles 

  $('td,th,tr,table').removeAttr('style');
  $('td,th,tr,table').removeAttr('width');
  $('td,th,tr,table').removeAttr('height');
});
