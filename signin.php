<?php 
session_start();
include('includes/header.php');
if(isset($_SESSION['login']))
  {
    echo "<script type='text/javascript'> document.location = 'member_dashboard'; </script>";
  }
// include('server/login.php');
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
    <div class="col-md-6 col-lg-8 " style="margin:0px auto !important;">
        <div class="wrap d-md-flex">
            <div class="img" style="background-image: url(assets/images/bg-1.jpg);">
            </div>
            <div class="login-wrap p-4 p-md-5">
                <div class="d-flex">
                    <div class="w-100">
                        <h3 class="mb-4">Sign In</h3>
                    </div>
                    
                </div>
                <form action="server/login" method="post" class="signin-form">
                    <div class="form-group mb-3">
                        <label class="label" for="name">Email</label>
                        <input type="text" class="form-control" placeholder="Email" name="email" required>
                    </div>
                    <div class="form-group mb-3">
                        <label class="label" for="password">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="login" class="form-control btn btn-secondary rounded submit px-3">Sign In</button>
                    </div>
                    <div class="form-group d-md-flex">
                        <div class="w-50 text-left">
                            <!-- <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                <input type="checkbox" checked>
                                <span class="checkmark"></span>
                            </label> -->
                        </div>
                        <div class="w-50 text-md-right" >
                            <a href="#" style="color: green;">Forgot Password</a>
                        </div>
                    </div>
                </form>
                <p class="text-center" style="">Not a member? <a href="become" style="color: green;">Become a member</a></p>
            </div>
        </div>
    </div>

    <!--//contact-->
  <!--/w3l-footer-29-main-->
  <?php
  include('includes/footer.php');
  ?>
  <!-- //footer-29 block -->
  <?php
  include('includes/scripts.php');
  ?>