/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */

jQuery(function($){
  "use strict";

  jQuery('.search-box button').click(function(){
    jQuery(".search_outer").toggle();
  });

  jQuery('.search_inner input.search-field').on('keydown', function (e) {
    if (jQuery("this:focus") && (e.which === 9)) {
      e.preventDefault();
      jQuery(this).blur();
      jQuery('.search_inner button.search-submit').focus();
    }
  });

  jQuery('.search_inner .search-submit').on('keydown', function (e) {
    if (jQuery("this:focus") && (e.which === 9)) {
      e.preventDefault();
      jQuery(this).blur();
      jQuery('button.search_btn').focus();
    }
  });
});

// ===== Mobile responsive Menu ====
function automobile_hub_menu_open_nav() {
  jQuery(".sidenav").addClass('open');
}
function automobile_hub_menu_close_nav() {
  jQuery(".sidenav").removeClass('open');
}

// ===== Scroll to Top ====
jQuery(function($){
  $(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {
      $('#return-to-top').fadeIn(200);
    } else {
      $('#return-to-top').fadeOut(200);
    }
  });
  $('#return-to-top').click(function() {
    $('body,html').animate({
      scrollTop : 0
    }, 500);
  });
});

jQuery(function($){
	$('.gb_toggle').click(function () {
        automobile_hub_Keyboard_loop($('.side_gb_nav'));
    });
});

jQuery('document').ready(function($){
  setTimeout(function () {
    jQuery(".loader").fadeOut("slow");
  },1000);
});

jQuery(window).scroll(function() {
  var data_sticky = jQuery('.menubar').attr('data-sticky');

  if (data_sticky == "true") {
    if (jQuery(this).scrollTop() > 1){
      jQuery('.menubar').addClass("stick_head");
    } else {
      jQuery('.menubar').removeClass("stick_head");
    }
  }
});
