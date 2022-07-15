<?php
session_start();
include('includes/header.php');
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['adminlogin'])==0)
  { 
header('location:index.php');
}
if(isset($_POST['edit']))
{
    $posttitle=$_POST['posttitle'];
    $category=$_POST['category'];
    $postdetails=$_POST['postdescription'];
    $arr = explode(" ",$posttitle);
    $url=implode("-",$arr);
    $status=1;
    $postid=intval($_GET['pid']);

    $imgfile=$_FILES["postimage"]["name"];
    // get the image extension
    $extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
    // allowed extensions
    $allowed_extensions = array(".jpg","jpeg",".png",".gif");
    
    $imgnewfile=md5($imgfile).$extension;
    move_uploaded_file($_FILES["postimage"]["tmp_name"],"./postimages/".$imgnewfile);

    $query=mysqli_query($con,"update tblposts set PostTitle='$posttitle',PostImage = '$imgnewfile', Category='$category',PostDetails='$postdetails',PostUrl='$url',Is_Active='$status' where id='$postid'");
    if($query)
    {
    $msg="Post updated ";
    }
    else{
    $error="Something went wrong . Please try again.";    
    } 
    // }

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
                <h1><i class="fa fa-dashboard"></i> Post</h1>
                <p>Edit Post</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="#">post</a></li>
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
                    <h3 class="tile-title">New Post </h3>
                    <div class="tile-body">
                    <?php
                        $postid=intval($_GET['pid']);
                        $query=mysqli_query($con,"select tblposts.id as postid,tblposts.PostImage,tblposts.PostTitle as title, tblposts.Category, tblposts.PostDetails,tblcategory.CategoryName as category,tblcategory.id as catid,tblsubcategory.SubCategoryId as subcatid,tblsubcategory.Subcategory as subcategory from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join tblsubcategory on tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.id='$postid' and tblposts.Is_Active=1 ");
                        while($row=mysqli_fetch_array($query))
                        {
                    ?>
                        <form method="post" enctype="multipart/form-data" action="">
                            <div class="form-group">
                                <label class="control-label">Post Title</label>
                                <input class="form-control" type="text" placeholder="Enter post Title" name="posttitle" value="<?php echo $row['title'] ?>">
                            </div>
                            <!-- <div class="form-group">
                                <label class="control-label">Post Descriptioin</label>
                                <textarea class="form-control" rows="4" placeholder="Enter Meta Description"></textarea>
                            </div> -->
                            <div class="form-group">
                                <label class="control-label">Post Picture/Thumbnail</label><br>
                                <img src="postimages/<?php echo $row['PostImage'] ?>" width="150px">
                                <input class="form-control" type="file" name="postimage" value="<?php echo $row['PostImage'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="post_cat">Post Category</label>
                                <select class="form-control" id="post_cat" name="category">
                                    <option value="<?php echo $row['Category'] ?>"><?php echo $row['Category'] ?></option>
                                    <option value="news">News/Events</option>
                                    <option value="articles">Articles</option>
                                    <option value="press_release">Press Release</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Post Description</label>
                                <textarea class="form-control" name="postdescription" id="editor" rows="30"><?php echo $row['PostDetails'] ?></textarea>
                            </div>
                            <button class="btn btn-primary" type="submit" name="edit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Post</button>
                        </form>
                    <?php } ?>   
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <?php
    include('includes/footer.php');
    ?>