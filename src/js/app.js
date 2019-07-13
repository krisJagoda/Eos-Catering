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

  $("a[href^='#']").click(function(e) {
    e.preventDefault();

    var position = $($(this).attr("href")).offset().top;

    $("body, html").animate({
      scrollTop: position
    }, 'slow');
  });

});
