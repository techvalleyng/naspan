<?php 
session_start();
include('includes/config.php');
include('includes/header.php');
?>

<body>
    <!--header-->
    <?php
  include('includes/nav.php');
  ?>
    <!-- //header -->
    <!-- about breadcrumb -->
    <section class="w3l-about-breadcrumb text-left">
        <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
            <div class="container">
                <h2 class="title">Membership</h2>
                <ul class="breadcrumbs-custom-path mt-2">
                    <li><a href="#url">Home</a></li>
                    <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Membership </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //about breadcrumb -->
    <!-- /contact-->
    <div class="contact-form py-5" id="contact">
        <div class="container py-lg-5 py-md-4">
            <h3 class="hny-title mb-lg-5 mb-4">Conference Registration Details</h3>
            <h4> Name: <?php echo $_SESSION["mem_name"]; ?>  </h4>
            <h4> Email: <?php echo $_SESSION["mem_email"]; ?>  </h4>

            <p>Your Registration Request has been successfully submitted.</p>
            <p>To complete the registration, kindly proceed and make payments necessary</p>            
            <h4>Participation Fees for Individual:</h4>
            <p>
                <ul>
                    <li>Members : NGN 10,000</li>
                    <li>Non-Members: NGN 35,000</li>
                </ul>
            </p>
            <?php $training = $_SESSION["mem_training"]; 
             if($training == "basic"){ ?>
            <p>
                <h4>Training Fees Due</h4>
                <ul>
                    <li>Basic : NGN 25,000/individual</li>
                </ul>
            </p>
            <?php } ?>
            <?php 
            if($training == "msme"){ 
            ?>
            <p>
                <h4>Training Fees Due</h4>
                <ul>
                    <li>MSME : NGN 35,000/individual</li>
                </ul>
            </p>
            <?php } ?>
            
            <p>Payment for registration for the conference can be made at the official office of NASPAN or via Remita Payment, categories and payment type can be found</p>
            <p><strong><u>Account Details for making payment</u></strong></p>
            <p><strong>Bank: First Bank</strong></p><p><strong>Account Number:2019741282</strong></p>
            <p><strong>Account Name: National Shea Products Association of Nigeria (NASPAN)</strong></p> <p></p>
            <p>OR </p><p><br></p>
            <p><strong><u>Remita Payment Details</u></strong></p>
            <p><strong>Step 1</strong>: go to remita.net then bills &amp; purchases, select pay a biller and server “NASPAN”</p>
            <p><strong>Step 2</strong>: Select the required services you intend to make payment and select options accordingly</p>
            <p><strong>Step 3</strong>: Ensure to register with NASPAN and use same email address as the one registered with NASPAN when filling details</p>
            <p><strong>Step 4</strong>: Click on payment option of your choice</p>
            <p><strong>Step 5</strong>: Once process is completed you have fully paid your service/product</p>
            <p><strong>Step 6</strong>: Send remita receipt to the above contact numbers or email</p><p><br></p>            
        </div>
    </div>

    <!--//contact-->

    <!--/w3l-footer-29-main-->
    <!--//w3l-bottom-->
    <?php
        include('includes/footer.php');
    ?>
    <!--/w3l-footer-29-main-->

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>

</html>