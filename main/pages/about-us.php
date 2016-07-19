<!-- Navigation -->

<style>
.carousel {
        
        .carousel-inner {
        
            .item {
	           min-height: 400px; 
	           height: 100%;
	           width:100%; 
            }
        
            .slide1 {
                background: url(../dependents/img/banner-bg.jpg) no-repeat center center;
                background-size: cover;
            }
    
            .slide2 { 
                background: url(../dependents/img/computer-work.png) no-repeat center center;
                background-size: cover;
            }
    
            .slide3 {
                background: url(../dependents/img/iphone-outside.png) no-repeat center center;
                background-size: cover;
            }
        
            .carousel-caption {
            
                button {
                    -webkit-animation-delay: 2s;
                    animation-delay: 2s;
                    border-color: #00bfff;
                    background-color: #09c;
                    margin-top: 1em; 
                    margin-bottom: 1em;
                }
        
                h1 {
                    font-size: 35px;
                    padding: .5em;   
                }
        
                p {
                    -webkit-animation-delay: 1s;
                    animation-delay: 1s;
                    font-size: 18px;
                }
            
                @media(max-width:720px) { 
      
                    button {
                        -webkit-animation-delay: 2s;
                        animation-delay: 2s;
                        border-color: #00bfff;
                        background-color: #09c;
                        margin-top: 1em; 
                        font-size: 10px;
                        margin-bottom: 1em;
                    }
        
                    h1 {
                        padding: .5em;
                        font-size: 25px;
                    }
        
                    p {
                        -webkit-animation-delay: 1s;
                        animation-delay: 1s;
                        font-size: 15px;
                    }
                } // end media query
            } // end carousel-caption
    
        } // end carousel inner
    
        .icon-container {
            background-color: #09c;
            display: inline-block;
            font-size: 25px;
            line-height: 25px;
            padding: 1em;
	        text-align: center; 
            border-radius: 50%;
        }
    
        .carousel-indicators {
            bottom: 0;
        }
    } // end carousel
</style>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand page-scroll" href="#"><img class="img-responsive logo" src="../dependents/img/MadMenOfficialLogo%20w:o%20Tagline.png"></a>
                    
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                </div> <!-- end navbar-header -->
                
                
                
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        
                        <li>
                            <a class="page-scroll" href=""><p>Portfolio</p></a>
                        </li>
                        <li>
                            <a class="page-scroll" href=""><p>Contact Us</p></a>
                        </li>
                        <li>
                            <a class="page-scroll" href=""><p>About Us</p></a>
                        </li>
                    </ul> <!-- end nav navbar-nav navbar-right -->
                </div> <!-- end collapse navbar-collapse -->
            </div> <!-- end container-fluid -->
        </nav> <!-- end navbar navbar-default navbar-fixed-top -->


<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    
                    <!-- First slide -->
                    <div class="item active slide1">
                        <div class="carousel-caption">
                            <h1 class="display-1 animated tada">We are a Professional Web Design Company</h1>
                            <p class="lead animated fadeInUp">Let us create a stunning website for your business! Mad Men Software is a professional web design company that specializes in creating gorgeous websites for small businesses.</p>
                            <button class="btn btn-primary btn-lg animated zoomIn">Learn more!</button>
                        </div>
                    </div><!-- /.item -->

                    <!-- Second slide -->
                    <div class="item slide2">
                        <div class="carousel-caption">
                            <h1 class="display-1 animated rubberBand">We'll Make the Website that your Business Deserves</h1>
                            
                            <p class="lead animated bounceInUp">Attract more customers and improve retention with a brand new aesthetically pleasing website for your business. It is imperative for every business to have a website so let us set your business apart! We can help you establish a professional online presence.</p>
                            <button class="btn btn-primary btn-lg animated flipInX">Contact Us</button>
                        </div>
                    </div><!-- /.item -->

                    <!-- Third slide -->
                    <div class="item slide3">
                        <div class="carousel-caption">
                            <h1 class="display-1 animated tada">We Make Apps Too!</h1>
                            <p class="lead animated fadeInUp">Almost everyone has a smartphone these days and with your own app, your business can be at the tip of your customer's fingers at all times. Mobile apps can improve your customer engagement and help you stand out from the competition. We can make dedicated iPhone and Android apps for your business.</p>
                            <button class="btn btn-primary btn-lg animated zoomIn">Learn More</button>
                        </div>
                    </div><!-- /.item -->

                </div><!-- /.carousel-inner -->
            </div><!-- end carousel -->

<script>
    $( document ).ready(function() {

    var $myCarousel = $('#carousel-example-generic');

    // Initialize carousel
    $myCarousel.carousel({
        interval: 20000
    });

    function doAnimations(elems) {
        var animEndEv = 'webkitAnimationEnd animationend';
  
        elems.each(function () {
                var $this = $(this), $animationType = $this.data('animation');

                // Add animate.css classes to
                // the elements to be animated 
                // Remove animate.css classes
                // once the animation event has ended
                $this.addClass($animationType).one(animEndEv, function () {
                $this.removeClass($animationType);
            });
        });
    }
 
    // Select the elements to be animated
    // in the first slide on page load
    var $firstAnimatingElems = $myCarousel.find('.item:first').find('[data-animation ^= "animated"]');

    // Apply the animation using our function
    doAnimations($firstAnimatingElems);

    // Pause the carousel 
    $myCarousel.carousel('pause');

    // Attach our doAnimations() function to the
    // carousel's slide.bs.carousel event 
    $myCarousel.on('slide.bs.carousel', function (e) { 
        // Select the elements to be animated inside the active slide 
        var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
        doAnimations($animatingElems);
    });
    
});

</script>