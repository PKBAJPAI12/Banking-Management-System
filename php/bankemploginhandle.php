<?php
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php';
    $employeeName = $_POST['name'];
    $employeeID = $_POST['employeeid'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM `employeedetails` WHERE employee_id='$employeeID' AND employee_name='$employeeName'";
    $result = mysqli_query($con, $sql);
    $numRows = mysqli_num_rows($result);
    if($numRows){
        $row = mysqli_fetch_assoc($result);
        $pass_db=$row['emp_pass'];
  //   $hash_db=password_hash($password,PASSWORD_DEFAULT);
            // {for Debuuging
    //   echo $pass_db;
      //  echo $hash_db;
     // echo $password;
 //       echo $pass_db;
 //       echo $hash_db; }
     //   $pass_db=$row['emp_pass'];
    //    $hash_db=password_hash($password,PASSWORD_DEFAULT);
    //  $pass_decode=password_verify($password, $pass_db);
//echo  ('value of passdecode is:' .$pass_decode.'');

        if($password==$pass_db){
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['name'] = $row['employee_name'];
            $_SESSION['accountno'] = $employeeID;
          header("Location: ../index.php");
        } 
        else{
            echo "password incorrect";
        }
          

    }
    else echo "error";

}

?>