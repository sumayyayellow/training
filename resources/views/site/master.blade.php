

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Proficient a Corporate Category Bootstrap Responsive Website Template | Home :: w3layouts </title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Proficient Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //Meta-Tags -->
    <!-- Style Sheet -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
    <link href="css/simpleLightbox.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //Style Sheet -->
    <!--fonts-->
    <link href="//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:300,400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">

    <!--//fonts-->
</head>
<body>
<!-- Header -->
<div class="banner-agileits" id="home">
    <!-- Navbar -->

    <!-- //Navbar -->
    <div class="banner-top-w3-agile">
        <ul>
            <li><p>Vivamus</p><span>Lorem Ipsum</span></li>
            <li><p>Aenean</p><span>Lorem Ipsum</span></li>
            <li><p>dignissim</p><span>Lorem Ipsum</span></li>
            <li><p>vitae</p><span>Lorem Ipsum</span></li>
            <li><p>faucibus</p><span>Lorem Ipsum</span></li>
        </ul>
    </div>
  {{--slider--}}

    {{--slider--}}


</div>

<!-- //Header -->
<div class="banner-btm-wthree">
    <div class="container">


        <div class="clearfix"> </div>

    </div>
</div>
<!-- banner-bottom -->

<!-- //banner-bottom -->


  @yield('body')
<!-- about -->

<!-- //about -->

<!-- Team -->


<!-- /Team -->
<!-- services -->

<!-- //services -->
<!--testimonials-->

<!--//testimonials-->
<!--gallery-->

<!--//gallery-->


<!--footer-->
<div class="footer w3layouts">
    <div class="container">
        <div class="footer-row w3layouts-agile">
            <div class="col-md-4 footer-grids w3l-agileits">
                <h3>About Us</h3>
                <p class="footer-one-w3ls">This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. </p>
            </div>
            <div class="col-md-5 footer-grids w3l-agileits">
                <h3>Latest News</h3>
                <ul class="footer-news-agileits">
                    <li><a  href="#" class="find-about" data-toggle="modal" data-target="#myModal1">Professional business services</a><span>Sep 12</span></li>
                    <li><a  href="#" class="find-about" data-toggle="modal" data-target="#myModal1">Quality business consulting</a><span>Aug 25</span></li>
                    <li><a  href="#" class="find-about" data-toggle="modal" data-target="#myModal1">Customized business solutions</a><span>July 20</span></li>
                </ul>
            </div>
            <div class="col-md-3 footer-grids w3l-agileits">
                <h3>Newsletter</h3>
                <p>Enter your e-mail and subscribe to our newsletter.<p>
                <form action="#" method="post">
                    <input type="email" class="text" placeholder="Enter Email" required="" />
                    <input type="submit" value="Subscribe" />
                </form>
                <div class="clearfix"> </div>
                <ul class="social-icons">
                    <li><a href="#" class="fb"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="twt"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="ggl"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="lin"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<div class="footer-bottom wtrhee-agileinfo">
    <div class="container">
        <p class="copy">Copyright 2017 Proficient. All Rights Reserved | Design By <a href="http://w3layouts.com/">W3layouts</a></p>
    </div>
</div>
<!--//footer-->
<!-- Modal1 -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4>Proficient</h4>
                <img src="images/slide-4.jpg" alt=" " class="img-responsive">
                <h5>Experience the highest level of business assistance</h5>
                <p>We work closely with you to understand your goals and aims, and then develop a new business plan,Our team of experts can help you succeed in managing any kind of conflicts.</p>
            </div>
        </div>
    </div>
</div>
<!-- //Modal1 -->

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- Slider-JavaScript -->
<script src="js/responsiveslides.min.js"></script>
<script>
    $(function () {
        $("#slider, #slider1").responsiveSlides({
            auto: true,
            nav: true,
            speed: 1500,
            namespace: "callbacks",
            pager: false,
        });
    });
</script>
<!-- //Slider-JavaScript -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->
<!-- FlexSlider-JavaScript -->
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    });
</script>
<!-- //FlexSlider-JavaScript -->
<!-- about-section-flexisel-slider-->
<script type="text/javascript">
    $(window).load(function() {
        $("#flexiselDemo1").flexisel({
            visibleItems:3,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint:480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint:640,
                    visibleItems:2
                },
                tablet: {
                    changePoint:768,
                    visibleItems: 2
                }
            }
        });

    });
</script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<!-- //about-section-flexisel-slider-->
<!-- Gallery-script -->
<script src="js/simpleLightbox.js"></script>
<script>
    $('.w3_agile_gallery_grid a').simpleLightbox();
</script>
<!-- //Gallery-script -->
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- Bootstrap -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //Bootstrap -->
</body>
</html>
