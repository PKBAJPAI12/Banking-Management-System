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
    <link rel="stylesheet" href="./css/index2.css">
    <title>Banking System</title>
  </head>
  <body>
    <?php
    include '_navbar.php';

    if(isset($_GET['bankdetails']) && $_GET['bankdetails']=="true"){
        echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
                   Your have <strong>Successfully!</strong> Created Your Bank Account Password
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>';
      }
      else if(isset($_GET['bankdetails']) && $_GET['bankdetails']=="false"){
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
        <h1 class="text-center">Create Account Password</h1>
    </div>

    
<div class="container">

<form class="row g-3" action="cpass.php" method="POST">

  <div class="col-md-12">
    <label for="accno" class="form-label">Account Number</label>
    <input type="text" name="accountno"  placeholder="Account Number" class="form-control" id="inputAccountNo">
  </div>
  <div class="col-md-12">
    <label for="otp" class="form-label">OTP</label>
    <input type="text" name="otp" placeholder="OTP" class="form-control" id="otp">
  </div>
  <div class="col-md-12">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control"  placeholder="Enter Password" id="exampleInputPassword1">
  </div>

    <div class="col-12">
    <button type="submit" class="btn btn-primary">Create Password</button>
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
