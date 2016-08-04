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

  var terms = ["Mad branders.", "Mad innovators.", "Mad consultants.", "Mad communicators.", "Mad collaborators.", "Mad creators.", "Mad Men."];

  function rotateTerm() {
    var ct = $("#rotate").data("term") || 0;
    $("#rotate").data("term", ct == terms.length -1 ? 0 : ct + 1).text(terms[ct]).show("puff", 1000)
              .delay(2000).hide("puff", 1000, rotateTerm);
    }
  $(rotateTerm);

  $('.quote-form fieldset:first-child').fadeIn('slow');

  $('.quote-form input[type="text"], .quote-form input[type="password"], .quote-form textarea').on('focus', function() {
    $(this).removeClass('input-error');
  });

  // next step
  $('.quote-form .btn-next').on('click', function() {
    var parent_fieldset = $(this).parents('fieldset');
    var next_step = true;

    parent_fieldset.find('input[type="text"], textarea').each(function() {
      if( $(this).val() == "" ) {
        $(this).addClass('input-error');
        next_step = false;
      }
      else {
        $(this).removeClass('input-error');
      }
    });

    if( next_step ) {
      parent_fieldset.fadeOut(400, function() {
        $(this).next().fadeIn();
      });
    }

  });

  // previous step
  $('.quote-form .btn-previous').on('click', function() {
    $(this).parents('fieldset').fadeOut(400, function() {
      $(this).prev().fadeIn();
    });
  });

  // submit
  $('.quote-form').on('submit', function(e) {

    $(this).find('#name, input[type="email"], input[type="tel"]').each(function() {
      if( $(this).val() == "" ) {
        e.preventDefault();
        $(this).addClass('input-error');
      }
      else {
        $(this).removeClass('input-error');
      }
    });
  });


  // Checkboxes
  $('.small-business-btn').click('click', function() {

    var checkbox = $('#small-business-checkbox');

    if( checkbox.attr("checked") == undefined){
        checkbox.attr("checked", true);
        $(this).css('background-color', 'gray');

    } else {
        checkbox.attr("checked", false);
        $(this).css('background-color', 'white');
    }
  });

  $('.individual-btn').click('click', function() {

    var checkbox = $('#individual-checkbox');

    if( checkbox.attr("checked") == undefined){
        checkbox.attr("checked", true);
        $(this).css('background-color', 'gray');

    } else {
        checkbox.attr("checked", false);
        $(this).css('background-color', 'white');
    }
  });

  $('.non-profit-btn').click('click', function() {

    var checkbox = $('#non-profit-checkbox');

    if( checkbox.attr("checked") == undefined){
        checkbox.attr("checked", true);
        $(this).css('background-color', 'gray');

    } else {
        checkbox.attr("checked", false);
        $(this).css('background-color', 'white');
    }
  });

  $('.website-btn').click('click', function() {

    var checkbox = $('#website-checkbox');

    if( checkbox.attr("checked") == undefined){
        checkbox.attr("checked", true);
        $(this).css('background-color', 'gray');

    } else {
        checkbox.attr("checked", false);
        $(this).css('background-color', 'white');
    }
  });

  $('.mobile-btn').click('click', function() {

    var checkbox = $('#mobile-checkbox');

    if( checkbox.attr("checked") == undefined){
        checkbox.attr("checked", true);
        $(this).css('background-color', 'gray');

    } else {
        checkbox.attr("checked", false);
        $(this).css('background-color', 'white');
    }
  });

  $('.business-solution-btn').click('click', function() {

    var checkbox = $('#business-solution-checkbox');

    if( checkbox.attr("checked") == undefined){
        checkbox.attr("checked", true);
        $(this).css('background-color', 'gray');

    } else {
        checkbox.attr("checked", false);
        $(this).css('background-color', 'white');
    }
  });



  jQuery(function($){
     $("#phone").mask("(999) 999-9999");
  });




});

var OrigWidth = $("#carson-pic").width();

var fitImages = function(){
    $("#carson-pic").removeAttr( "style" );
    $("#zach-pic").removeAttr( "style" );
    var changedWidth = $("#carson-pic").height();
    var h1 = $("#carson-pic").height();
    var h2 = $("#zach-pic").height();
    //it can be done only with height but using double check          ratio of the images is a bit more acurate
    if (changedWidth < OrigWidth) //expand
    {
        //using higher image as refference when maximize
        if (h1 > h2)
        {
          $("#zach-pic").height(h1);
        }
        else if (h2 > h1)
        {
            $("#carson-pic").height(h2);
        }
    }
    else
    {
        //using lower image as refference when minimize
       if (h1 < h2)
        {
          $("#carson-pic").height(h2);
        }
        else if (h2 < h1)
        {
            $("#zach-pic").height(h1);
        }
    }
    OrigWidth = changedWidth;
    return 0;
}

$(window).resize(fitImages);

$(document).ready(fitImages);
