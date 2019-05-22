<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="E-shop"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- //for-mobile-apps -->
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- js -->
    <script src="../js/jquery-1.11.1.min.js"></script>
    <!-- //js -->
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="../js/move-top.js"></script>
    <script type="text/javascript" src="../js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <!-- pop-up-box -->
    <link rel="stylesheet" type="text/css" href="../css/jquery.lightbox.css">
    <script src="../js/jquery.lightbox.js"></script>
    <script>
        // Initiate Lightbox
        $(function () {
            $('.product-gd1 a').lightbox();
        });
    </script>
    <!-- //pop-up-box -->
    <!-- menu -->
    <link href="../css/component.css" rel="stylesheet" type="text/css"/>
    <!-- //menu -->
    <link href="http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
          rel="stylesheet" type="text/css">
    <link href="http://fonts.useso.com/css?family=Josefin+Sans:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic"
          rel="stylesheet" type="text/css">
</head>

<body class="cbp-spmenu-push">
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-30027142-1', 'w3layouts.com');
    ga('send', 'pageview');
</script>
<!-- header -->
<div class="header-top">
    <div class="container">
        <div class="header-top-left">
            <p>NEWS! We have a 15% discount for your first purchase!</p>
        </div>
        <div class="header-top-right1">
            <p><a href="../Loginpage.php">Log In</a></p>
        </div>
        <div class="header-top-right3">
            <p><a href="#mail" class="scroll">contact us</a></p>
        </div>
        <div class="clearfix">
        </div>
    </div>
</div>
<div class="header">
    <div class="container">
        <div class="top-nav">
            <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s2">
                <h3>Menu</h3>
                <ul>
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="../index.html">Cart [0]</a></li>
                    <li><a href="#about" class="scroll">About</a></li>
                    <li><a href="#products" class="scroll">Products</a></li>
                    <li><a href="#event" class="scroll">Events</a></li>
                    <li><a href="#mail" class="scroll">Mail Us</a></li>
                    <li><a href="../cityview.html">City View</a></li>
                </ul>
            </nav>
            <div class="main buttonset">
                <!-- Class "cbp-spmenu-open" gets applied to menu and "cbp-spmenu-push-toleft" or "cbp-spmenu-push-toright" to the body -->
                <button id="showRightPush"><img src="../images/menu.png" alt=""/></button>
                <!--<span class="menu"></span>-->
            </div>
            <!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
            <script src="../js/classie.js"></script>
            <script>
                var menuRight = document.getElementById('cbp-spmenu-s2'),
                    showRightPush = document.getElementById('showRightPush'),
                    body = document.body;

                showRightPush.onclick = function () {
                    classie.toggle(this, 'active');
                    classie.toggle(body, 'cbp-spmenu-push-toleft');
                    classie.toggle(menuRight, 'cbp-spmenu-open');
                    disableOther('showRightPush');
                };

                function disableOther(button) {
                    if (button !== 'showRightPush') {
                        classie.toggle(showRightPush, 'disabled');
                    }
                }
            </script>
        </div>
        <div class="logo"><a href="../index.html"><em class="glyphicon glyphicon-grain" aria-hidden="true"></em>Smart
                AgShop<span>To Raise Your Crops and Livestock!</span></a></div>
        <div class="search">
            <form>
                <input type="text" value="Search here..." onFocus="this.value = '';"
                       onBlur="if (this.value == '') {this.value = 'Search here...';}" required="">
            </form>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //header -->

