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

    if(isset($_GET['getpassword']) && $_GET['getpassword']=="true"){
        echo '<div class="alert alert-success d-flex align-items-center" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/>
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </symbol>
        </svg>
        <div>  Your have <strong>Successfully!</strong> Created Your Bank Account Password 
             
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>
           </div>';
      }
      
      else if(isset($_GET['getpassword']) && $_GET['getpassword']=="false"){
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
      </symbol>
        </svg>
        <div>
        '
        .$_GET['error'].' 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      
        </div>
      </div>';
      }
     

    ?>
    <div class="passwordimage w3-hover-opacity">
    <div class="semibox">

   </div>
   <div class="semibox">
    <div style="margin-bottom: 2rem" class="semibox1">
    <h1 style="color:white; text-align:center ">Welcome in PBL Bank</h1>

    </div> 
    <div class="semibox1">
    <h2 style="color:gold; text-align:center ">Please Change Password</h2>
        <a style="color:black" href="customersignup.php" class="btn btn-primary topbutton">Open New Account</a>  
    </div>
   
   </div>
  
 </div>



       <!-- Optional JavaScript; choose one of the two! -->
       <div class="head my-4">
        <h1 class="text-center">Create/Change Bank Account Password</h1>
    </div>

    
<div class="container">

<form style="width:70%; margin:auto" class="row g-3" action="cpass.php" method="POST">

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

    <div class="col-12 formcoli">
    <button style="padding:1rem" type="submit" class="formsubmitbtn btn btn-primary">Create Password</button>
  </div>
</form>

</div>
<br>
<br>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
