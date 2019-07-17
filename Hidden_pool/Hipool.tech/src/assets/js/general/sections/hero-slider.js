


  flag_scroll = true;
	$('.hero-slider-slick').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
    arrows: true,
    prevArrow: '<button type="button" class="slick-prev"><svg version=\"1.1\" id=\"\u0421\u043B\u043E\u0439_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"\n\t viewBox=\"0 0 19 8\" style=\"enable-background:new 0 0 19 8;\" xml:space=\"preserve\">\n<style type=\"text/css\">\n\t.st0{fill:#3A2DB0;}\n</style>\n<path id=\"Shape\" class=\"st0\" d=\"M1,4c0,0.1,0,0.2,0.1,0.2l4,3.7C5.2,8,5.3,8,5.5,8c0.1-0.1,0.2-0.2,0.2-0.3V5.3h13\n\tc0.1,0,0.2,0,0.2-0.1C19,5.2,19,5.1,19,5V3c0-0.1,0-0.2-0.1-0.2c-0.1-0.1-0.1-0.1-0.2-0.1h-13V0.3c0-0.1-0.1-0.2-0.2-0.3\n\tC5.3,0,5.2,0,5.1,0.1l-4,3.6C1,3.8,1,3.9,1,4z\"/>\n</svg></button>',
    nextArrow: '<button type="button" class="slick-next"><svg viewBox=\"0 0 19 8\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">\n<path id=\"Shape\" d=\"M17.8972 3.73002L13.897 0.0838242C13.7859 -0.00644691 13.6644 -0.0238152 13.5324 0.0317559C13.4005 0.0874 13.3344 0.188034 13.3344 0.333949V2.6675H0.333354C0.236077 2.6675 0.156168 2.69869 0.0937374 2.7612C0.0313431 2.82366 0 2.90357 0 3.00078V5.0009C0 5.09807 0.0311972 5.17797 0.0937009 5.24037C0.156278 5.30283 0.236186 5.33403 0.333317 5.33403H13.3344V7.66754C13.3344 7.80664 13.4007 7.90727 13.5325 7.96959C13.6646 8.02538 13.7861 8.00429 13.8972 7.90727L17.8975 4.21918C17.9669 4.14978 18.0015 4.06659 18.0015 3.96928C18.0015 3.87922 17.9667 3.79946 17.8972 3.73002Z\" fill=\"#3A2DB0\"/>\n</svg></button>',
		dots: false,
    infinite:false,
    mobileFirst: true,    
    responsive: [
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 1750,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        }
      },
    ]
  });
  
  if (document.getElementById("fullpage")) { 
    function addActive(id, sectionClass ) {
      if ($(sectionClass).visible(true)) {
        $('#menu li.active').removeClass('active');
        $(id).addClass("active"); 
      } 
    };
    $(window).scroll(function(event) {
      if (flag_scroll) {
        addActive ("#menu-Main", ".main-info-point");
        addActive ("#menu-Project", ".project-info-point");
        addActive ("#menu-Company", ".about-info-point");
        // addActive ("#menu-Team", ".team-info-point");
        addActive ("#menu-Contact", ".contact-point");
      }
    });
  
    //document.getElementById('trailer').play();
    $(".progress-transparent").css("animation", " fill 13s linear 1");
  };
    
  if( window.location.href.indexOf("#") > -1) {
    $(window).scrollTop($(window).scrollTop()+1);
  };

  $('.hero-slider-slick-2').on('beforeChange', function(){
    $(".progress-transparent").css("animation", " none ");
  });

  $('.hero-slider-slick-2').on('afterChange', function(){
    $(".content-person").animate({'opacity':'0'},0);
    $(".progress-transparent").css("animation", " fill 13s linear 1");
  });


  $('.hero-slider-slick-2').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    prevArrow: '<button type="button" class="slick-prev"><svg version=\"1.1\" id=\"\u0421\u043B\u043E\u0439_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"\n\t viewBox=\"0 0 19 8\" style=\"enable-background:new 0 0 19 8;\" xml:space=\"preserve\">\n<style type=\"text/css\">\n\t.st0{fill:#3A2DB0;}\n</style>\n<path id=\"Shape\" class=\"st0\" d=\"M1,4c0,0.1,0,0.2,0.1,0.2l4,3.7C5.2,8,5.3,8,5.5,8c0.1-0.1,0.2-0.2,0.2-0.3V5.3h13\n\tc0.1,0,0.2,0,0.2-0.1C19,5.2,19,5.1,19,5V3c0-0.1,0-0.2-0.1-0.2c-0.1-0.1-0.1-0.1-0.2-0.1h-13V0.3c0-0.1-0.1-0.2-0.2-0.3\n\tC5.3,0,5.2,0,5.1,0.1l-4,3.6C1,3.8,1,3.9,1,4z\"/>\n</svg></button>',
    nextArrow: '<button type="button" class="slick-next"><svg viewBox=\"0 0 19 8\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">\n<path id=\"Shape\" d=\"M17.8972 3.73002L13.897 0.0838242C13.7859 -0.00644691 13.6644 -0.0238152 13.5324 0.0317559C13.4005 0.0874 13.3344 0.188034 13.3344 0.333949V2.6675H0.333354C0.236077 2.6675 0.156168 2.69869 0.0937374 2.7612C0.0313431 2.82366 0 2.90357 0 3.00078V5.0009C0 5.09807 0.0311972 5.17797 0.0937009 5.24037C0.156278 5.30283 0.236186 5.33403 0.333317 5.33403H13.3344V7.66754C13.3344 7.80664 13.4007 7.90727 13.5325 7.96959C13.6646 8.02538 13.7861 8.00429 13.8972 7.90727L17.8975 4.21918C17.9669 4.14978 18.0015 4.06659 18.0015 3.96928C18.0015 3.87922 17.9667 3.79946 17.8972 3.73002Z\" fill=\"#3A2DB0\"/>\n</svg></button>',
    dots: false,
    infinite:true,
    mobileFirst: true,
    autoplay: true,
    pauseOnFocus: false, 
    pauseOnHover: false,
    autoplaySpeed: 13000,
  });
  $('.hero-slider-slick-2').slick("slickNext");
  $('.hero-slider-slick-2').on('afterChange', function(){
    var currentSlide = $('.hero-slider-slick-2').slick('slickCurrentSlide'); 
    if (currentSlide == 0) {
        $(".person-1").animate({'opacity':'1'},0);
        document.getElementById('myvid-1').play();
        document.getElementById('myvid-1').currentTime = 0;
      }
    if (currentSlide == 1) {
      $(".person-2").animate({'opacity':'1'},0);
      document.getElementById('myvid-2').play();
      document.getElementById('myvid-2').currentTime = 0;
      $("#myvid-2").currentTime = 0;
    }
    if (currentSlide == 2) {
      $(".person-3").animate({'opacity':'1'},0);
      document.getElementById('myvid-3').play();
      document.getElementById('myvid-3').currentTime = 0;
    }
    if (currentSlide == 3) {
      
      $(".person-4").animate({'opacity':'1'},0);
      document.getElementById('myvid-4').play();
      document.getElementById('myvid-4').currentTime = 0;
    }
  })
  // $('#fullpage').fullpage ({
  //   sectionSelector: '.section-slide',
  //   scrollingSpeed: 1000,
  //   menu: '#menu',
  //   anchors:['Main', 'Project', 'Company', 'Team', 'Contact'],
  //   licenseKey: 'OPEN-SOURCE-GPLV3-LICENSE',
  //   paddingTop: '70px',
  //   paddingBottom: '70px',
  // });




  
  $(".youtube-btn").click(function(){
    // $( ".youtube-modal" ).fadeIn( "slow" );
    // var vi = jQuery("#existing-iframe-example");
    // vi.attr("src", vi.data("autoplay-src") );
    // $('.wrapper-opacity-2').addClass('show');
    scrollTo (event, ".project-info" );
    if (currentWidth < 767) {
      $('.toggle-menu').click();
    }

  });
  
 $(".youtube-close").click(function() {
  $( ".youtube-modal" ).fadeOut( "slow" );
  $('.wrapper-opacity-2').removeClass('show');
  $("#existing-iframe-example")[0].src += "231r4afw";
});

