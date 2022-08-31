<?php 
session_start();
include('includes/config.php');
include('includes/header.php');
?>
<body>
    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg stroke">
                <h1><a class="navbar-brand mr-lg-5" href="index.php">
                        <img src="assets/images/naspan_logo.jpg" style="height: 40px;">
                        NAS<span>PAN</span>
                    </a></h1>
                <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                About<span class="fa fa-angle-down"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                <a class="dropdown-item" href="about.php">About Us</a>
                                <a class="dropdown-item" href="industry_overview.php">Industry Overview</a>
                                <a class="dropdown-item" href="executives.php">Executive Members</a>
                                <a class="dropdown-item" href="strategic_focus.php">Strategic Focus</a>
                            </div>
                        </li>
                        <li class="nav-item active dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Media <span class="fa fa-angle-down"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                <a class="dropdown-item" href="blog.php">News & Event</a>
                                <a class="dropdown-item" href="gallery.php">Gallery</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Member Area <span class="fa fa-angle-down"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                <a class="dropdown-item" href="signin.php">Sign In</a>
                                <a class="dropdown-item" href="become.php">Register</a>
                                <a class="dropdown-item" href="membership.php">Membership</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="d-lg-block d-none">
                    <a href="#" class="btn btn-style btn-secondary ml-lg-3">Donate</a>
                </div>
                <div class="d-lg-block d-none">
                    <a href="become.php" class="btn btn-style btn-secondary ml-lg-3">Become a Member</a>
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!-- //header -->
    <!-- about breadcrumb -->
    <section class="w3l-about-breadcrumb text-left">
        <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
            <div class="container">
                <h2 class="title">Gallery</h2>
                <ul class="breadcrumbs-custom-path mt-2">
                    <li><a href="#url">Home</a></li>
                    <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Gallery </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //about breadcrumb -->
    <!--/gallery-->
    <section class="w3l-portfolio-8 py-5">
        <div class="portfolio-main py-md-4 py-3">
            <div class="container">
                <div class="header-section text-center mx-auto">
                    <h6 class="sub-title">View Gallery</h6>
                    <h3 class="hny-title">Albums</h3>

                </div>

                <section class="Grid">
                <?php
                $location_list = array('Conference Album', 'Niger State Visit', 'Sub-Commitee Meeting', 'Working Visit', 'Office Address', 'Group Meeting', 'Goals');

                  foreach ($location_list as $key => $location) {
                      if ($key % 4 == 0) {
                          echo '<div class="Grid-row">';
                      }
                ?>
                     <a class="Card" onClick="openGallery(1)" href="gallery_view">
                            <div class="Card-thumb">
                                <div class="Card-shadow"></div>
                                <div class="Card-shadow"></div>
                                <div class="Card-shadow"></div>
                                <div class="Card-image" style="background-image: url(assets/images/naspan-and-nifor.jpg)"></div>
                            </div>
                            <div class="Card-title"><span><?php echo $location; ?></span></div>
                            <div class="Card-explore"><span>Explore 4 more</span></div>
                            <button class="Card-button">view more</button>
                      </a>
                <?php 
                      if ($key % 4 == 3) {
                        echo '</div>';
                      }
                  }
                ?>
                </div>
                </section>
               
            </div>
        </div>
    </section>
    <!--//gallery-->
    <!--/w3l-footer-29-main-->
    <section class="w3l-footer-29-main">
        <div class="footer-29 py-5">
            <div class="container py-lg-4">
                <div class="row footer-top-29">
                    <div class="footer-list-29 col-lg-6">
                        <h6 class="footer-title-29">NASPAN</h6>
                        <p class="pr-lg-5">Connect with us across different platforms.</p>
                        <div class="main-social-footer-29 mt-4">
                            <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                            <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
                            <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                            <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-8 footer-list-29 footer-1 mt-lg-0 mt-5">
                        <h6 class="footer-title-29">Contact Us</h6>
                        <ul>
                            <li>
                                <p><span class="fa fa-map-marker"></span> NASPAN, #3 Femi Okunnu close off Augustus
                                    Aikhomu Way,
                                    Utako-Abuja
                                </p>
                            </li>
                            <li><a href="tel:+234 913-714-7993"><span class="fa fa-phone"></span> +(234)
                                    913-714-7993</a> <a href="mailto:naspansecretariat@gmail.com" class="mail"><span
                                        class="fa fa-envelope-open-o"></span>
                                    naspansecretariat@gmail.com</a> </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="w3l-footer-29-main w3l-copyright">
        <div class="container">
            <div class="bottom-copies">
                <p class="copy-footer-29 text-center">© 2022 NASPAN. All rights reserved.
                </p>
            </div>
        </div>

        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
            <span class="fa fa-angle-up"></span>
        </button>
        <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
        </script>
        <!-- /move top -->
    </section>
    <!-- //footer-29 block -->
    <!-- disable body scroll which navbar is in active -->
    <script>
    $(function() {
        $('.navbar-toggler').click(function() {
            $('body').toggleClass('noscroll');
        })
    });
    </script>
    <!-- disable body scroll which navbar is in active -->

    <!-- Template JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/theme-change.js"></script>
    <!-- libhtbox -->
    <script src="assets/js/lightbox-plus-jquery.min.js"></script>
    <!-- libhtbox -->
    <!--/MENU-JS-->
    <script>
    $(window).on("scroll", function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 80) {
            $("#site-header").addClass("nav-fixed");
        } else {
            $("#site-header").removeClass("nav-fixed");
        }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function() {
        $("header").toggleClass("active");
    });
    $(document).on("ready", function() {
        if ($(window).width() > 991) {
            $("header").removeClass("active");
        }
        $(window).on("resize", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
        });
    });
    </script>
    <!--//MENU-JS-->

    <script src="assets/js/bootstrap.min.js"></script>
    <style>
     
