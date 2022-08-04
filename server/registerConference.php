<?php
 session_start();
//Database Configuration File
include('../includes/config.php');
//error_reporting(0);
if(isset($_POST['register']))
  {
 
    // Getting username/ email and password
    echo $fname=$_POST['fname'];
    echo $lname=$_POST['lname'];
    echo $phone=$_POST['phone'];
    echo $email=$_POST['email'];
    echo $gender=$_POST['gender'];
    $areas=$_POST['area'];
    foreach($areas as $area){
        echo $area;
    }
    echo $residentialAddress=$_POST['residentialAddress'];
    echo $businessAddress=$_POST['businessAddress'];
    echo $state=$_POST['state'];
    echo $lga=$_POST['lga'];
    echo $yearsofexperience=$_POST['yearsofexperience'];
    echo $attend=$_POST['attend'];
    echo $remark=$_POST['remark'];
    $training=$_POST['training'];

    if(!empty($training) && $training=="basic"){
        echo "pay Additional Fee for Basic Training";
    }
    else{
        echo "pay additional fee for MSME Training";
    }
    if(empty($training)){
        $training = "none";
    }
    // Fetch data from database on the basis of username/email and password
    $query=mysqli_query($con,"insert into tblindividualconference(Firstname,Lastname,PhoneNumber,Email,Gender,ResidentialAddress,BusinessAddress,YearsOfExperience,state,lga, attended, remark, training, paymentStatus) values('$fname','$lname','$phone','$email','$gender','$residentialAddress','$businessAddress','$yearsofexperience','$state','$lga', '$attend', '$remark', '$training', 0)");
    if($query)
    {
        $_SESSION["mem_email"] = $email;
        $_SESSION["mem_name"] = $fname." ".$lname;
        $_SESSION["mem_training"] = $training;
          header("Location: ../conference_success");
    }
    else{
        $_SESSION["err"] = mysqli_error($con);
        header("Location: ../conference_registration");
    }  
}

?>