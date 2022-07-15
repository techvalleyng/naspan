<?php
 session_start();
//Database Configuration File
include('../includes/config.php');
//error_reporting(0);
if(isset($_POST['register']))
  {
 
    // Getting username/ email and password
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $password=md5($_POST['password']);
    $mstatus=$_POST['mstatus'];
    $residentialAddress=$_POST['residentialAddress'];
    $businessAddress=$_POST['businessAddress'];
    $state=$_POST['state'];
    $lga=$_POST['lga'];
    $yearsofexperience=$_POST['yearsofexperience'];
    // Fetch data from database on the basis of username/email and password
    $query=mysqli_query($con,"insert into tblmember(Firstname,Lastname,PhoneNumber,Email,Gender,Password,MaritalStatus,ResidentialAddress,BusinessAddress,YearsOfExperience,state,lga,MemberTypeId) values('$fname','$lname','$phone','$email','$gender','$password','$mstatus','$residentialAddress','$businessAddress','$yearsofexperience','$state','$lga', 1)");
    if($query)
    {
    echo "<script type='text/javascript'> document.location = '../signin'; </script>";
    }
    else{
    echo "<script type='text/javascript'> alert("+mysqli_error($con);+") </script>";
    } 
    
}

?>