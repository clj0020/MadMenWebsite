var jumboHeight = $('.jumbotron').outerHeight();
function parallax(){
    var scrolled = $(window).scrollTop();
    $('.bg').css('height', (jumboHeight-scrolled) + 'px');
}

$(window).scroll(function(e){
    parallax();
});

$(document).ready(function() {
    // Optimalisation: Store the references outside the event handler:
    var $window = $(window);
    var $mobile = $(".mobile");
    var $desktop = $(".desktop");
                    
    $($desktop).hide();
    $($mobile).hide();
                
    function checkWidth() {
        var windowsize = $window.width();
                    
        if (windowsize < 560) {
            //if the window is greater than 440px wide then turn on jScrollPane..
            $($mobile).show();
            $($desktop).hide();
                        
            adjustIphoneMargin();
            centerMobileInputText();
        }
        else {
            $($desktop).show();
            $($mobile).hide();
                        
            adjustComputerMargin();
            centerDesktopInputText();
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

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
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
        
    
}); 

