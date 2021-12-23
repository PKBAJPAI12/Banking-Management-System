<?php
include 'dbconnect.php';
?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/index2.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>Banking System</title>
  </head>
  <body>
    <?php
    include '_navbar.php';

    

    
    $getsql="SELECT * FROM `transactionhistory` ORDER BY `transactionhistory`.`transaction_id` DESC ";
    $rresult=mysqli_query($con, $getsql);
   
$row=mysqli_fetch_assoc($rresult);

if(isset($_GET['depositsuccess']) && $_GET['depositsuccess']=="true"){
  echo '<div class="alert alert-success d-flex align-items-center" role="alert">
  <svg xmlns="http://www.w3.org/2000/svg" class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/>
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  </svg>
  <div>
    Transaction is <strong>Successfully</strong> Completed. Your Transaction ID is '.$row['transaction_id'].' 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

  </div>
</div>
  ';
}
if(isset($_GET['depositsuccess']) && $_GET['depositsuccess']=="false"){
  echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
  <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</symbol>
  </svg>
  <div>
  '
  .$_GET['error'].' Your Transaction Id is '.$row['transaction_id'].'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

  </div>
</div>

  ';
}
    
if(isset($_GET['withdrawsuccess']) && $_GET['withdrawsuccess']=="true"){
    echo '<div class="alert alert-success d-flex align-items-center" role="alert">
    <svg xmlns="http://www.w3.org/2000/svg" class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/>
    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
    </symbol>
    </svg>
    <div>
      Transaction is <strong>Successfully</strong> Completed. Your Transaction ID is '.$row['transaction_id'].' 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  
    </div>
  </div>
    ';
  }

  if(isset($_GET['withdrawsuccess']) && $_GET['withdrawsuccess']=="false"){
    echo '<div class="alert alert-success d-flex align-items-center" role="alert">
    <svg xmlns="http://www.w3.org/2000/svg" class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/>
    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
    </symbol>
    </svg>
    <div>
      Transaction is <strong>Successfully</strong> Completed. Your Transaction ID is '.$row['transaction_id'].' 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  
    </div>
  </div>
    ';
  }
/*

    if(isset($_GET['id'])) {
        $id=$_GET['id'];
        $sql="SELECT * FROM `accountdetails` WHERE accountno=$id";
        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_assoc($result);
        // <!-- Optional JavaScript; choose one of the two! -->
     echo   '<div class="head my-4">
        <h1 class="text-center">Money Transfer</h1>
    </div>
      <div class="container">
        <form action="mthandle.php" method="POST">
<div class="">
        <div class="card" style="width: 18rem;">

            <div class="card-body">
                <h5 class="card-title">Money Transfer From</h5>
                <label for="acno">Account Number:</label>
                <input type="text" class="form-control" id="fname" name="sacno" value="' .$row['accountno']. '"><br><br>
                <label for="lname">Account Name:</label>
                <input type="text"  class="form-control" id="lname" name="sname" value="' .$row['name']. '"><br><br>


            </div>
        </div>
            <div class="card" style="width: 18rem;">

                <div class="card-body">
                    <h5 class="card-title">Money Transfer To</h5>
                    <label for="acno">Account Number:</label>
                    <input type="text" class="form-control"  id="rname" name="racno" ><br><br>
                    <label for="lname">Account Name:</label>
                    <input type="text"  class="form-control" id="cname" name="rname"><br><br>
                    <label for="lname">Ammount Transfer:</label>
                    <input type="text"  class="form-control" id="pname" name="ammount"><br><br>
                </div>
            </div>
</div>
            <button type="submit" class="btn btn-primary">Transfer Money</button>

        </form>
    </div>';
    }
    */


?>

<?php

  
    echo '
<div class="transferimage w3-hover-opacity">
    <div class="semibox">

   </div>
   <div class="semibox">
    <div style="margin-bottom: 2rem" class="semibox1">
    <h1 style="color:white; text-align:center ">Welcome '.$_SESSION['name']. ' in PBL Bank</h1>

    </div> 
    <div class="semibox1">
    <h2 style="color:gold; text-align:center ">Deposit and Withdraw</h2>
        <a style="color:black" href="transactionhistory.php" class="btn btn-primary topbutton">Transaction History</a>  
    </div>
   
   </div>
  
 </div>


 <div class="head my-4">
        <h1 class="text-center">Deposit and Withdraw</h1>
    </div>
      <div class="container">
<div class="row">


        <div class="card" style="width: 18rem;">
        <form action="deposithandle.php" method="POST">
            <div class="card-body">
                <h5 class="card-title">Deposit Money</h5>
                <label for="acno">Account Number:</label>
                <input type="text" class="form-control" id="fname" name="sacno"><br><br>
                <label for="lname">Account Name:</label>
                <input type="text"  class="form-control" id="lname" name="sname" ><br><br>
                <label for="lname">Ammount Deposit:</label>
                <input type="text"  class="form-control" id="lname" name="deposit" ><br><br>


            </div>
            <button type="submit" class=" btn btn-primary">Deposit Money</button>
        </form>

        </div>
        
        <div class="card" style="width: 18rem;">

        <div class="card-body">
            <img style="width:18rem" src="../img/money-transfer (1).png" alt="" srcset="">
        </div>
    </div>
   

            <div class="card" style="width: 18rem;">
            <form action="withdrawhandle.php" method="POST">

                <div class="card-body">
                    <h5 class="card-title">Withdraw Money</h5>
                    <label for="acno">Account Number:</label>
                    <input type="text" class="form-control"  id="rname" name="racno" ><br><br>
                    <label for="lname">Account Name:</label>
                    <input type="text"  class="form-control" id="cname" name="rname"><br><br>
                    <label for="lname">Ammount Withdraw:</label>
                    <input type="text"  class="form-control" id="pname" name="withdraw"><br><br>
                </div>
                <button type="submit" class=" btn btn-primary">Withdraw Money</button>

                </form>
            </div>
</div>


    </div>
    <br>
    <br>

    ';

  

?>
<!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
