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
        $sql ="UPDATE `accountdetails` SET `password` = '$password' WHERE `accountdetails`.`accountno` = $accountno ";
        $result = mysqli_query($con, $sql);
        if($result){
                
            header("Location: createpassword.php?bankdetails=true");
            exit();
         }
         else{
            $showError = "Password is not created Due to Technical Issue"; 
  
         }

    }
    else{
        $showError = "Your Bank Account Details is Incorrect";
    }
       header("Location: createpassword.php?bankdetails=false&error=$showError");
    
        
               
  

}


?>