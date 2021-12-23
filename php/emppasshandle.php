<?php

$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php';
    

    $employeeid = $_POST['employeeid'];
    $otp = $_POST['otp'];
    $password = $_POST['password'];
    
    


    // Check whether this email exists
    $existSql = "SELECT * FROM `employeedetails` WHERE employee_id = '$employeeid' AND emp_temp_pass='$otp'";
    $result = mysqli_query($con, $existSql);
    $numRows = mysqli_num_rows($result);
    if($numRows==1){
     //   if($password){
    //        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql ="UPDATE `employeedetails` SET `emp_pass` = '$password' WHERE `employeedetails`.`employee_id` = $employeeid";
        $rresult = mysqli_query($con, $sql);
        if($rresult){
                
            header("Location: createemployeepass.php?empauthentication=true");
            exit();
         }
         else{
            $showError = "Sorry! Employee Authentication is Failed."; 
  
         }
        
        

    }
    else{
        $showError = "Sorry! Employee Authentication is Failed. Please Enter Correct Employee Details";
    }
       header("Location: createemployeepass.php?empauthentication=false&error=$showError");
    
        
               
  

}


?>