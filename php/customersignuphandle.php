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
        $showError = "Check Your Information May be Account is Already Created with this Name and Phone Number!";
    }
    else{
        
            $sql = "INSERT INTO `accountdetails` (`name`, `father_name`,`email`, `phoneno`, `address`, `age`,`account`,`otp`) VALUES ('$name', '$father_name','$email', '$phoneno', '$address', '$age','$account', '$randnumber')";
            $result = mysqli_query($con, $sql);
            
       
            if($result){
                

               header("Location: customersignup.php?accountopening=true&otp=$randnumber");
                exit();
            }
            

        
        else{
           
            $showError = "Account not Created"; 
            
        }
    }
        header("Location: customersignup.php?accountopening=false&error=$showError");
    
        
               
  

}


?>