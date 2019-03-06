$(function() {
  $('.hamburger__menu').click(function() {
    $(this).toggleClass('active');
    $('.hamburger__nav').toggleClass('.hamburger__nav active');
    $(this).toggleClass('closebtn');
  });
  $("a[href^='#']").click(function(e) {
    e.preventDefault();

    var position = $($(this).attr("href")).offset().top;

    $("body, html").animate({
      scrollTop: position
    }, 'slow');
  });




});
