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
    <title>Profile - Banking System</title>
  </head>
  <body>
    <?php
    include '_navbar.php';

if(isset($_GET['id'])) {
$id=$_GET['id'];
$sql="SELECT * from `accountdetails` WHERE accountno=$id";
    $result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
    echo '<div class="head my-4">
        <h1 class="text-center">Welcome! ' .$row['name']. ' in Our PBL Bank User DashBoard</h1>
    </div>


    <div class="container">
    <div class="head my-4">
    <h1 class="text-center">Account Details</h1>
    </div>

    <div class="card" style="width: 50rem;">
    <div class="card" style="width: 8rem;">
  <img src="./img/pngaaa.com-4390037.png" class="card-img-top" alt="User Profile">
</div>

<div class="container">
<h1>Account Number : ' .$row['accountno']. '</h1>
<h1>Account Holder Name : ' .$row['name']. '</h1>
<h1>Father Name : ' .$row['father_name']. '</h1>
<h1>Age : ' .$row['age']. '</h1>
<h1>Email : ' .$row['email'].' </h1>
<h1>PhoneNo : ' .$row['phoneno'].' </h1>
<h1>Resedential Address : ' .$row['address'].' </h1>
<h1>Account Type : ' .$row['account'].' </h1>
<h1>Current Balance : ' .$row['current_balance']. ' </h1>
</div>

</div>';
}
?>
<div class="container">
  <div class="head my-4">
    <h1 class="text-center">Your Transaction History</h1>
</div>



</div>


    </div>
       <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