<!-- products -->
<div class="products" id="products">
    <div class="container">
        <h3>What We Offer</h3>
        <div class="product-grids">
            <div class="col-md-4 product-grid">
                <div class="product-gd">
                    <div class="product-gd1">
                        <a class="mask" href="../images/7.png"><img src="../images/7.png" alt=" "
                                                                    class="img-responsive"/></a>
                    </div>
                    <div class="product-grd">
                        <h4><a href="../products/shopping-starwberry.html">Strewberry</a></h4>
                        <p>One serving (100g) of strawberries contains approximately 33
                            kilocalories, is an excellent source of vitamin C, a good source of manganese, and provides
                            several
                            other vitamins and dietary minerals in lesser amounts.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 product-grid">
                <div class="product-gd">
                    <div class="product-gd1">
                        <a class="mask" href="../images/5.jpg"><img src="../images/5.jpg" alt=" "
                                                                    class="img-responsive"/></a>
                    </div>
                    <div class="product-grd">
                        <h4><a href="../single.html">Waltermelon is coming out</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lobortis,
                            ante interdum vehicula pretium, dui enim porta lectus.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 product-grid">
                <div class="product-gd">
                    <div class="product-gd1">
                        <a class="mask" href="../images/4.jpg"><img src="../images/4.jpg" alt=" "
                                                                    class="img-responsive"/></a>
                    </div>
                    <div class="product-grd">
                        <h4><a href="../products/shopping-cherrytomato.html">Organic cherry potatoes</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lobortis,
                            ante interdum vehicula pretium, dui enim porta lectus.</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="product-grids">
            <div class="col-md-4 product-grid">
                <div class="product-gd">
                    <div class="product-gd1">
                        <a class="mask" href="../images/6.jpg"><img src="../images/6.jpg" alt=" "
                                                                    class="img-responsive"/></a>
                    </div>
                    <div class="product-grd">
                        <h4><a href="single.html">Potatoes' new evolution</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lobortis,
                            ante interdum vehicula pretium, dui enim porta lectus.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 product-grid">
                <div class="product-gd">
                    <div class="product-gd1">
                        <a class="mask" href="../images/7.jpg"><img src="../images/7.jpg" alt=" "
                                                                    class="img-responsive"/></a>
                    </div>
                    <div class="product-grd">
                        <h4><a href="single.html">Tomatoes</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lobortis,
                            ante interdum vehicula pretium, dui enim porta lectus.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 product-grid">
                <div class="product-gd">
                    <div class="product-gd1">
                        <a class="mask" href="../images/8.jpg"><img src="../images/8.jpg" alt=" "
                                                                    class="img-responsive"/></a>
                    </div>
                    <div class="product-grd">
                        <h4><a href="single.html">dui enim porta lectus voluptates repudiandae</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lobortis,
                            ante interdum vehicula pretium, dui enim porta lectus.</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="special">
            <h4>Special Offers</h4>
            <div class="special-grids">
                <div class="col-md-4 special-grid">
                    <div class="col-xs-4 special-grd-left">
                        <p><span class="glyphicon glyphicon-scissors" aria-hidden="true"></span></p>
                    </div>
                    <div class="col-xs-8 special-grd">
                        <h5>On-schedule pick up</h5>
                        <p>Nisi ut aliquid ex ea commodi consequatur? Quis autem
                            vel eum iure reprehenderit qui in ea voluptate velit esse
                            quam nihil molestiae consequatur.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 special-grid">
                    <div class="col-xs-4 special-grd-left">
                        <p><span class="glyphicon glyphicon-user" aria-hidden="true"></span></p>
                    </div>
                    <div class="col-xs-8 special-grd">
                        <h5>Farmer authoritation</h5>
                        <p>Nisi ut aliquid ex ea commodi consequatur? Quis autem
                            vel eum iure reprehenderit qui in ea voluptate velit esse
                            quam nihil molestiae consequatur.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 special-grid">
                    <div class="col-xs-4 special-grd-left">
                        <p><span class="glyphicon glyphicon-leaf" aria-hidden="true"></span></p>
                    </div>
                    <div class="col-xs-8 special-grd">
                        <h5>Energy green system</h5>
                        <p>Nisi ut aliquid ex ea commodi consequatur? Quis autem
                            vel eum iure reprehenderit qui in ea voluptate velit esse
                            quam nihil molestiae consequatur.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!-- //products -->
<!-- welcome -->
<div class="welcome">
    <div class="container">
        <div class="col-md-6 welcome-left">
            <img src="../images/5.png" alt=" " class="img-responsive"/>
        </div>
        <div class="col-md-6 welcome-right">
            <h3>A Brief <span>History</span></h3>
            <p>We are a e-shop group work for farmers and buyers. We monitor the farm with the latest-version sensors
                and try to provide the latest info to buyers. </p>
            <div class="cont">
                <a href="../single.html">More</a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //welcome -->
<!-- about -->
<div class="about" id="about">
    <div class="clearfix">
        <div class="about-left">
            <img src="../images/1.jpg" alt=" " class="img-responsive"/>
        </div>
        <div class="about-right" style="height: 540px">
            <h3>We are sensored farm</h3>
            <p>We set multiple type of sensors in each arch of our authotized farm land. We make sure all of our
                products
                grow orgaincly and under our control. As our customer, you can see how our products grow up. It's
                simple. </p>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!-- //about -->
