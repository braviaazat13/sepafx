/**
 * Section: jQuery
 */
var currentWidth;
updateWindowSize();
updateAdvantagesState()



window.onresize = function(event) {
  updateWindowSize();
  updateAdvantagesState()
}

function updateWindowSize() {
  if (document.body && document.body.offsetWidth) {
    currentWidth = document.body.offsetWidth;
  }
  if (document.compatMode == 'CSS1Compat' &&
  document.documentElement &&
  document.documentElement.offsetWidth ) {
    currentWidth = document.documentElement.offsetWidth;
  }
  if (window.innerWidth) {
    currentWidth = window.innerWidth;
  }
}

function updateAdvantagesState() {
  if (currentWidth > 1365) {
    // fullpage_api.setAutoScrolling(false);
    // fullpage_api.setFitToSection(false);
    // fullpage_api.setResponsive(true);
    function moveItem(className, selector, x, y, context, xpos, ypos) {
      var elem = $(selector);
      if ( $(context).hasClass(className) ) {
        elem.css('top', y + (ypos / 50) + "px");
        elem.css('left', x + (xpos / 80) + "px");
      };   
    }
  
    $('.item').mousemove(function(e) {
      var change;
      var xpos=e.clientX;var ypos=e.clientY;var left= change*20;
      var xpos=xpos*2;ypos=ypos*2;
      moveItem('Batiskaf', '.batiskaf-bcg', -130, -161, this, xpos, ypos);
      moveItem('bottle', '.bottle-bcg', -60, -40, this, xpos, ypos);
      moveItem('rap', '.rap-bcg', -190, 370, this, xpos, ypos);
      moveItem('istok', '.istok-bcg', -50, 50, this, xpos, ypos);    
    });
    
  }

}
window.onload = function() {
	$('.preloader_letter').css("display", "none");
  if (currentWidth < 1368) {
    $('#preloader').animate({'height':'5%'},1000, function() {
      $(this).fadeOut(300);
        })
    }
    else {
      $('#preloader').animate({'width':'28%'},1000, function() {
          $(this).fadeOut(300);
        });
    };
}
var isSafari = navigator.vendor && navigator.vendor.indexOf('Apple') > -1 &&
               navigator.userAgent && !navigator.userAgent.match('CriOS');
if (isSafari && currentWidth > 1365){
$(".header-inner").css("height", "100vh");
$(".main-info").css("height", "100vh");
$(".khv-image:hover svg").css({"width": "330px" , "height": "245px"});
  };



var random = Math.floor(Math.random() * $('.error-item').length);
$('.error-item').hide().eq(random).show();
var submit = document.querySelector(".submit-button");
var check = document.querySelector(".form-send");
var form = document.querySelector(".contact-field");
function call() {
	var msg = $("#formx").serialize(); //возвращает форму для url строки
	$.ajax({
		type: "POST",
		url: "/wp-content/themes/hipool/assets/php/form.php",
		data: msg, //подготоваливает данные для отправки на сервер
		success: function() {
			$(form).fadeOut(0); //делает элемент прозрачным после чего display:none
			$(check).fadeIn(0); //наоборот
		},
		error: function(xhr, str) {
			alert("Возникла ошибка: " + xhr.responseCode);
		}
	});
}

$(function() {
	
	//@@include('general/global/global.js')
	//@@include('general/ui/ui.js')
	//@@include('general/components/components.js')
	//@@include('general/sections/sections.js')
	//@@include('general/components/animation.js')
	
});


$(document).ready(function() {
	$('#error-page').fadeIn(1000);
});









