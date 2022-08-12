<?php
if(isset($_POST['submit1'])){
    
    $fname=   $_POST['fname']  ;
    $lname=  $_POST['lname']   ;
    $email=  $_POST['email']   ;
    $password=   $_POST['password']  ;
    $cnfpassword= $_POST['cnfpassword']    ;
    $phno= $_POST['phno']    ;
    $state=  $_POST['state']   ;
    $contry= $_POST['contry']    ;
    $pincode=$_POST['pincode'];
    $occupation=    $_POST['occupation'] ;
    $rcode=  $_POST['rcode']   ;

    
include 'conn.php';
// require_once 'functions.php';





if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    header("location:signup.php?error=invalid email");
    exit();
}
if ($password !==  $cnfpassword){
    header("location:signup.php?error=password dosent match");
    exit();
}
if ( strlen($phno)!==10 ){
    header("location:signup.php?error=phone number length is not 10");
    exit();
}

// checking and conforming email (validation)
$sql="SELECT * FROM `login` WHERE `email` LIKE '$email'";
$result=mysqli_query($conn,$sql);
if (mysqli_fetch_assoc($result)>0  ){
    

    header("location:signup.php?error=email already taken");
    exit();
}
//creating referal code 
function random_strings($length_of_string) 
{ 
    $str_result = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890'; 
    return substr(str_shuffle($str_result), 0, $length_of_string); 
} 

// This function will generate 
// Random string of length 10 
$refferlcode= random_strings(12); 


$sql="INSERT INTO `login` (`id`, `username`, `email`, `password`, `access`, `firstname`, `lastname`, `state`, `country`, `pincode`, `occupation`, `intrest`, `referalcode1`, `referalcode2`, `paid`, `active`)
 VALUES (NULL, '$email', '$email', '$password', NULL, '$fname', '$lname', '$state', '$contry', '$pincode', '$occupation', NULL,'$refferlcode', '$rcode', NULL, NULL);";
if (mysqli_query($conn, $sql)) {
    header("location:regsuc.php?error=successfully registered");    
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }



echo "so far everything is good ";

}else{
    header("location:signup.php");
    exit();
}