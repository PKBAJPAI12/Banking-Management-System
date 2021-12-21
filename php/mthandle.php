<?php

$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php';


    $sacno = $_POST['sacno'];
    $sname = $_POST['sname'];
    $racno = $_POST['racno'];
    $rname = $_POST['rname'];
    $ammount=$_POST['ammount'];

<<<<<<< HEAD
    
     
=======


>>>>>>> 0d08983a1edaa1cb0ff31aa6327dbdc340ca59f5
    // Check whether this account exists
    $sSql = "SELECT * FROM `accountdetails` WHERE accountno = $sacno AND name='$sname'";
    $sResult = mysqli_query($con, $sSql);
    $rSql = "SELECT * FROM `accountdetails` WHERE accountno = $racno AND name='$rname'";
    $rResult = mysqli_query($con, $rSql);
    $sNumRows = mysqli_num_rows($sResult);
    $rNumRows = mysqli_num_rows($rResult);
    if($sNumRows==1 && $rNumRows==1){
        $scSql="SELECT * FROM `accountdetails` WHERE accountno = $sacno";
        $scResult=mysqli_query($con,$scSql);
        $scRow=mysqli_fetch_assoc($scResult);
        $sCurrent=$scRow['current_balance'];
<<<<<<< HEAD
        if($sCurrent>=$ammount){
            $sAbal=$sCurrent-$ammount;
            $rcSql="SELECT * FROM `accountdetails` WHERE accountno = $racno";
        $rcResult=mysqli_query($con,$rcSql);
        $rcRow=mysqli_fetch_assoc($rcResult);
        $rCurrent=$rcRow['current_balance'];
        $rAbal=$rCurrent+$ammount;
      $senderSql="UPDATE `accountdetails` SET `current_balance` = $sAbal WHERE `accountdetails`.`accountno` = $sacno  ";
        $receiverSql="UPDATE `accountdetails` SET `current_balance` = $rAbal WHERE `accountdetails`.`accountno` = $racno  ";
       $result=mysqli_query($con,$senderSql);
       $receiverResult=mysqli_query($con,$receiverSql);

        if($result){
               $status="Money Transfer is Successfull"; 
            header("Location: moneytransfer.php?transfersuccess=true");
            $insertSql="INSERT INTO `transactionhistory` (`sender_acn`, `receiver_acn`,`sender_name`, `receiver_name`, `transfer_money`,`status`) VALUES 
            ('$sacno', '$racno','$sname', '$rname', '$ammount', '$status')";
         $insertResult = mysqli_query($con, $insertSql);

             exit();
         }
         else{
            $showError = "Sorry! Money Transfer is UnSuccessfull! Due to Technical Reason"; 
 
         }

        }
        else{
            $showError = "Sorry! Money Transfer is UnSuccessfull! Due to Insufficient Ammount in Your Account"; 
        }
        
        
    }
    else if($sNumRows==1 && $rNumRows!=1) {
        $showError = "Receiver Account Detail is Incorrect. Please! Enter Valid Account Details";
=======
        $sCbal=$sCurrent-$ammount;
        $rcSql="SELECT * FROM `accountdetails` WHERE accountno = $racno";
        $rcResult=mysqli_query($con,$rcSql);
        $rcRow=mysqli_fetch_assoc($rcResult);
        $rCurrent=$rcRow['current_balance'];
        $rCbal=$rCurrent+$ammount;
      $senderSql="UPDATE `accountdetails` SET `current_balance` = '$sCbal' WHERE `accountdetails`.`accountno` = $sacno  ";
        $receiverSql="UPDATE `accountdetails` SET `current_balance` = '$rCbal' WHERE `accountdetails`.`accountno` = $racno  ";
       $senderResult=mysqli_query($con,$senderSql);
        $receiverResult=mysqli_query($con,$senderSql);
    }
    else if($sNumRows==1 && $rNumRows!=1) {
        $showError = "Account not Created";
>>>>>>> 0d08983a1edaa1cb0ff31aa6327dbdc340ca59f5

    }

        else if ($sNumRows!=1 && $rNumRows==1){

<<<<<<< HEAD
            $showError = "Sender Account Detail is Incorrect. Please! Enter Valid Account Details";

        }
        else{
            $showError = "Account Detail is Incorrect. Please! Enter Valid Sender and Receiver Account Details";

        }
        $insertSql="INSERT INTO `transactionhistory` (`sender_acn`, `receiver_acn`,`sender_name`, `receiver_name`, `transfer_money`,`status`) VALUES 
        ('$sacno', '$racno','$sname', '$rname', '$ammount', '$showError')";
     $insertResult = mysqli_query($con, $insertSql);

    header("Location: moneytransfer.php?transfersuccess=false&error=$showError");
=======
            $showError = "Account not Created";

        }
        else{
            $showError = "Account not Created";

        }

    header("Location: signup.php?accountopening=false&error=$showError");
>>>>>>> 0d08983a1edaa1cb0ff31aa6327dbdc340ca59f5





}


?>