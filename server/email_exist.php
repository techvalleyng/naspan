<?php
include("../config.php");

if(!empty(isset($_POST['emailId'])) && isset($_POST['emailId'])){

   $emailInput= $_POST['emailId'];
   checkEmail($conn, $emailInput);
  
}


function checkEmail($conn, $emailInput){

  $query = "SELECT email FROM users WHERE email='$emailInput'";
  $result = $conn->query($query);
  if ($result->num_rows > 0) {
    echo "<span style='color:red'>This Email is alredy exists </span>";
  }
}
?>