.Grid {
  /* width: 50rem; */
  margin: 5rem auto;
}
.Grid-row {
  display: flex;
  justify-content: space-between;
  margin-bottom: 2.5rem;
}
.Card {
  position: relative;
  flex: 0 1 15rem;
  background-color: #fff;
  padding-bottom: 5rem;
  transition: background-color 0.2s cubic-bezier(0.5, 0.3, 0.8, 0.06);
  color: #000;
}
.Card-thumb {
  position: relative;
  width: 15rem;
  height: 10rem;
  border-radius:3rem;
  perspective-origin: 50% 0%;
  perspective: 600px;
  z-index: 1;
}
.Card-image,
.Card-shadow {
  position: absolute;
  display: block;
  width: 15rem;
  height: 10rem;
  transition: all 0.2s cubic-bezier(0.42, 0, 0.58, 1);
}
.Card-shadow {
  opacity: 0.8;
}
.Card-shadow:nth-child(1) {
  opacity: 0.6;
  background-color: #673ab7;
  transition: all 0.2s cubic-bezier(0.42, 0, 0.58, 1) 0.07s;
}
.Card-shadow:nth-child(2) {
  opacity: 0.7;
  background-color: var(--secondary-color);
  transition: all 0.2s cubic-bezier(0.42, 0, 0.58, 1) 0.05s;
}
.Card-shadow:nth-child(3) {
  background-color: #2196f3;
  transition: all 0.2s cubic-bezier(0.42, 0, 0.58, 1) 0.03s;
}
.Card-image {
  position: relative;
  background-size: auto 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-color: #607d8b;
}
.Card-image::before {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-color: var(--secondary-color);
  content: '';
  opacity: 0;
  transition: opacity 0.1s;
}
.Card-title,
.Card-explore {
  position: absolute;
  bottom: 0;
  display: flex;
  align-items: center;
  width: 100%;
  height: 5rem;
  text-align: center;
  transition: all 0.2s cubic-bezier(0.5, 0.3, 0.8, 0.06);
}
.Card-title span,
.Card-explore span {
  padding: 0.5rem;
  flex: 1 1 auto;
  text-align: center;
}
.Card-explore {
  opacity: 0;
  transform: translate(0, -1rem);
  font-size: 0.75rem;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: #673ab7;
}
.Card-button {
  position: absolute;
  left: 50%;
  top: 5rem;
  padding: 0.5rem 1rem;
  background-color: #fff;
  border-radius: 2rem;
  border: 2px solid var(--secondary-color);
  color: #fff;
  font-size: 0.75rem;
  font-weight: 600;
  transform: translate(-50%, 2rem);
  cursor: pointer;
  transition: all 0.2s;
  opacity: 0;
  outline: none;
  z-index: 4;
}
.Card:hover,
.Card--active {
  background-color: #f5f5f5;
  cursor: pointer;
}
.Card:hover .Card-thumb,
.Card--active .Card-thumb {
  z-index: 3;
}
.Card:hover .Card-title,
.Card--active .Card-title {
  opacity: 0;
}
.Card:hover .Card-explore,
.Card--active .Card-explore {
  opacity: 1;
  transform: translate(0, 1rem);
  transition: all 0.2s cubic-bezier(0.42, 0, 0.58, 1) 0.1s;
}
.Card:hover .Card-image,
.Card--active .Card-image {
  transform: scale(1.05) translate(0, -1rem) rotateX(25deg);
}
.Card:hover .Card-image::before,
.Card--active .Card-image::before {
  opacity: 0.4;
}
.Card:hover .Card-shadow:nth-child(3),
.Card--active .Card-shadow:nth-child(3) {
  transform: scale(1.02) translate(0, -0.3rem) rotateX(15deg);
}
.Card:hover .Card-shadow:nth-child(2),
.Card--active .Card-shadow:nth-child(2) {
  transform: scale(0.9) translate(0, 1rem) rotateX(15deg);
}
.Card:hover .Card-shadow:nth-child(1),
.Card--active .Card-shadow:nth-child(1) {
  transform: scale(0.82) translate(0, 2.4rem) rotateX(5deg);
}
.Card:hover .Card-button,
.Card--active .Card-button {
  opacity: 1;
  color: var(--secondary-color);
  transform: translate(-50%, 0);
}
.Card:hover .Card-button:hover,
.Card--active .Card-button:hover {
  color: #fff;
  background-color: var(--secondary-color);
}
.Card--active,
.Card--active:hover {
  background: none;
}
.Card--active .Card-explore,
.Card--active:hover .Card-explore {
  opacity: 0;
  transform: translate(0, 3rem);
  transition: all 0.5s cubic-bezier(0.42, 0, 0.58, 1);
}
.Card--active .Card-image,
.Card--active:hover .Card-image {
  opacity: 0;
  transition: all 0.4s cubic-bezier(0.42, 0, 0.58, 1);
  transform: scale(1.05) translate(0, -2.5rem) rotateX(50deg);
}
.Card--active .Card-image::before,
.Card--active:hover .Card-image::before {
  opacity: 0.4;
}
.Card--active .Card-button,
.Card--active:hover .Card-button {
  opacity: 0;
  transition: all 0.35s cubic-bezier(0.42, 0, 0.58, 1);
  transform: translate(-50%, -2rem) scale(1, 0.4);
}
.Grid-row:nth-child(1) .Card:nth-child(1).Card--active .Card-shadow:nth-child(3),
.Grid-row:nth-child(1) .Card:nth-child(1) .Card--active:hover .Card-shadow:nth-child(3) {
  transition: all 0.2s cubic-bezier(0.7, 0, 0.78, 1);
  transform: scale(1) translate(6%, 113%);
}
.Grid-row:nth-child(1) .Card:nth-child(1).Card--active .Card-shadow:nth-child(2),
.Grid-row:nth-child(1) .Card:nth-child(1) .Card--active:hover .Card-shadow:nth-child(2) {
  transition: all 0.2s cubic-bezier(0.7, 0, 0.78, 1) 0.1s;
  transform: scale(1) translate(6%, 223%);
}
.Grid-row:nth-child(1) .Card:nth-child(1).Card--active .Card-shadow:nth-child(1),
.Grid-row:nth-child(1) .Card:nth-child(1) .Card--active:hover .Card-shadow:nth-child(1) {
  transition: all 0.2s cubic-bezier(0.7, 0, 0.78, 1) 0.2s;
  transform: scale(2.1) translate(81%, 80%);
}
.Grid-row:nth-child(1) .Card:nth-child(2).Card--active .Card-shadow:nth-child(3),
.Grid-row:nth-child(1) .Card:nth-child(2) .Card--active:hover .Card-shadow:nth-child(3) {
  transition: all 0.2s cubic-bezier(0.7, 0, 0.78, 1);
  transform: scale(1) translate(-108%, 113%);
}
.Grid-row:nth-child(1) .Card:nth-child(2).Card--active .Card-shadow:nth-child(2),
.Grid-row:nth-child(1) .Card:nth-child(2) .Card--active:hover .Card-shadow:nth-child(2) {
  transition: all 0.2s cubic-bezier(0.7, 0, 0.78, 1) 0.1s;
  transform: scale(1) translate(-108%, 223%);
}
.Grid-row:nth-child(1) .Card:nth-child(2).Card--active .Card-shadow:nth-child(1),
.Grid-row:nth-child(1) .Card:nth-child(2) .Card--active:hover .Card-shadow:nth-child(1) {
  transition: all 0.2s cubic-bezier(0.7, 0, 0.78, 1) 0.2s;
  transform: scale(2.1) translate(26%, 80%);
}
.Grid-row:nth-child(1) .Card:nth-child(3).Card--active .Card-shadow:nth-child(3),
.Grid-row:nth-child(1) .Card:nth-child(3) .Card--active:hover .Card-shadow:nth-child(3) {
  transition: all 0.2s cubic-bezier(0.7, 0, 0.78, 1);
  transform: scale(1) translate(-222%, 113%);
}
.Grid-row:nth-child(1) .Card:nth-child(3).Card--active .Card-shadow:nth-child(2),
.Grid-row:nth-child(1) .Card:nth-child(3) .Card--active:hover .Card-shadow:nth-child(2) {
  transition: all 0.2s cubic-bezier(0.7, 0, 0.78, 1) 0.1s;
  transform: scale(1) translate(-222%, 223%);
}
.Grid-row:nth-child(1) .Card:nth-child(3).Card--active .Card-shadow:nth-child(1),
.Grid-row:nth-child(1) .Card:nth-child(3) .Card--active:hover .Card-shadow:nth-child(1) {
  transition: all 0.2s cubic-bezier(0.7, 0, 0.78, 1) 0.2s;
  transform: scale(2.1) translate(-29%, 80%);
}
.Grid-row:nth-child(2) .Card:nth-child(1).Card--active .Card-shadow:nth-child(3),
.Grid-row:nth-child(2) .Card:nth-child(1) .Card--active:hover .Card-shadow:nth-child(3) {
  transition: all 0.2s cubic-bezier(0.7, 0, 0.78, 1);
  transform: scale(1) translate(6%, -55%);
}
.Grid-row:nth-child(2) .Card:nth-child(1).Card--active .Card-shadow:nth-child(2),
.Grid-row:nth-child(2) .Card:nth-child(1) .Card--active:hover .Card-shadow:nth-child(2) {
  transition: all 0.2s cubic-bezier(0.7, 0, 0.78, 1) 0.1s;
  transform: scale(1) translate(6%, 55%);
}
.Grid-row:nth-child(2) .Card:nth-child(1).Card--active .Card-shadow:nth-child(1),
.Grid-row:nth-child(2) .Card:nth-child(1) .Card--active:hover .Card-shadow:nth-child(1) {
  transition: all 0.2s cubic-bezier(0.7, 0, 0.78, 1) 0.2s;
  transform: scale(2.1) translate(81%, 0%);
}
.Grid-row:nth-child(2) .Card:nth-child(2).Card--active .Card-shadow:nth-child(3),
.Grid-row:nth-child(2) .Card:nth-child(2) .Card--active:hover .Card-shadow:nth-child(3) {
  transition: all 0.2s cubic-bezier(0.7, 0, 0.78, 1);
  transform: scale(1) translate(-108%, -55%);
}
.Grid-row:nth-child(2) .Card:nth-child(2).Card--active .Card-shadow:nth-child(2),
.Grid-row:nth-child(2) .Card:nth-child(2) .Card--active:hover .Card-shadow:nth-child(2) {
  transition: all 0.2s cubic-bezier(0.7, 0, 0.78, 1) 0.1s;
  transform: scale(1) translate(-108%, 55%);
}
.Grid-row:nth-child(2) .Card:nth-child(2).Card--active .Card-shadow:nth-child(1),
.Grid-row:nth-child(2) .Card:nth-child(2) .Card--active:hover .Card-shadow:nth-child(1) {
  transition: all 0.2s cubic-bezier(0.7, 0, 0.78, 1) 0.2s;
  transform: scale(2.1) translate(26%, 0%);
}
.Grid-row:nth-child(2) .Card:nth-child(3).Card--active .Card-shadow:nth-child(3),
.Grid-row:nth-child(2) .Card:nth-child(3) .Card--active:hover .Card-shadow:nth-child(3) {
  transition: all 0.2s cubic-bezier(0.7, 0, 0.78, 1);
  transform: scale(1) translate(-222%, -55%);
}
.Grid-row:nth-child(2) .Card:nth-child(3).Card--active .Card-shadow:nth-child(2),
.Grid-row:nth-child(2) .Card:nth-child(3) .Card--active:hover .Card-shadow:nth-child(2) {
  transition: all 0.2s cubic-bezier(0.7, 0, 0.78, 1) 0.1s;
  transform: scale(1) translate(-222%, 55%);
}
.Grid-row:nth-child(2) .Card:nth-child(3).Card--active .Card-shadow:nth-child(1),
.Grid-row:nth-child(2) .Card:nth-child(3) .Card--active:hover .Card-shadow:nth-child(1) {
  transition: all 0.2s cubic-bezier(0.7, 0, 0.78, 1) 0.2s;
  transform: scale(2.1) translate(-29%, 0%);
}
.Grid-row:nth-child(3) .Card:nth-child(1).Card--active .Card-shadow:nth-child(3),
.Grid-row:nth-child(3) .Card:nth-child(1) .Card--active:hover .Card-shadow:nth-child(3) {
  transition: all 0.2s cubic-bezier(0.7, 0, 0.78, 1);
  transform: scale(1) translate(6%, -223%);
}
.Grid-row:nth-child(3) .Card:nth-child(1).Card--active .Card-shadow:nth-child(2),
.Grid-row:nth-child(3) .Card:nth-child(1) .Card--active:hover .Card-shadow:nth-child(2) {
  transition: all 0.2s cubic-bezier(0.7, 0, 0.78, 1) 0.1s;
  transform: scale(1) translate(6%, -113%);
}
.Grid-row:nth-child(3) .Card:nth-child(1).Card--active .Card-shadow:nth-child(1),
.Grid-row:nth-child(3) .Card:nth-child(1) .Card--active:hover .Card-shadow:nth-child(1) {
  transition: all 0.2s cubic-bezier(0.7, 0, 0.78, 1) 0.2s;
  transform: scale(2.1) translate(81%, -80%);
}
.Grid-row:nth-child(3) .Card:nth-child(2).Card--active .Card-shadow:nth-child(3),
.Grid-row:nth-child(3) .Card:nth-child(2) .Card--active:hover .Card-shadow:nth-child(3) {
  transition: all 0.2s cubic-bezier(0.7, 0, 0.78, 1);
  transform: scale(1) translate(-108%, -223%);
}
.Grid-row:nth-child(3) .Card:nth-child(2).Card--active .Card-shadow:nth-child(2),
.Grid-row:nth-child(3) .Card:nth-child(2) .Card--active:hover .Card-shadow:nth-child(2) {
  transition: all 0.2s cubic-bezier(0.7, 0, 0.78, 1) 0.1s;
  transform: scale(1) translate(-108%, -113%);
}
.Grid-row:nth-child(3) .Card:nth-child(2).Card--active .Card-shadow:nth-child(1),
.Grid-row:nth-child(3) .Card:nth-child(2) .Card--active:hover .Card-shadow:nth-child(1) {
  transition: all 0.2s cubic-bezier(0.7, 0, 0.78, 1) 0.2s;
  transform: scale(2.1) translate(26%, -80%);
}
.Grid-row:nth-child(3) .Card:nth-child(3).Card--active .Card-shadow:nth-child(3),
.Grid-row:nth-child(3) .Card:nth-child(3) .Card--active:hover .Card-shadow:nth-child(3) {
  transition: all 0.2s cubic-bezier(0.7, 0, 0.78, 1);
  transform: scale(1) translate(-222%, -223%);
}
.Grid-row:nth-child(3) .Card:nth-child(3).Card--active .Card-shadow:nth-child(2),
.Grid-row:nth-child(3) .Card:nth-child(3) .Card--active:hover .Card-shadow:nth-child(2) {
  transition: all 0.2s cubic-bezier(0.7, 0, 0.78, 1) 0.1s;
  transform: scale(1) translate(-222%, -113%);
}
.Grid-row:nth-child(3) .Card:nth-child(3).Card--active .Card-shadow:nth-child(1),
.Grid-row:nth-child(3) .Card:nth-child(3) .Card--active:hover .Card-shadow:nth-child(1) {
  transition: all 0.2s cubic-bezier(0.7, 0, 0.78, 1) 0.2s;
  transform: scale(2.1) translate(-29%, -80%);
}
.Gallery {
  display: block;
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: #f5f5f5;
  opacity: 0;
  transform: scale(1.2);
  transition: none;
  padding: 18rem 0;
  overflow-y: scroll;
}
.Gallery-header {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  background-color: #eee;
  padding-bottom: 5rem;
}
.Gallery-close {
  position: absolute;
  right: 1rem;
  top: 1rem;
  font-size: 3rem;
  opacity: 0.5;
  cursor: pointer;
}
.Gallery-close:hover {
  opacity: 0.8;
}
.Gallery-images {
  display: flex;
  width: 47rem;
  margin: 0 auto;
  justify-content: space-between;
  margin-bottom: 1rem;
}
.Gallery-images:nth-child(3) {
  transition: all 0.2s cubic-bezier(0.7, 0, 0.78, 1) 0.33s;
  opacity: 0;
  transform: translate(0, 3rem) scale(1.1);
}
.Gallery-images:nth-child(4) {
  transition: all 0.2s cubic-bezier(0.7, 0, 0.78, 1) 0.44s;
  opacity: 0;
  transform: translate(0, 3rem) scale(1.1);
}
.Gallery-images:nth-child(5) {
  transition: all 0.2s cubic-bezier(0.7, 0, 0.78, 1) 0.55s;
  opacity: 0;
  transform: translate(0, 3rem) scale(1.1);
}
.Gallery-images:nth-child(6) {
  transition: all 0.2s cubic-bezier(0.7, 0, 0.78, 1) 0.66s;
  opacity: 0;
  transform: translate(0, 3rem) scale(1.1);
}
.Gallery-left {
  flex: 1 auto;
  display: flex;
  justify-content: space-between;
  flex-direction: column;
}
.Gallery-image {
  display: block;
  width: 15rem;
  height: 9.5rem;
  transition: all 0.2s cubic-bezier(0.42, 0, 0.58, 1);
  background: #aebfc7;
  background-size: auto 100%;
  background-position: center;
  background-repeat: no-repeat;
}
.Gallery-image--primary {
  width: 31rem;
  height: 20rem;
  background-color: #673ab7;
}
.Gallery--active {
  z-index: 100;
  background: #fff;
  transform: scale(1);
  opacity: 1;
  transition: all 0.5s cubic-bezier(0.7, 0, 0.78, 1) 0.1s;
}
.Gallery--active .Gallery-close {
  display: block;
}
.Gallery--active .Gallery-images {
  opacity: 1;
  transform: none;
}

    </style>
    <script>
      function openGallery(id) {
  closeAll();
  const gallery = document.getElementById('gallery-'+id);
  const card = document.getElementById('card-'+id);
  gallery.classList.add('Gallery--active');
  card.classList.add('Card--active');
}

function closeAll() {
  const galleryActv = document.querySelector('.Gallery--active');
  const cardActv = document.querySelector('.Card--active');
  if (galleryActv) {
    galleryActv.classList.remove('Gallery--active');
  }
  if (cardActv) {
    cardActv.classList.remove('Card--active');
  }
}
    </script>
</body>

</html>