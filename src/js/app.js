$(function() {
  $('.navTrigger').click(function() {
    $(this).toggleClass('active');
  });
  //Smooth Scrolling Menu
  (function() {

    var menu = $('.menu');
    var links = menu.find('a');


    links.on('click', function(e) {
      var target = $($(this).attr('href'));

      if (target.length) {
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 2000);
      }
    });
  })();



  // Get the form.
  var form = $('#form');
  // Get the messages div.
  var formMessages = $('#form-messages');

  $(form).on('submit', function(e) {
    e.preventDefault();
    // Serialize the form data.
    var formData = $(form).serialize();

    // Submit the form using AJAX.
    $.ajax({
        type: 'POST',
        url: $(form).attr('action'),
        data: formData
      })
      .done(function(response) {
        //Fade out the form and return the success message to the user
        $('.form-div').fadeOut('slow', function() {
          $('.form-div').html(response).removeClass('error').addClass('success').fadeIn('slow');
        });



      })
      .fail(function(data) {
        // Make sure that the formMessages div has the 'error' class.
        $(formMessages).removeClass('success').addClass('error');

        // Set the message text.
        if (data.responseText !== '') {
          $(formMessages).text(data.responseText);
        } else {
          $(formMessages).text('An error occured and your message could not be sent.');
        }
      });


  });









});
