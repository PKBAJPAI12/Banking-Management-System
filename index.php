<?php
include 'php/dbconnect.php';

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index2.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>PBL Bank - Banking System</title>
  </head>
  <body>
    <?php
    include 'php/_navbar.php';
    

if(isset($_SESSION['customerloggedin']) && $_SESSION['customerloggedin']==true){
   echo '<div class="topimage w3-hover-opacity">
       <div class="semibox">

      </div>
      <div class="semibox">
       <div style="margin-bottom: 2rem" class="semibox1">
       <h1 style="color:white; text-align:center ">Welcome '.$_SESSION['name']. ' in PBL Bank</h1>

       </div> 
       <div class="semibox1">
       <h2 style="color:gold; text-align:center ">Your are the Customer of PBL Bank</h2>
           <a style="color:black" href="php/userprofile.php" class="btn btn-primary topbutton">View Account Details</a>  
       </div>
      
      </div>
    </div>

   
    
    <div class="head my-4">
        <h1 class="text-center">PBL Bank Services</h1>
    </div>
<div class="section2 mx-4 my-5">
  
  

  <div class="row ">
  <div class="col colborder">
<div class="card card1" style="width: 15rem;">
<img src="img/add-user (2).png" class="card-img" alt="...">
</div>
<div class="card-body my-3">

<a href="php/userprofile.php" class=" cardbtn btn btn-primary btn1">Customer Dashboard</a>
</div>
</div>

<div class="col colborder">
<div class="card card1" style="width: 15rem;">
<img src="img/money-transfer (1).png" class="card-img" alt="...">

</div>
<div class="card-body center my-3">

<a href="php/moneytransfer.php" class="cardbtn btn btn-primary btn1">Transfer Money</a>

</div>
</div>


<div class="col colborder">
<div class="card card1" style="width: 15rem;">
<img src="img/bank-statement.png" class="card-img-top" alt="...">

</div>
<div class="card-body my-3">
<a href="php/transactionhistory.php" class="cardbtn btn btn-primary btn1" >Transaction History</a>
</div>
</div>
<div class="col colborder">
<div class="card card1" style="width: 15rem;">
<br>
<img src="img/pngaaa.com-4605854.png" class="card-img-top" alt="...">

</div>
<br>
<div class="card-body my-3">
<a href="#" class="cardbtn btn btn-primary btn1">Contact Support</a>
</div>
</div>

</div>';
}
else if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  echo '
  <div class="topimage w3-hover-opacity">
       <div class="semibox">

      </div>
      <div class="semibox">
       <div style="margin-bottom: 2rem" class="semibox1">
       <h1 style="color:white; text-align:center ">Welcome '.$_SESSION['name']. ' in PBL Bank</h1>

       </div> 
       <div class="semibox1">
       <h2 style="color:gold; text-align:center ">You are the Employee of PBL Bank</h2>
           <a style="color:black" href="php/customers.php" class="btn btn-primary topbutton">View All Customers</a>  
       </div>
      
      </div>
     
    </div>

  
    <div class="head my-4">
    <h1 class="text-center">PBL Bank Services</h1>
</div>
<div class="section2 mx-4 my-5">

  
  
  
  
  
  <div class="row ">
  <div class="col colborder">
<div class="card card1" style="width: 15rem;">
<img src="img/add-user (2).png" class="card-img" alt="...">
</div>
<div class="card-body my-3">

<a href="php/empprofile.php" class=" cardbtn btn btn-primary btn1">Employee Profile</a>
</div>
</div>

<div class="col colborder">
<div class="card card1" style="width: 15rem;">
<img src="img/group.png" class="card-img" alt="...">

</div>
<div class="card-body center my-3">

<a href="php/customers.php" class="cardbtn btn btn-primary btn1">View All Customers</a>

</div>
</div>


<div class="col colborder">
<div class="card card1" style="width: 15rem;">
<img src="img/money-transfer (1).png" class="card-img" alt="...">

</div>
<div class="card-body center my-3">

<a href="php/deposit.php" class="cardbtn btn btn-primary btn1">Deposit/Withdraw Money</a>

