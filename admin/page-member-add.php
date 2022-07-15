<?php
session_start();
include('includes/header.php');
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['adminlogin'])==0)
  { 
header('location:index.php');
}
?>

  <body class="app sidebar-mini">
    <!-- Navbar-->
    <?php
    include('includes/nav.php');
    ?>
    <!-- Sidebar menu-->
    <?php
    include('includes/sidebar.php');
    ?>
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-edit"></i> Membership</h1>
        <p>Add members</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item">Members</li>
        <li class="breadcrumb-item"><a href="#">Add members</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Add Member Form</h3>
          <div class="tile-body">
            <form id="regForm" method="post" action="server/member-add">
              <div class="row">
                <div class="form-group col-md-6">
                  <label class="control-label">First Name</label>
                  <input class="form-control" name="fname" type="text" placeholder="Enter First name">
                </div>
                <div class="form-group col-md-6">
                  <label class="control-label">Last Name</label>
                  <input class="form-control" name="lname" type="text" placeholder="Enter Last name">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label class="control-label">Email</label>
                  <input class="form-control" name="email" type="email" placeholder="Enter email address">
                </div>
                <div class="form-group col-md-6">
                  <label class="control-label">Phone Number</label>
                  <input class="form-control" name="phone" type="tel" placeholder="Phone Number">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label class="control-label">Gender</label>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="gender" value="male">Male
                    </label>
                    <label class="form-check-label" style="margin-left: 30px;">
                      <input class="form-check-input" type="radio" name="gender" value="female">Female
                    </label>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label class="control-label">Password</label>
                  <input class="form-control" name="password" type="password" placeholder="Enter Password">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="marital_status">Marital Status</label>
                  <select class="form-control" id="marital_status" name="mstatus">
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                    <option value="divorce">Divorced</option>
                    <option value="widow">Widow</option>
                    <option value="widower">Widower</option>
                    <option value="not_specified">Not Specified</option>
                  </select>
                </div>
                <!-- <div class="form-group col-md-6">
                  <label class="control-label">Confirm Password</label>
                  <input class="form-control" type="password" placeholder="Confirm Password">
                </div> -->
              </div>
              <div class="form-group">
                <label class="control-label"> Residential Address</label>
                <textarea class="form-control" name = "residentialAddress" rows="4" placeholder="Enter your address"></textarea>
              </div>
              <div class="form-group">
                <label class="control-label"> Business Address</label>
                <textarea class="form-control" name="businessAddress" rows="4" placeholder="Enter your address"></textarea>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label class="control-label">State of Origin</label>
                  <select class="form-control" id="stateselect" name="state">
                    <optgroup label="Select State">
                      <option value="Abia">Abia</option>
                      <option value="Adamawa">Adamawa</option>
                    </optgroup>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label class="control-label">LGA of Origin</label>
                  <select class="form-control" id="lgaselect" name="lga">
                    <optgroup label="Select LGA">
                      <option value="North">North</option>
                      <option value="South">South</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label class="control-label">Years of Experience in Shea</label>
                  <select class="form-control" id="yearofexperience" name="yearsofexperience">
                    <option value="1-2">1-2 Years</option>
                    <option value="3-5">3-5 Years</option>
                    <option value="6-10">6-10 Years</option>
                    <option value="10+">10+ Years</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label class="control-label">Area of Expertise in Shea</label>
                  <div class="animated-checkbox">
                    <label>
                      <input type="checkbox"><span class="label-text" style="margin-right: 5px;">Buying & Selling
                      </span>
                      <input type="checkbox"><span class="label-text" style="margin-right: 5px;">Processing </span>
                      <input type="checkbox"><span class="label-text" style="margin-right: 5px;">Exporting </span>
                    </label>
                    <label>
                      <input type="checkbox"><span class="label-text" style="margin-right: 5px;">Transporting </span>
                      <input type="checkbox"><span class="label-text" style="margin-right: 5px;">Picking </span>
                      <input type="checkbox"><span class="label-text" style="margin-right: 5px;">Grinding & Granding
                      </span>
                    </label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label">Picture</label>
                <input class="form-control" type="file">
              </div>
              <div class="tile-footer">
                <button class="btn btn-primary" type="submit" name="register" id="addMember"><i
                    class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>
                    <!-- &nbsp;&nbsp;&nbsp;<a -->
                  <!-- class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a> -->
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="clearix"></div>
    </div>
  </main>
  <!-- Essential javascripts for application to work-->
  <?php
    include('includes/footer.php');
  ?>