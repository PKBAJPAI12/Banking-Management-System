<?php
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php';
    $accountName = $_POST['name'];
    $accountNumber = $_POST['accountno'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM `accountdetails` WHERE accountno='$accountNumber' AND name='$accountName'";
    $result = mysqli_query($con, $sql);
    $numRows = mysqli_num_rows($result);

    if($numRows){
        $row = mysqli_fetch_assoc($result);
        $pass_db=$row['password'];
        $hash_db=password_hash($password,PASSWORD_DEFAULT);
       // {for Debuuging
      //  echo $pass_db;
       // echo $hash_db;
 //       echo $password;
 //       echo $pass_db;
 //       echo $hash_db; }
       $pass_decode=password_verify($password, $pass_db);
//echo  ('value of passdecode is:' .$pass_decode.'');
        if($pass_decode){
            session_start();
            $_SESSION['customerloggedin'] = true;
            $_SESSION['name'] = $row['name'];
            $_SESSION['father'] = $row['father_name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['phoneno'] = $row['phoneno'];
            $_SESSION['address'] = $row['address'];
            $_SESSION['age'] = $row['age'];
            $_SESSION['accounttype'] = $row['account'];
            $_SESSION['currentbalance'] = $row['current_balance'];
            $_SESSION['accountno'] = $row['accountno'];



           header("Location: ../index.php");
            
        } 
        else{
            echo "incorrect pass";
        }
          

    }
    else{
        echo "error";
    }

}

?>