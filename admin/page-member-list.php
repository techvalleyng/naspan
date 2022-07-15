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
          <h1><i class="fa fa-dashboard"></i> Members</h1>
          <p>Members List</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">members</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Member list</h3>
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="memberlist">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Membership Type</th>
                      <th>State</th>
                      <th>Gender</th>
                      <th>Years Of Experience</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    $query=mysqli_query($con,"select tblmember.id as memberid,tblmember.Firstname,tblmember.Lastname,tblmember.state,tblmember.MemberTypeId as MemberTypeId, tblmember.Gender, tblmember.YearsOfExperience, tblmembertype.memberType from tblmember left join tblmembertype on tblmembertype.id=tblmember.MemberTypeId");
                    $rowcount=mysqli_num_rows($query);
                    if($rowcount==0)
                      {
                      ?>
                    <tr>
                      <td colspan="7" align="center"><h3 style="color:red">No record found</h3></td>
                    <tr>
                  <?php 
                    } else {
                      $count = 1;
                      while($row=mysqli_fetch_array($query))
                    { 
                  ?>
                    <tr>
                      <td><?php echo $count; ?></td>
                      <td><?php echo $row['Firstname'].' '.$row['Lastname']?></td>
                      <td><?php echo $row['memberType'] ?></td>
                      <td><?php echo $row['state'] ?></td>
                      <td><?php echo $row['Gender'] ?></td>
                      <td><?php echo $row['YearsOfExperience'] ?> Years</td>
                      <td>
                        <a href="page-member-edit?mid=<?php echo htmlentities($row['memberid']);?>">
                          <button type="button" class="btn btn-primary"> 
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            View
                          </button>
                        </a>
                      </td>
                    </tr>
                    <?php $count = $count + 1; }  }?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <?php
    include('includes/footer.php');
    ?>
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#memberlist').DataTable();</script>