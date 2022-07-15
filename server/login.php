<?php
 session_start();
//Database Configuration File
include('../includes/config.php');
//error_reporting(0);
if(isset($_POST['login']))
  {
 
    // Getting username/ email and password
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    // Fetch data from database on the basis of username/email and password
$sql =mysqli_query($con,"SELECT Email, Password, Firstname, MemberTypeId FROM tblmember WHERE (Email='$email')");
 $num=mysqli_fetch_array($sql);
if($num>0)
{
$hashpassword=($num['Password']); // Hashed password fething from database
//verifying Password
if ($password == $hashpassword) {
$_SESSION['login']=$_POST['email'];
$_SESSION['fname'] = $num['Firstname'];
$_SESSION['fullname'] = $num['Firstname'].' '.$num['Lastname'];
    echo "<script type='text/javascript'> document.location = '../member_dashboard'; </script>";
  } else {
    echo "<script>alert('Wrong Password');</script>";
  }
}
//if username or email not found in database
else{
echo "<script>alert('User not registered with us');</script>";
  }
 
}

if(isset($_SESSION['login']))
  {
    echo "<script type='text/javascript'> document.location = 'dashboard'; </script>";
  }
?>