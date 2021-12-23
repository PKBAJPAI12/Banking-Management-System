<?php

$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php';


    $racno = $_POST['racno'];
    $rname = $_POST['rname'];
    $withdraw=$_POST['withdraw'];

    
     
    // Check whether this account exists
//    $sSql = "SELECT * FROM `accountdetails` WHERE accountno = $sacno AND name='$sname'";
  //  $sResult = mysqli_query($con, $sSql);
   $rSql = "SELECT * FROM `accountdetails` WHERE accountno = $racno AND name='$rname'";
    $rResult = mysqli_query($con, $rSql);
   // $sNumRows = mysqli_num_rows($sResult);
   $rNumRows = mysqli_num_rows($rResult);
    if($rNumRows==1){
     //   $scSql="SELECT * FROM `accountdetails` WHERE accountno = $sacno";
       // $scResult=mysqli_query($con,$scSql);
       // $scRow=mysqli_fetch_assoc($scResult);
      //  $sCurrent=$scRow['current_balance'];
      $rcResult=mysqli_query($con,$rcSql);
       $rcRow=mysqli_fetch_assoc($rcResult);
       $rCurrent=$rcRow['current_balance'];
        if($rCurrent>=$withdraw){
        //   $sAbal=$sCurrent+$deposit;
           // $rcSql="SELECT * FROM `accountdetails` WHERE accountno = $racno";
       // $rcResult=mysqli_query($con,$rcSql);
      //  $rcRow=mysqli_fetch_assoc($rcResult);
     //   $rCurrent=$rcRow['current_balance'];
      $rAbal=$rCurrent-$withdraw;
    //  $senderSql="UPDATE `accountdetails` SET `current_balance` = $sAbal WHERE `accountdetails`.`accountno` = $sacno  ";
        $receiverSql="UPDATE `accountdetails` SET `current_balance` = $rAbal WHERE `accountdetails`.`accountno` = $racno  ";
   //    $result=mysqli_query($con,$senderSql);
       $receiverResult=mysqli_query($con,$receiverSql);

        if($receiverResult){
               $status="Money Withdraw is Successfull"; 
            header("Location: deposit.php?withdrawsuccess=true");
            $insertSql="INSERT INTO `transactionhistory` (`sender_acn`, `receiver_acn`,`sender_name`, `receiver_name`, `transfer_money`,`status`) VALUES 
            ('$racno', '5000000457','$rname', 'po', '$withdraw', '$status')";
         $insertResult = mysqli_query($con, $insertSql);

             exit();
         }
        
         else{
            $showError = "Sorry! Money Deposit is UnSuccessfull! Due to Technical Reason"; 
 
         } 
        }
        else{
            $showError = "Sorry! Your Account Not Sufficient ammount for Withdraw"; 

        }
        
    }

        $insertSql="INSERT INTO `transactionhistory` (`sender_acn`, `receiver_acn`,`sender_name`, `receiver_name`, `transfer_money`,`status`) VALUES 
            ('$racno', '5000000457','$sname', 'po', '$withdraw', '$showError')";
     $insertResult = mysqli_query($con, $insertSql);

    header("Location: deposit.php?withdrawsuccess=false&error=$showError");





}


?>