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
        <p>Update members</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item">Members</li>
        <li class="breadcrumb-item"><a href="#">Update members</a></li>
      </ul>
    </div>
    <?php if($msg){ ?>
    <div class="alert alert-success" role="alert">
    <strong>Well done!</strong> <?php echo htmlentities($msg);?>
    </div>
    <?php } ?>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Update Member Form</h3>
          <div class="tile-body">
            <?php
                $memberid=intval($_GET['mid']);
                $query=mysqli_query($con,"select tblmember.id as memberid, tblmember.*, tblmember.Firstname,tblmember.Lastname,tblmember.state,tblmember.MemberTypeId as MemberTypeId, tblmember.Gender, tblmember.YearsOfExperience, tblmembertype.memberType from tblmember left join tblmembertype on tblmembertype.id=tblmember.MemberTypeId where tblmember.id='$memberid'");
                while($row=mysqli_fetch_array($query))
                {
            ?>
            <form id="regForm" method="post" action="server/member-edit?mid=<?php echo $row['memberid'] ?>">
              <div class="row">
                <div class="form-group col-md-6">
                  <label class="control-label">First Name</label>
                  <input class="form-control" name="fname" type="text" placeholder="Enter First name" value="<?php echo $row['Firstname'] ?>">
                </div>
                <div class="form-group col-md-6">
                  <label class="control-label">Last Name</label>
                  <input class="form-control" name="lname" type="text" placeholder="Enter Last name" value="<?php echo $row['Lastname'] ?>">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label class="control-label">Email</label>
                  <input class="form-control" name="email" type="email" placeholder="Enter email address" value="<?php echo $row['Email'] ?>">
                </div>
                <div class="form-group col-md-6">
                  <label class="control-label">Phone Number</label>
                  <input class="form-control" name="phone" type="tel" placeholder="Phone Number" value="<?php echo $row['PhoneNumber'] ?>">
                </div>
              </div>
             
              <div class="row">
              <div class="form-group col-md-6">
                  <label for="marital_status">Gender</label>
                  <select class="form-control" id="gender" name="gender">
                    <option value="<?php echo $row['Gender'] ?>"><?php echo $row['Gender'] ?></option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="marital_status">Marital Status</label>
                  <select class="form-control" id="marital_status" name="mstatus">
                    <option value="<?php echo $row['MaritalStatus'] ?>"><?php echo $row['MaritalStatus'] ?></option>
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                    <option value="divorce">Divorced</option>
                    <option value="widow">Widow</option>
                    <option value="widower">Widower</option>
                    <option value="not_specified">Not Specified</option>
                  </select>
                </div>
                
              </div>
              <div class="form-group">
                <label class="control-label"> Residential Address</label>
                <textarea class="form-control" name = "residentialAddress" rows="4" placeholder="Enter your address" value="<?php echo $row['ResidentialAddress'] ?>"><?php echo $row['ResidentialAddress'] ?></textarea>
              </div>
              <div class="form-group">
                <label class="control-label"> Business Address</label>
                <textarea class="form-control" name="businessAddress" rows="4" placeholder="Enter your address" value="<?php echo $row['BusinessAddress'] ?>"><?php echo $row['BusinessAddress'] ?></textarea>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label class="control-label">State of Origin</label>
                  <select class="form-control" id="stateselect" name="state">
                    <optgroup label="Select State">
                    <option value="<?php echo $row['state'] ?>"><?php echo $row['state'] ?></option>
                      <option value="Abia">Abia</option>
                      <option value="Adamawa">Adamawa</option>
                    </optgroup>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label class="control-label">LGA of Origin</label>
                  <select class="form-control" id="lgaselect" name="lga">
                    <optgroup label="Select LGA">
                    <option value="<?php echo $row['lga'] ?>"><?php echo $row['lga'] ?></option>
                      <option value="North">North</option>
                      <option value="South">South</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label class="control-label">Years of Experience in Shea</label>
                  <select class="form-control" id="yearofexperience" name="yearsofexperience">
                  <option value="<?php echo $row['YearsOfExperience'] ?>"><?php echo $row['YearsOfExperience'] ?></option>
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

             
              <div class="tile-footer">
                <button class="btn btn-primary" type="submit" name="edit" id="addMember"><i
                    class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>
                    <!-- &nbsp;&nbsp;&nbsp;<a -->
                  <!-- class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a> -->
              </div>
            </form>
            <?php } ?>
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