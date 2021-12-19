<?php

$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php';
    

    $name = $_POST['name'];
    $father_name = $_POST['father'];
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $account = $_POST['accounttype'];
    $randnumber=rand(111111,999999);



    // Check whether this email exists
    $existSql = "select * from `accountdetails` WHERE name = '$name' AND phoneno='$phoneno'";
    $result = mysqli_query($con, $existSql);
    $numRows = mysqli_num_rows($result);
    if($numRows>0){
        $showError = "Account is Already Created with this Account Name and Phone Number! Try with New Phone Number";
    }
    else{
        
            $sql = "INSERT INTO `accountdetails` (`name`, `father_name`,`email`, `phoneno`, `address`, `age`,`account`,`otp`) VALUES ('$name', '$father_name','$email', '$phoneno', '$address', '$age','$account', '$randnumber')";
            $result = mysqli_query($con, $sql);
            
       
            if($result){
                
               header("Location: signup.php?accountopening=true");
                exit();
            }
            

        
        else{
           
            $showError = "Account not Created"; 
            
        }
    }
        header("Location: signup.php?accountopening=false&error=$showError");
    
        
               
  

}


?>