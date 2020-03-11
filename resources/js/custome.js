particlesJS.load('particles-js', 'assets/particles.json', function() {
    console.log('callback - particles.js config loaded');
  });

  //Update Logo when position sticky is active
  $(window).scroll(function() {
      var distance = $('#main-menu ').offset().top;

    //   Checking if scroll is at the top
      if ($(this).scrollTop() >= distance) {
          $('#main-menu #text_logo').show();
      } else {
        $('#main-menu #text_logo').hide();
      }
  });

  $("#side_menu_open").click(() => {
    $("#side_menu").removeClass("hide");
    $("#overlay").removeClass("hide");
  });

  $("#side_menu_close").click(() => {
    $("#side_menu").addClass("hide");
    $("#overlay").addClass("hide");
  });