<!-- our-advantages -->
<div class="our-advantages">
    <div class="container">
        <h3>Our Advantages</h3>
        <div class="our-advantages-grids">
            <div class="col-md-4 our-advantages-grid">
                <div class="col-xs-3 our-advantages-grd-left">
                    <p>1.</p>
                </div>
                <div class="col-xs-9 our-advantages-grd-right">
                    <h4>Organic</h4>
                    <p>We .</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4 our-advantages-grid">
                <div class="col-xs-3 our-advantages-grd-left">
                    <p>2.</p>
                </div>
                <div class="col-xs-9 our-advantages-grd-right">
                    <h4>voluptate velit esse quam pariatur eum iure</h4>
                    <p>Vel illum qui dolorem eum fugiat quo voluptas
                        nulla pariatur eum iure reprehenderit.</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4 our-advantages-grid">
                <div class="col-xs-3 our-advantages-grd-left">
                    <p>3.</p>
                </div>
                <div class="col-xs-9 our-advantages-grd-right">
                    <h4>voluptate velit esse quam pariatur eum iure</h4>
                    <p>Vel illum qui dolorem eum fugiat quo voluptas
                        nulla pariatur eum iure reprehenderit.</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="our-advantages-grids">
            <div class="col-md-4 our-advantages-grid">
                <div class="col-xs-3 our-advantages-grd-left">
                    <p>4.</p>
                </div>
                <div class="col-xs-9 our-advantages-grd-right">
                    <p>Vel illum qui dolorem eum fugiat quo voluptas
                        nulla pariatur eum iure reprehenderit.</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4 our-advantages-grid">
                <div class="col-xs-3 our-advantages-grd-left">
                    <p>5.</p>
                </div>
                <div class="col-xs-9 our-advantages-grd-right">
                    <h4>voluptate velit esse quam pariatur eum iure</h4>
                    <p>Vel illum qui dolorem eum fugiat quo voluptas
                        nulla pariatur eum iure reprehenderit.</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4 our-advantages-grid">
                <div class="col-xs-3 our-advantages-grd-left">
                    <p>6.</p>
                </div>
                <div class="col-xs-9 our-advantages-grd-right">
                    <h4>voluptate velit esse quam pariatur eum iure</h4>
                    <p>Vel illum qui dolorem eum fugiat quo voluptas
                        nulla pariatur eum iure reprehenderit.</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //our-advantages -->