</div>
</div>



<div class="col colborder">
<div class="card card1" style="width: 15rem;">
<img src="img/bank-statement.png" class="card-img-top" alt="...">

</div>
<div class="card-body my-3">
<a href="php/transactionhistory.php" class="cardbtn btn btn-primary btn1" >Transaction History</a>
</div>
</div>


</div>';
}
else
   echo '
   
   <div class="topimage w3-hover-opacity">
   <div class="semibox">

  </div>
  <div class="semibox">
   <div style="margin-bottom: 2rem" class="semibox1">
   <h1 style="color:white; text-align:center ">Welcome to Our PBL Bank</h1>

   </div> 
   <div class="semibox1">
   <h2 style="color:gold; text-align:center ">Lets Save Your Money</h2>
       <a style="color:black" href="php/customersignup.php" class="btn btn-primary topbutton">Open New Account</a>  
   </div>
  
  </div>
 
</div>


<div class="head my-4">
<h1 class="text-center">PBL Bank Services</h1>
</div>
<div class="section2 mx-4 my-5">

   
   <div class="row ">
        <div class="col colborder">
<div class="card card1" style="width: 15rem;">
  <img src="img/add-user (2).png" class="card-img" alt="...">
</div>
<div class="card-body my-3">

  <a href="php/customersignup.php" class=" cardbtn btn btn-primary btn1">Open Bank Account</a>
  </div>
</div>

<div class="col colborder">
<div class="card card1" style="width: 15rem;">
  <img src="img/money-transfer (1).png" class="card-img" alt="...">
 
</div>
<div class="card-body center my-3">
    
    <a href="php/login.php" class="cardbtn btn btn-primary btn1">Transfer Money</a>
    
  </div>
</div>


<div class="col colborder">
<div class="card card1" style="width: 15rem;">
  <img src="img/bank-statement.png" class="card-img-top" alt="...">
  
</div>
<div class="card-body my-3">
  <a href="php/login.php" class="cardbtn btn btn-primary btn1" >Transaction History</a>
  </div>
</div>
<div class="col colborder">
<div class="card card1" style="width: 15rem;">
<br>
  <img src="img/pngaaa.com-4605854.png" class="card-img-top" alt="...">
  
</div>
<br>
<div class="card-body my-3">
  <a href="#" class="cardbtn btn btn-primary btn1">Contact Support</a>
  </div>
</div>

</div>';
?>
</div>



<div class="section bordersection w3-hover-opacity my-4">
  
  <br>
    <div class="section-inner">
        <div class="my-4">
          <h2 class="text-center" style="color:gold"> <strong>Our Rates</strong> & <strong>Charges</strong> </h2>
        </div>
        
    <div class="box my-4 ">
      <div class="row mx-4 my-5">
      <div class="col outercol">
           <div class="col">
             <h5 style="color:white">Sarting From</h5>
           </div>
           <div class="col">
           <h2 style="color:gold">3%</h2>
           </div>
           <div class="col">
           <h4 style="color:white">SAVINGS</h4>
           </div>
        </div>

        <div class="col outercol">
           <div class="col">
             <h5 style="color:white">Upto</h5>
           </div>
           <div class="col">
           <h2 style="color:gold">5%</h2>
           </div>
           <div class="col">
           <h4 style="color:white">FIXED DEPOSITS</h4>
           </div>
        </div>


        <div class="col outercol">
           <div class="col">
             <h5 style="color:white">Sarting From</h5>
           </div>
           <div class="col">
           <h2 style="color:gold">10%</h2>
           </div>
           <div class="col">
           <h4 style="color:white">PERSONAL LOAN</h4>
           </div>
        </div>

        <div class="col outercol">
           <div class="col">
             <h5 style="color:white"> Sarting From</h5>
           </div>
           <div class="col">
           <h2 style="color:gold">6.70%</h2>
           </div>
           <div class="col">
           <h4 style="color:white">HOME LOANS</h4>
           </div>
        </div>

      </div>
    </div>
</div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     <script src="js/jquery_min_js.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
             crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
