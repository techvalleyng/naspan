<?php
session_start();
include('../includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:../index.php');
}
if($_GET['action']='del')
{
    $postid=intval($_GET['pid']);
    $query=mysqli_query($con,"delete from tblposts where id='$postid'");
    if($query)
    {
    $msg="Post deleted ";
    header('location:../page-post-list');
    }
    else{
    $error="Something went wrong . Please try again.";    
    } 
}

if($_GET['action']='edit')
{
    header('location:../page-post-edit');
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
    // Validation for allowed extensions .in_array() function searches an array for a specific value.
    if(!in_array($extension,$allowed_extensions))
    {
    echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
    }
    else
    {
    //rename the image file
    $imgnewfile=md5($imgfile).$extension;
    // Code for move image into directory
    move_uploaded_file($_FILES["postimage"]["tmp_name"],"../postimages/".$imgnewfile);

    $query=mysqli_query($con,"update tblposts set PostTitle='$posttitle',PostImage = '$imgnewfile', Category='$category',PostDetails='$postdetails',PostUrl='$url',Is_Active='$status' where id='$postid'");
    if($query)
    {
    $msg="Post updated ";
    header('location:../page-post-edit?pid='.$postid);
    }
    else{
    $error="Something went wrong . Please try again.";    
    } 
    }

}
?>