<!-- about-bottom -->
<div class="about-bottom">
    <div class="container">
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="about-bottom-info">
                            <h3>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur</h3>
                            <p>Temporibus autem quibusdam et aut officiis debitis aut rerum
                                necessitatibus saepe eveniet ut et voluptates repudiandae sint et
                                molestiae non recusandae.</p>
                        </div>
                    </li>
                    <li>
                        <div class="about-bottom-info">
                            <h3>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur</h3>
                            <p>Temporibus autem quibusdam et aut officiis debitis aut rerum
                                necessitatibus saepe eveniet ut et voluptates repudiandae sint et
                                molestiae non recusandae.</p>
                        </div>
                    </li>
                    <li>
                        <div class="about-bottom-info">
                            <h3>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur</h3>
                            <p>Temporibus autem quibusdam et aut officiis debitis aut rerum
                                necessitatibus saepe eveniet ut et voluptates repudiandae sint et
                                molestiae non recusandae.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!--FlexSlider-->
        <link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen"/>
        <script defer src="../js/jquery.flexslider.js"></script>
        <script type="text/javascript">
            $(function () {
                SyntaxHighlighter.all();
            });
            $(window).load(function () {
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function (slider) {
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>
        <!--End-slider-script-->
    </div>
</div>
<!-- //about-bottom -->

<!-- products-bottom -->
<div class="products-bottom">
    <div class="container">
        <div class="get-in-grids">
            <div class="get-in-grid-left">
                <p>Newsletter</p>
            </div>
            <div class="get-in-grid-right">
                <input type="text" value="Enter Your Mail..." onFocus="this.value = '';"
                       onBlur="if (this.value == '') {this.value = 'Enter Your Mail...';}" required="">
                <input type="submit" value="Subscribe">
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //products-bottom -->
<!-- events -->
<div class="event" id="event">
    <div class="container">
        <h3>Events</h3>
        <div class="event-grids">
            <div class="col-md-6 event-grid">
                <div class="event-grd">
                    <div class="product-gd1">
                        <a class="mask" href="../images/10.jpg"><img src="../images/10.jpg" alt=" "
                                                                     class="img-responsive"/></a>
                    </div>
                    <div class="evnt-grd">
                        <div class="col-xs-3 evnt-grd-left">
                            <p>17th<span>July</span></p>
                        </div>
                        <div class="col-xs-9 evnt-grd-right">
                            <h3><a href="../single.html">Importance of Cow Nutrition from Calving Through Breeding</a>
                            </h3>
                            <p> Now is a good time to assess both cow body condition and feed resources and develop a
                                plan to provide adequate nutrition to meet cow needs. ( Troy Walz, University of
                                Nebraska Extension )</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 event-grid">
                <div class="event-grd">
                    <div class="product-gd1">
                        <a class="mask" href="../images/11.jpg"><img src="../images/11.jpg" alt=" "
                                                                     class="img-responsive"/></a>
                    </div>
                    <div class="evnt-grd">
                        <div class="col-xs-3 evnt-grd-left">
                            <p>20th<span>July</span></p>
                        </div>
                        <div class="col-xs-9 evnt-grd-right">
                            <h3><a href="../single.html">The Age of Robot Farmers</a></h3>
                            <p> Wish Farms, in Florida, picks, chills, and ships some twenty million strawberries at
                                peak season. As harvest-time labor has become much more scarce, and more expensive,
                                farmers are turning to automation to fill the gap.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="event-grids">
            <div class="col-md-6 event-grid">
                <div class="event-grd">
                    <div class="product-gd1">
                        <a class="mask" href="../images/12.jpg"><img src="../images/12.jpg" alt=" "
                                                                     class="img-responsive"/></a>
                    </div>
                    <div class="evnt-grd">
                        <div class="col-xs-3 evnt-grd-left">
                            <p>28th<span>July</span></p>
                        </div>
                        <div class="col-xs-9 evnt-grd-right">
                            <h3><a href="../single.html">3 ways consumer trends impact your farm</a></h3>
                            <p> Not everyone agrees on the details, but there’s no disagreement on this: Change is
                                coming rapidly for the food business, and it reaches all the way to farm level.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 event-grid">
                <div class="event-grd">
                    <div class="product-gd1">
                        <a class="mask" href="../images/13.jpg"><img src="../images/13.jpg" alt=" "
                                                                     class="img-responsive"/></a>
                    </div>
                    <div class="evnt-grd">
                        <div class="col-xs-3 evnt-grd-left">
                            <p>31st<span>July</span></p>
                        </div>
                        <div class="col-xs-9 evnt-grd-right">
                            <h3><a href="../single.html">Wet Feet in Wheat</a></h3>
                            <p>Given the widespread wet conditions present this spring, there are many areas in winter
                                wheat fields with both ponding and saturated (or waterlogged) soils. </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //events -->

<div class="mail" id="mail">
    <div class="container">
        <div class="feedback-info">
            <h3>Mail Us</h3>
            <p class="lo">Did you find anything Interested? Congrats! Feel free to let us know and we'll offer you more
                information you need. </p>
            <div class="name">
                <p id="contact">Your name:</p>
                <form>
                    <input type="text" placeholder="Name..." required=" ">
                </form>
            </div>
            <div class="name na">
                <p>E-mail:</p>
                <form>
                    <input type="text" placeholder="Enter Your Email Here..." required=" ">
                </form>
            </div>
            <div class="name">
                <p>Phone number:</p>
                <form>
                    <input type="text" placeholder="Enter Your Primary Contact..." required=" ">
                </form>
            </div>
            <div class="comment">
                <p>Message:</p>
                <form>
                    <textarea placeholder="Write your message here...." required=" "></textarea>
                </form>
            </div>
            <div class="sub">
                <form>
                    <input type="submit" value="Send">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- //mail -->
<!-- footer -->
<div class="footer">
    <div class="footer-grids">
        <div class="container">
            <div class="col-md-3 footer-grid">
                <h4>Services</h4>
                <ul>
                    <li><a href="#">Billing</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">order track</a></li>
                    <li><a href="#">return</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-grid">
                <h4>Information</h4>
                <ul>
                    <li><a href="#">farmer</a></li>
                    <li><a href="#">product</a></li>
                    <li><a href="#">Sensor system</a></li>
                    <li><a href="#">Our Staff</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-grid">
                <h4>More details</h4>
                <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                    <li><a href="#">Site map</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-grid contact-grid">
                <h4>Contact us</h4>
                <ul>
                    <li><span class="c-icon"> </span>San Jose State University</li>
                    <li><span class="c-icon1"> </span><a href="mailto:info@sjsu.edu"><p>mail@sjsu.edu</p></a></li>
                    <li><span class="c-icon2"> </span>One Washington Square, San Jose</li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="copy">
    <p>Copyright &copy; 2019 E shop All rights reserved.</p>
</div>
<!-- //footer -->
<!-- for bootstrap working -->
<script src="../js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>