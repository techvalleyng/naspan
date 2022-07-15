<?php
include('../includes/config.php');
if(isset($_POST['edit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $mstatus=$_POST['mstatus'];
    $residentialAddress=$_POST['residentialAddress'];
    $businessAddress=$_POST['businessAddress'];
    $state=$_POST['state'];
    $lga=$_POST['lga'];
    $yearsofexperience=$_POST['yearsofexperience'];
    $memberid=intval($_GET['mid']);

    $query=mysqli_query($con,"update tblmember set Firstname='$fname',Lastname = '$lname', PhoneNumber='$phone',Email='$email',Gender='$gender',MaritalStatus='$mstatus',ResidentialAddress='$residentialAddress',BusinessAddress='$businessAddress',state='$state',lga='$lga',YearsOfExperience = '$yearsofexperience' where id='$memberid'");
    if($query)
    {
    $msg="Member updated ";
    header('location:../page-member-edit?mid='.$memberid);
    }
    else{
    $error="Something went wrong . Please try again.";    
    } 
    

}
?>