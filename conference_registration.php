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
            <h3 class="hny-title mb-lg-5 mb-4">Conference Registration</h3>
            <?php if($_SESSION["err"] == "pending"){ ?> 
            <h4 class="text-danger"> Your Registration Request was not successfully submitted. Retry </h4>    
            <?php 
                unset($_SESSION["err"]);
            } ?>
            <div class="contacts12-main mb-5">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Individual
                            Participant</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Corporate Participant(s)</a>
                    </li>

                </ul><!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="tabs-1" role="tabpanel">
                        <form action="server/registerConference" method="post" name="conferenceRegisterIndividualForm" id="conferenceRegisterIndividualForm">
                            <input type="hidden" name="individualForm" id="individualForm" value="1">
                            <div class="main-input">
                                <h3 class="title-small">Personnal Information</h3>
                                <div class="d-grid">
                                    <input type="text" name="fname" id="fname" placeholder="First Name"
                                        class="contact-input" />
                                    <input type="text" name="lname" id="lname" placeholder="Last Name"
                                        class="contact-input" />
                                </div>
                                <div class="d-grid">
                                    <input type="text" name="phone" id="phone" placeholder="Phone Number"
                                        class="contact-input" />
                                    <input type="email" name="email" id="email" placeholder="Your email address"
                                        class="contact-input" required />
                                    <div id="emailStatus"></div>
                                </div>
                                <div class="d-grid">
                                    <select class="form-control" name="gender">
                                        <option value="">Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                <textarea class="contact-textarea" name="residentialAddress" id="residentialAddress"
                                    placeholder="Residential Address" required></textarea>
                                <textarea class="contact-textarea" name="businessAddress" id="businessAddress"
                                    placeholder="Business Address" required></textarea>
                                <div class="d-grid">
                                    <select onchange="toggleLGA(this);" name="state" id="state" class="form-control">
                                        <option value="" selected="selected">- Select -</option>
                                        <option value="Abia">Abia</option>
                                        <option value="Adamawa">Adamawa</option>
                                        <option value="AkwaIbom">AkwaIbom</option>
                                        <option value="Anambra">Anambra</option>
                                        <option value="Bauchi">Bauchi</option>
                                        <option value="Bayelsa">Bayelsa</option>
                                        <option value="Benue">Benue</option>
                                        <option value="Borno">Borno</option>
                                        <option value="Cross River">Cross River</option>
                                        <option value="Delta">Delta</option>
                                        <option value="Ebonyi">Ebonyi</option>
                                        <option value="Edo">Edo</option>
                                        <option value="Ekiti">Ekiti</option>
                                        <option value="Enugu">Enugu</option>
                                        <option value="FCT">FCT</option>
                                        <option value="Gombe">Gombe</option>
                                        <option value="Imo">Imo</option>
                                        <option value="Jigawa">Jigawa</option>
                                        <option value="Kaduna">Kaduna</option>
                                        <option value="Kano">Kano</option>
                                        <option value="Katsina">Katsina</option>
                                        <option value="Kebbi">Kebbi</option>
                                        <option value="Kogi">Kogi</option>
                                        <option value="Kwara">Kwara</option>
                                        <option value="Lagos">Lagos</option>
                                        <option value="Nasarawa">Nasarawa</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Ogun">Ogun</option>
                                        <option value="Ondo">Ondo</option>
                                        <option value="Osun">Osun</option>
                                        <option value="Oyo">Oyo</option>
                                        <option value="Plateau">Plateau</option>
                                        <option value="Rivers">Rivers</option>
                                        <option value="Sokoto">Sokoto</option>
                                        <option value="Taraba">Taraba</option>
                                        <option value="Yobe">Yobe</option>
                                        <option value="Zamfara">Zamafara</option>
                                    </select>
                                    <select class="form-control select-lga" name="lga" id="lga" required >
                                    </select>
                                </div>
                                <div class="d-grid">
                                    <select class="form-control" name="yearsofexperience">
                                        <option value="">Years of Experience in Shea</option>
                                        <option value="1-2">1-2 Years</option>
                                        <option value="3-5">3-5 Years</option>
                                        <option value="6-10">6-10 Years</option>
                                        <option value="10+">10+ Years</option>
                                    </select>
                                    <div class="animated-checkbox">
                                        <h6>Area of Expertise in Shea </h6>
                                        <label>
                                            <input type="checkbox" id="area[]" name="area[]" value="Buying & Selling"><span class="label-text"> Buying & Selling</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="area[]" name="area[]" value="Processing"><span class="label-text"> Processing</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="area[]" name="area[]" value="Exporting"><span class="label-text"> Exporting</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="area[]" name="area[]" value="Transporting"><span class="label-text"> Transporting</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="area[]" name="area[]" value="Packing"><span class="label-text"> Packing</span>
                                        </label>
                                        <label>
                                            <input type="checkbox" id="area[]" name="area[]" value="Grinding and Granding"><span class="label-text"> Grinding and Granding</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <select class="form-control" name="attend">
                                        <option value="">Did you attend 2nd Annual Shea Conference?</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                    <textarea class="contact-textarea" name="remark" id="remark" placeholder="Your Remark"></textarea>
                                </div>
                                <h3>Training Information</h3>
                                <p>Training is optional for participant but you can select a training of your choice
                                    which comes with a benefit</p>
                                <div class="d-grid">
                                    <select class="form-control" name="training">
                                        <option value="">Select Training (Optional)</option>
                                        <option value="basic">Basic Traing- Cost Additional 25,000</option>
                                        <option value="msme">MSME Specialised Training Cost Additional 35, 000</option>
                                    </select>

                                </div>
                            </div>

                            <div class="text-right">
                                <button class="btn btn-style btn-secondary btn-contact" name="register"
                                    type="submit">Register to Attend</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="tabs-2" role="tabpanel">
                        <p>Second Panel</p>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!--//contact-->

    <!--/w3l-footer-29-main-->
    <!--//w3l-bottom-->
    <?php
        include('includes/footer.php');
    ?>
    <script src="assets/js/lga.js"></script>
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

    // Password Confirm
    var password = document.getElementById("password"),
        confirm_password = document.getElementById("cpassword");

    function validatePassword() {
        if (password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
        } else {
            confirm_password.setCustomValidity('');
        }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
    </script>
    <!--//MENU-JS-->

    <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
    $(document).on('input', '#email', function(e) {
        let emailInput = $('#email').val();
        let msg;
        if (emailInput.length == 0) {
            msg = "<span style='color:red'>Enter Email</span>";
        }
        // else if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/).test(emailInput)){
        //   msg="<span style='color:red'>Email is not Valid</span>";
        // }
        else {
            checkEmail(emailInput);
        }
        $('#emailStatus').html(msg);
    });

    function checkEmail(emailInput) {
        $.ajax({
            method: "POST",
            url: "email_exist.php",
            data: {
                emailId: emailInput
            },
            success: function(data) {
                $('#emailStatus').html(data);
            }
        });
    }
    </script>

</body>

</html>