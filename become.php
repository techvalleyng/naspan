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
      <h3 class="hny-title mb-lg-5 mb-4">Membership Application Form</h3>
      <div class="contacts12-main mb-5">
        <form action="server/register" method="post">
          <div class="main-input">
            Personnal Information
            <div class="d-grid">
              <input type="text" name="fname" id="fname" placeholder="First Name" class="contact-input" />
              <input type="text" name="lname" id="lname" placeholder="Last Name" class="contact-input" />
            </div>
            <div class="d-grid">
              <input type="text" name="phone" id="phone" placeholder="Phone Number" class="contact-input" />
              <input type="email" name="email" id="email" placeholder="Your email address" class="contact-input"
                required />
                <div id="emailStatus"></div>
            </div>
            <div class="d-grid">
              <select class="form-control" name="gender">
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
              <input type="password" name="password" id="password" placeholder="Password" class="contact-input"
                required />
            </div>
            <div class="d-grid">
              <select class="form-control" name="mstatus">
                <option value="">Select Marital Status</option>
                <option value="single">Single</option>
                <option value="married">Married</option>
                <option value="divorce">Divorced</option>
                <option value="widow">Widow</option>
                <option value="widower">Widower</option>
              </select>
              <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password"
                class="contact-input" required />
            </div>
            <textarea class="contact-textarea" name="residentialAddress" id="residentialAddress"
              placeholder="Residential Address" required></textarea>
            <textarea class="contact-textarea" name="businessAddress" id="businessAddress"
              placeholder="Business Address" required></textarea>
            <div class="d-grid">
              <select class="form-control" name="state">
                <option value="state">Select State</option>
                <option value="abia">Abia</option>
                <option value="adamawa">Adamawa</option>
              </select>
              <select class="form-control" name="lga">
                <option value="">Select LGA</option>
                <option value="north">North</option>
                <option value="south">South</option>
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
                  <input type="checkbox"><span class="label-text"> Buying & Selling</span>
                </label>
                <label>
                  <input type="checkbox"><span class="label-text"> Processing</span>
                </label>
                <label>
                  <input type="checkbox"><span class="label-text"> Exporting</span>
                </label>
                <label>
                  <input type="checkbox"><span class="label-text"> Transporting</span>
                </label>
                <label>
                  <input type="checkbox"><span class="label-text"> Packing</span>
                </label>
                <label>
                  <input type="checkbox"><span class="label-text"> Grinding and Granding</span>
                </label>
              </div>
            </div>
          </div>

          <div class="text-right">
            <button class="btn btn-style btn-secondary btn-contact" name="register" type="submit">Register</button>
          </div>
        </form>
      </div>
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
    $(function () {
      $('.navbar-toggler').click(function () {
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
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });

    // Password Confirm
    var password = document.getElementById("password")
      , confirm_password = document.getElementById("cpassword");

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
    $(document).on('input','#email',function(e){
      let emailInput = $('#email').val();
      let msg;
      if(emailInput.length==0){
        msg="<span style='color:red'>Enter Email</span>";
      }
      // else if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/).test(emailInput)){
      //   msg="<span style='color:red'>Email is not Valid</span>";
      // }
      else{
        checkEmail(emailInput);
      }
      $('#emailStatus').html(msg);
    });

    function checkEmail(emailInput){
       $.ajax({
        method:"POST",
        url: "email_exist.php",
        data:{emailId:emailInput},
        success: function(data){
          $('#emailStatus').html(data);
        }
      });
    }
  </script>

</body>

</html>
  
  
