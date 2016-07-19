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

  // Closes the sidebar menu
  $("#menu-close").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
  });

  // Opens the sidebar menu
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
  });


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

  // $.scrollify({
  //   section : ".section",
  //   easing: "easeOutExpo",
  //   setHeights: true,
  //   scrollSpeed: 1100,
  //   scrollBars: false,
  //   after: function(i, sections) {
  //     $id = $(sections[i]).attr("id");
  //
  //     switch ($id) {
  //       case "bring-to-the-future":
  //       //                            // Grab the current date
  //       //                            var currentDate = new Date();
  //       //
  //       //                            // Set some date in the future. In this case, it's always Jan 1
  //       //                            var futureDate  = new Date(currentDate.getFullYear() + 22, 0, 1);
  //       //
  //       //                            // Calculate the difference in seconds between the future and current date
  //       //                            var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;
  //       //
  //       //                            // Instantiate a coutdown FlipClock
  //       //                            clock = $('.countdown').FlipClock({
  //       //                                clockFace: 'YearlyCounter'
  //       //                            });
  //
  //
  //       var date = new Date("1990-01-05");
  //       var today = new Date.today();
  //       var addYearsDate = new Date("2000-01-05");
  //       var addMonthsDate = new Date.today().addMonths(-1);
  //       var speed = 200;
  //       timer();
  //       function timer() {
  //         if (date < addYearsDate) {
  //           date.addYears(1);
  //
  //           //Do code for showing the number of seconds here
  //           $(".years").text(date.getRealYear());
  //           $(".months").text(date.getMonthName('en'));
  //           $(".days").text(date.getDate() + ",");
  //
  //           if (date >= today) {
  //             return;
  //           }
  //
  //
  //           speed = speed / 6 * 5;
  //           setTimeout(timer, speed);
  //
  //         }
  //         else if (date < addMonthsDate) {
  //           date.addMonths(1);
  //
  //           //Do code for showing the number of seconds here
  //           $(".years").text(date.getRealYear());
  //           $(".months").text(date.getMonthName('en'));
  //           $(".days").text(date.getDate() + ",");
  //
  //           if (date >= today) {
  //             return;
  //           }
  //
  //           speed = speed / 6 * 5;
  //           setTimeout(timer, speed);
  //         }
  //         else {
  //
  //           date.addDays(1);
  //
  //           //Do code for showing the number of seconds here
  //           $(".years").text(date.getRealYear());
  //           $(".months").text(date.getMonthName('en'));
  //           $(".days").text(date.getDate() + ",");
  //
  //           if (date >= today) {
  //
  //             return;
  //           }
  //
  //           speed = 10 + speed;
  //           setTimeout(timer, speed);
  //         }
  //       }
  //
  //
  //       break;
  //       case "first-impressions":
  //
  //       videojs("impression-vid", {
  //         fluid: true,
  //         aspectRatio : "16:9",
  //         "controls" : false,
  //         "autoplay" : true,
  //         "preload" : "auto",
  //         "poster" : "",
  //         "techOrder": ["youtube"],
  //         "sources": [{
  //           "type": "video/youtube",
  //           "src": "https://www.youtube.com/watch?v=8rYw0z-K2Nw"
  //         }]
  //       });
  //
  //       var video = videojs('impression-vid').ready(function(){
  //         var player = this;
  //
  //         player.on('ended', function() {
  //
  //         });
  //       });
  //       break;
  //     }
  //   }
  // });
  //
  // $.scrollify.disable();

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
