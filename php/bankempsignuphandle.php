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
    $designation = $_POST['designation'];
    $randnumber=rand(1111111,9999999);



    // Check whether this email exists
    $existSql = "SELECT * FROM `employeedetails` WHERE employee_name = '$name' AND phoneno='$phoneno'";
    $result = mysqli_query($con, $existSql);
    $numRows = mysqli_num_rows($result);
    if($numRows>0){
        $showError = "Check Your Information May be Employee Registeration is Already Exist with this Name and Phone Number!";
    }
    else{
        
            $sql = "INSERT INTO `employeedetails` (`employee_name`, `father_name`,`email`, `phoneno`, `address`, `age`,`designation`,`emp_temp_pass`) 
            VALUES ('$name', '$father_name','$email', '$phoneno', '$address', '$age','$designation', '$randnumber')";
            $result = mysqli_query($con, $sql);
       
            if($result){
                $getsql="SELECT * FROM `employeedetails` WHERE employee_name='$name'  AND phoneno='$phoneno'";
                $getresult=mysqli_query($con, $getSql);
                $getrow=mysqli_fetch_assoc($getresult);
               header("Location: bankempsignup.php?empregisteration=true&temppass=$randnumber");
                exit();
            }
            

        
        else{
           
            $showError = "Sorrry! Employee Registeration is UnSuccessfull"; 
            
        }
    }
        header("Location: bankempsignup.php?empregisteration=false&error=$showError");
    
        
               
  

}


?>