<?php

$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php';


    $sacno = $_POST['sacno'];
    $sname = $_POST['sname'];
    $racno = $_POST['racno'];
    $rname = $_POST['rname'];
    $ammount=$_POST['ammount'];



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

    }

        else if ($sNumRows!=1 && $rNumRows==1){

            $showError = "Account not Created";

        }
        else{
            $showError = "Account not Created";

        }

    header("Location: signup.php?accountopening=false&error=$showError");





}


?>