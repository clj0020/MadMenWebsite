$(document).ready(function() {
  // Optimalisation: Store the references outside the event handler:
  var $window = $(window);
  var $mobile = $(".mobile");
  var $desktop = $(".desktop");



  function checkWidth() {
    var windowsize = $window.width();

    if (windowsize < 560) {

    }
    else {

    }
  }

  // Execute on load
  checkWidth();

  // Bind event listener
  $(window).resize(checkWidth);


  //Scrolls to the selected menu item on the page
  $(function() {
    $('a[href*=\\#]:not([href=\\#])').click(function() {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });

  // parallax
  (function($) {

    $.fn.parallax = function(options) {

      var windowHeight = $(window).height();

      // Establish default settings
      var settings = $.extend({
        speed        : 0.15
      }, options);

      // Iterate over each object in collection
      return this.each( function() {

        // Save a reference to the element
        var $this = $(this);

        // Set up Scroll Handler
        $(document).scroll(function(){

          var scrollTop = $(window).scrollTop();
          var offset = $this.offset().top;
          var height = $this.outerHeight();

          // Check if above or below viewport
          if (offset + height <= scrollTop || offset >= scrollTop + windowHeight) {
            return;
          }

          var yBgPosition = Math.round((offset - scrollTop) * settings.speed);

          // Apply the Y Background Position to Set the Parallax Effect
          $this.css('background-position', 'center ' + yBgPosition + 'px');

        });
      });
    }
  }(jQuery));

  $('.jumbo, .roots-in-auburn').parallax({
    speed :	0.15
  });




  function adjustComputerMargin() {
    var $this = $(".desktop");
    $this.css('margin-top', (($(".lead").height() - $(".desktop").height()) / 2) - 10);
  }

  function adjustIphoneMargin() {
    var $this = $(".mobile");
    $this.css('margin-top', (($(".lead").height() - $(".mobile").height()) / 2) - 50);
  }

  function centerMobileInputText() {
    var $googleContent = $(".iphone .google-content");
    var $googleInput = $(".iphone .google-content input");

    $googleInput.css('left', (($($googleContent).width() - $($googleInput).width()) / 2) - 2);
  }

  function centerDesktopInputText() {
    var $googleContent = $(".desktop .google-content");
    var $googleInput = $(".desktop .google-content input");

    $googleInput.css('left', (($($googleContent).width() - $($googleInput).width()) / 2) - 2);
  }



  Date.prototype.getRealYear = function() {
    if(this.getFullYear)
    return this.getFullYear();
    else
    return this.getYear() + 1900;
  };

  Date.prototype.getMonthName = function(lang) {
    lang = lang && (lang in Date.locale) ? lang : 'en';
    return Date.locale[lang].month_names[this.getMonth()];
  };

  Date.locale = {
    en: {
      month_names: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
      month_names_short: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    }
  };

});
