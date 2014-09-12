$(function () {
  'use strict';

  $('#header_nav').data('size', 'big');

  $(".chosen-select").chosen();
  $(".chosen-select-limit").chosen({max_selected_options:2});
  $('.chosen-choices').addClass('form-control');

});




$(window).scroll(function () {
  'use strict';
  var $nav = $('#header_nav');
  $('#responsive-menu ul[class!=navbar-right]').attr('small', '');
  if ($('body').scrollTop() > 0  && $(window).width() > 768) {
    // small menu
    if ($nav.data('size') === 'big') {
      $nav.data('size', 'small').stop().animate({
        height: '60px'
      }, 600).addClass('shadow-box');
      $(".header-logo").stop().animate({
        height: '45px'
      }, 600);
      $("ul.nav[class!=navbar-right]").stop().animate({
        fontSize: '1.4em',
        marginTop: '9px'
      }, 600);
      $("body").stop().animate({
        paddingTop: '60px'
      }, 600);
    }
  } else if($(window).width() > 768){
    // big menu
    $('#responsive-menu ul[class!=navbar-right]').removeAttr('small');
    if ($nav.data('size') === 'small') {
      $nav.data('size', 'big').stop().animate({
        height: '140px'
      }, 600).removeClass('shadow-box');
      $(".header-logo").stop().animate({
        height: '120px'
      }, 600);
      $("ul.nav[class!=navbar-right]").stop().animate({
        fontSize: '1.6em',
        marginTop: '40px'
      }, 600);
      $("body").stop().animate({
        paddingTop: '140px'
      }, 600);
    }
  }
});
