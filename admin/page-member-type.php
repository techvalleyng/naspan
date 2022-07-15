<?php
session_start();
include('includes/header.php');
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['adminlogin'])==0)
  { 
header('location:index.php');
}
if($_GET['action']='edit')
  {
if(isset($_POST['edit']))
  {
  
    $membertypeid=intval($_GET['mtid']);
    $membertype=$_POST['membertype'];
    $fee=$_POST['fee'];
    $query=mysqli_query($con,"update tblmembertype set memberType='$membertype', fee='$fee' where id='$membertypeid'");
    if($query)
    {
    $msg="membertype Updated ";
    // header('location:../page-member-type');
    }
    else{
    $error="Something went wrong . Please try again.";    
    } 
  }
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
        <h1><i class="fa fa-dashboard"></i> Membership</h1>
        <p>New Membership Type</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">membership type</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="tile">
          <h3 class="tile-title">Recent Membership Type</h3>
          <table class="table table-hover table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Member Type</th>
                <th>Fee (NGN)</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                <?php
                $query=mysqli_query($con,"select * from tblmembertype");
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
                    <td><?php echo $row['memberType'] ?></td>
                    <td><?php echo $row['fee'] ?></td>
                    <td>
                      <a href="?mtid=<?php echo htmlentities($row['id']);?>&&action=edit" onclick="$('#edit-membertype').style.display='none'">
                        <button type="button" class="btn btn-primary"> 
                          <i class="fa fa-edit" aria-hidden="true"></i>
                          Edit
                        </button>
                      </a>
                      <a href="server/membertype-add.php?mtid=<?php echo htmlentities($row['id']);?>&&action=del" onclick="return confirm('Do you reaaly want to delete ?')" style="color:white;">
                        <button type="button" class="btn btn-danger">
                          <i class="fa fa-trash" aria-hidden="true"></i>
                          Delete
                        </button>
                      </a>
                    </td>
                </tr>
                <?php $count = $count + 1; }  }?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-6">
        <div class="tile">

          <div class="tile-title-w-btn">
            <h3 class="title">New Membership Type</h3>
            <!-- <p><a class="btn btn-primary icon-btn" href=""><i class="fa fa-plus"></i> </a></p> -->
          </div>
          <div class="tile-body">
            <form action="server/membertype-add" method="post">
              <div class="form-group">
                <label class="control-label">Membership Type</label>
                <div class="form-group">
                  <label class="sr-only" for="exampleInputAmount">Member type</label>
                  <div class="input-group">
                    <input class="form-control" id="exampleInputAmount" name="membertype" type="text" placeholder="Member Type">
                  </div>
                </div>
                <div class="form-group">
                  <label class="sr-only" for="exampleInputAmount">Fee (NGN)</label>
                  <div class="input-group">
                    <input class="form-control" id="exampleInputAmount" name="fee" type="number" placeholder="Membership Fee">
                  </div>
                </div>
                <div class="form-group align-self-end">
                  <button class="btn btn-primary" type="submit" name="add"><i class="fa fa-plus"></i>Add</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-6" id="edit-membertype">
        <div class="tile">

          <div class="tile-title-w-btn">
            <h3 class="title">Update Membership Type</h3>
            <!-- <p><a class="btn btn-primary icon-btn" href=""><i class="fa fa-plus"></i> </a></p> -->
          </div>
          <div class="tile-body">
            <?php
              $membertypeid=intval($_GET['mtid']);
              $query=mysqli_query($con,"select * from tblmembertype where id='$membertypeid'");
              while($row=mysqli_fetch_array($query)){
            ?>
            <form action=""  method="post">
              <div class="form-group">
                <label class="control-label">Membership Type</label>
                <div class="form-group">
                  <label class="sr-only" for="exampleInputAmount">Member type</label>
                  <div class="input-group">
                    <input class="form-control" id="exampleInputAmount" name="membertype" type="text" placeholder="Member Type" value="<?php echo htmlentities($row['memberType']);?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="sr-only" for="exampleInputAmount">Fee (NGN)</label>
                  <div class="input-group">
                    <input class="form-control" id="exampleInputAmount" name="fee" type="number" placeholder="Membership Fee" value="<?php echo htmlentities($row['fee']);?>">
                  </div>
                </div>
                <div class="form-group align-self-end">
                  <button class="btn btn-primary" type="submit" name="edit"><i class="fa fa-plus"></i>Update</button>
                </div>
              </div>
            </form>
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    
  </main>
  <!-- Essential javascripts for application to work-->
  <?php
    include('includes/footer.php');
  ?>
  