$(document).ready(function(){
  /* 1. Preloader */
  $(window).on('load', function () {
    $('#preloader-active').delay(450).fadeOut('slow');
    $('body').delay(450).css({
      'overflow': 'visible'
    });
  });
  
 window.call_ajax_loader = function () {
    $('body').append('<div class="ajax-loader-container" ><div class="ajax-loader"><div></div><div></div><div></div></div></div>')
 }

 window.end_ajax_loader = function () {
   $('.ajax-loader-container').remove()
 }

});