particlesJS.load('particles-js', 'assets/particles.json', function() {
    console.log('callback - particles.js config loaded');
  });

  //Update Logo when position sticky is active
  $(window).scroll(function() {
      var distance = $('#navbar_wrapper').offset().top;

      if ($(this).scrollTop() >= distance) {
          $('#navbar_wrapper').addClass("modifications_at_sticky");
          $('#navbar_wrapper').removeClass("navbar-dark");
          $('#navbar_wrapper').addClass("navbar-light");
          $('#navbar_wrapper').addClass("py-5");
      } else {
          $('#navbar_wrapper').removeClass("modifications_at_sticky");
          $('#navbar_wrapper').removeClass("navbar-light");
          $('#navbar_wrapper').addClass("navbar-dark");
          $('#navbar_wrapper').removeClass("py-5");
      }
  });