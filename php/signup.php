<?php
include 'dbconnect.php';
include 'openac.php';
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index2.css">
    <title>Banking System</title>
  </head>
  <body>
    <?php
    include '_navbar.php';
    
    if(isset($_GET['accountopening']) && $_GET['accountopening']=="true"){
        echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
                  <strong>Success!</strong> Your Bank Account is Successfully Created';
         
                  $getsql="SELECT * FROM `accountdetails` ORDER BY `accountdetails`.`accountno` DESC ";
                  $rresult=mysqli_query($con, $getsql);
                 
              $row=mysqli_fetch_assoc($rresult);

              echo ' Your Account Number is ' .$row['accountno']. ' and Your One Time Password is ' .$row['otp']. '
             <strong>Please</strong> Change Your Password';

           echo      ' <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>';
      }
      else if(isset($_GET['accountopening']) && $_GET['accountopening']=="false"){
        echo '<div class="alert alert-warning alert-dismissible fade show my-0" role="alert">
                  <strong>Please!</strong> Check Your Detail Information May be Account is Already Created with this Name and Phone Number!
               
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>';
      }
      
      
    ?>
       <!-- Optional JavaScript; choose one of the two! -->
       <div class="head my-4">
        <h1 class="text-center">Open Saving Account</h1>
    </div>

    
<div class="container">

<form class="row g-3" action="openac.php" method="POST">

<div class="col-md-6">
<label for="inputName" class="form-label">Account Holder Name</label>
    <input type="text" class="form-control"  name="name" placeholder="Account Holder Name" aria-label="Account Holder Name">
  </div>
  <div class="col-md-6">
  <label for="inputName" class="form-label">Father name</label>
    <input type="text" class="form-control" name="father" placeholder="Father name" aria-label="Father name">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" name="email"  placeholder="Email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputphone" class="form-label">Phone Number</label>
    <input type="text" name="phoneno" class="form-control" id="inputPhone">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" name="address"  class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  
  <div class="col-md-6">
    <label for="inputAge" class="form-label">Age</label>
    <input type="text"  name="age" class="form-control" id="inputAge">
  </div>
  <div class="col-md-6">
    <label for="inputAccountType" class="form-label">Choose Account Type</label>
    <select name="accounttype" id="inputAccountType" class="form-select">
      <option selected>Saving Account</option>
      <option>Current Account</option>
    </select>
  </div>
  
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        I Confirmed All Information is True      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Open Account</button>
  </div>
</form>

</div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
