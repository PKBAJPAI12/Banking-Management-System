<?php

$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php';
    

    $accountno = $_POST['accountno'];
    $otp = $_POST['otp'];
    $password = $_POST['password'];
    
    


    // Check whether this email exists
    $existSql = "SELECT * FROM `accountdetails` WHERE accountno = '$accountno' AND otp='$otp'";
    $result = mysqli_query($con, $existSql);
    $numRows = mysqli_num_rows($result);
    if($numRows==1){
        if($password){
            $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql ="UPDATE `accountdetails` SET `password` = '$hash' WHERE `accountdetails`.`accountno` = $accountno ";
        $result = mysqli_query($con, $sql);
        if($result){
                
            header("Location: createpassword.php?getpassword=true");
            exit();
         }
         else{
            $showError = "Password is not created Due to Technical Issue"; 
  
         }
        }
        else{
            $showError = "Please Enter Your Password"; 
  
        }

    }
    else{
        $showError = "Sorry! Password is Created. Please Enter Correct Account Details";
    }
       header("Location: createpassword.php?getpassword=false&error=$showError");
    
        
               
  

}


?>