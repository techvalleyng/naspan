<?php 
session_start();
include('../includes/config.php');
error_reporting(0);
if(strlen($_SESSION['adminlogin'])==0)
    { 
    header('location:../index.php');
}
else{
    // For adding post  
    if(isset($_POST['add']))
    {
        $posttitle=$_POST['posttitle'];
        $category=$_POST['category'];
        $postdetails=$_POST['postdescription'];
        $arr = explode(" ",$posttitle);
        $url=implode("-",$arr);
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
            
            $status=1;
            $query=mysqli_query($con,"insert into tblposts(PostTitle,Category,PostDetails,PostUrl,Is_Active,PostImage) values('$posttitle','$category','$postdetails','$url','$status','$imgnewfile')");
            if($query)
                {
                $msg="Post successfully added ";
                header('location:../page-post-list');
                }
            else{
                $error="Something went wrong . Please try again.";    
            } 
        
        }
    }


}
?>