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

    <title>Profile - Banking System</title>
  </head>
  <body>
    <?php
    include '_navbar.php';

 if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){ 
   $id=$_SESSION['accountno'] ;
  $sql="SELECT * from `employeedetails` WHERE employee_id=$id";
  $result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
  
/*if(isset($_GET['id'])) {
$id=$_GET['id'];
$sql="SELECT * from `accountdetails` WHERE accountno=$id;
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
}*/





echo '<div class="employeeimage w3-hover-opacity">
       <div class="semibox">

      </div>
      <div class="semibox">
       <div style="margin-bottom: 2rem" class="semibox1">
       <h1 style="color:white; text-align:center ">Welcome '.$_SESSION['name']. ' in PBL Bank</h1>

       </div> 
       <div class="semibox1">
       <h2 style="color:gold; text-align:center ">Employee Details</h2>
           <a style="color:black" href="customers.php" class="btn btn-primary topbutton">View All Customers</a>  
       </div>
      
      </div>
     
    </div>

<div class="container">
  <div class="head my-4">
    <h1 class="text-center">Employee Details</h1>
</div>
</div>

<div class="container my-4">
<div class="row">
<div class="col-3 box1">
<div class="boximage">
<img style="width:15rem" src="../img/pngaaa.com-5461970.png" alt="" srcset="">
</div>
</div>
<div class="col-8 box2">
<div class="row mx-3 my-5">
<div class="col-6">
<h3 class="userheading">Employee Name: </h3>
</div>
<div class="col-6">
<h3 class="userheading">' .$_SESSION['name']. '</h3>

</div>

<div class="col-6">
<h3 class="userheading">Father Name: </h3>
</div>
<div class="col-6">
<h3 class="userheading">' .$row['father_name'].'</h3>

</div>


<div class="col-6">
<h3 class="userheading">Employee ID: </h3>
</div>
<div class="col-6">
<h3 class="userheading">' .$row['employee_id']. '</h3>

</div>

<div class="col-6">
<h3 class="userheading">Age: </h3>
</div>
<div class="col-6">
<h3 class="userheading">' .$row['age'].'</h3>

</div>


<div class="col-6">
<h3 class="userheading">Employee Email ID: </h3>
</div>
<div class="col-6">
<h3 class="userheading">' .$row['email'].'</h3>

</div>

<div class="col-6">
<h3 class="userheading">Employee Phone Number: </h3>
</div>
<div class="col-6">
<h3 class="userheading">' .$row['phoneno'].'
</h3>

</div>



<div class="col-6">
<h3 class="userheading">Designation: </h3>
</div>
<div class="col-6">
<h3 class="userheading">' .$row['designation'].'</h3>

</div>


<div class="col-12">
<a style="color:black" href="createemployeepass.php" class="btn btn-primary topbutton">Change Password</a>
</div>
</div>

</div>
</div>
</div>
';
 }
?>
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
