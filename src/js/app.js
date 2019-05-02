$(function() {

  $('.hamburger__menu').click(function() {
    console.log("hey");
    $(this).toggleClass('active');
    $(this).toggleClass('closebtn');
    $('.pushmenu-push').toggleClass('pushmenu-push-toright');
    $('.pushmenu-left').toggleClass('pushmenu-open');
  });

  $('.links__element').each(function() {
    $(this).on('click', function() {
      $('.pushmenu-push').toggleClass('pushmenu-push-toright');
      $('.pushmenu-left').toggleClass('pushmenu-open');
    });
  });



  // $('.hamburger__nav--element').click(function() {
  //
  //   $('.hamburger__menu').toggleClass('.hamburger__nav active');
  //   $('.hamburger__nav').toggleClass('.hamburger__nav active');
  //   $('.hamburger__menu').toggleClass('closebtn');
  // });

  $("a[href^='#']").click(function(e) {
    e.preventDefault();

    var position = $($(this).attr("href")).offset().top;

    $("body, html").animate({
      scrollTop: position
    }, 'slow');
  });






});
