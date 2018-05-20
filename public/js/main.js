jQuery(document).ready(function() {

  var btn = $('#back-to-top-button');

  btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '0');
  });

  showButton = function() {
    if ($(window).scrollTop() > 300) {
      btn.addClass('show');
    } else {
      btn.removeClass('show');
    }
  }

  $(window).scroll(function() {
    showButton();
  });

  showButton();
});
