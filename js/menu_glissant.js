var positionElementInPage = $('#menu2').offset().top;
$(window).scroll(
  function() {
    if ($(window).scrollTop() >= positionElementInPage) {
      // fixed
      $('#menu2').addClass("floatable");
    } else {
      // relative
      $('#menu2').removeClass("floatable");
    }
  }
);