$(document).keydown(function(event)  { 
  if (event.keyCode == 27) { 
    $( ".youtube-modal" ).fadeOut( "slow" );
    $('.wrapper-opacity-2').removeClass('show');
    $("#existing-iframe-example")[0].src += "231r4afw";
  } 
});
  
  if (document.getElementById("fullpage")) {

  function scrollTo (event, sectionClass ) {
    event.preventDefault();
    flag_scroll = false;
    $('html, body').animate({
        scrollTop: $(sectionClass).offset().top
    }, 1000);
    if (currentWidth < 767) {
      $('.toggle-menu').click();
    }
    setTimeout(function() {flag_scroll = true;},900);
  };

  $("#menu-Main").click(function (event){
    scrollTo (event, ".main-info" );
  }); 
  $("#menu-Project").click(function (event){
    scrollTo (event, ".project-info" );
  }); 
  $("#menu-Company").click(function (event){
    scrollTo (event, ".about-info" );
  }); 
  $("#menu-Team").click(function (event){
    scrollTo (event, ".team-info" );
  }); 
  $("#menu-Contact").click(function (event){
    scrollTo (event, ".style-color-white" );
  }); 
  $("#link-contact").click(function (){
    scrollTo (event, ".style-color-white" );
  }); 
  $("#contact-link-2").click(function (){
    scrollTo (event, ".style-color-white" );
  }); 

}
