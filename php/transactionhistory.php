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
    
?>
<?php
if(isset($_SESSION['customerloggedin']) && $_SESSION['customerloggedin']==true){
echo '<div class="transactionimage w3-hover-opacity">
    <div class="semibox">

   </div>
   <div class="semibox">
    <div style="margin-bottom: 2rem" class="semibox1">
    <h1 style="color:white; text-align:center ">Welcome '.$_SESSION['name']. ' in PBL Bank</h1>

    </div> 
    <div class="semibox1">
    <h2 style="color:gold; text-align:center ">Account Details</h2>
        <a style="color:black" href="../index.php" class="btn btn-primary topbutton">Go To Home</a>  
    </div>
   


   </div>
  
 </div>


             <div class="head my-4">
        <h1 class="text-center">Transaction History</h1>
    </div>
<br>

    <div class="container">
    <h2 class="text-center">Send Transaction</h2>
  <br>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Receiver Name</th>
      <th scope="col">Receiver Account No</th>
      <th scope="col">Transaction ID</th>
        <th scope="col">Time</th>
      <th scope="col">Transfer Money</th>
      <th scope="col">Status</th>

    </tr>
  </thead>
  <tbody>';

   
  
  $acn=$_SESSION['accountno'];
$sql="SELECT * FROM `transactionhistory` WHERE sender_acn=$acn";
$result=mysqli_query($con,$sql); 
while($row = mysqli_fetch_assoc($result)){
echo "<tr>        
            <td>" .$row['receiver_name']. "</td>
            <td >" .$row['receiver_acn']. "</td>
            <td >" .$row['transaction_id']. "</td>
            <td >" .$row['time']. "</td>
            <td >" .$row['transfer_money']. "</td>
            <td>" .$row['status']. "</td>
            
        </tr>";

}
        
 
 echo '</tbody>
</table>

    </div>   
    
    <br>
    <br>
    <div class="container">
    <h2 class="text-center">Received Transaction</h2>
<br>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Receiver Name</th>
      <th scope="col">Receiver Account No</th>
      <th scope="col">Transaction ID</th>
        <th scope="col">Time</th>
      <th scope="col">Transfer Money</th>
      <th scope="col">Status</th>

    </tr>
  </thead>
  <tbody>';

   
  
$sql="SELECT * FROM `transactionhistory` WHERE receiver_acn=$acn";
$result=mysqli_query($con,$sql); 
while($row = mysqli_fetch_assoc($result)){
echo "<tr>        
            <td>" .$row['sender_name']. "</td>
            <td >" .$row['sender_acn']. "</td>
            <td >" .$row['transaction_id']. "</td>
            <td >" .$row['time']. "</td>
            <td >" .$row['transfer_money']. "</td>
            <td>" .$row['status']. "</td>
            
        </tr>";

}
        
 
 echo '</tbody>
</table>

<br>
<br>
    
    ';
}
else if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  echo '<div class="transactionimage w3-hover-opacity">
    <div class="semibox">

   </div>
   <div class="semibox">
    <div style="margin-bottom: 2rem" class="semibox1">
    <h1 style="color:white; text-align:center ">Welcome '.$_SESSION['name']. ' in PBL Bank</h1>

    </div> 
    <div class="semibox1">
    <h2 style="color:gold; text-align:center ">Transaction History</h2>
        <a style="color:black" href="../index.php" class="btn btn-primary topbutton">Go To Home</a>  
    </div>
   


   </div>
  
 </div>


             <div class="head my-4">
        <h1 class="text-center">Transaction History</h1>
    </div>
<br>

    <div class="container">
    <h2 class="text-center">All Transaction</h2>
  <br>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Sender Account No</th>
      <th scope="col">Receiver Account No</th>
      <th scope="col">Transaction ID</th>
        <th scope="col">Time</th>
      <th scope="col">Transfer Money</th>
      <th scope="col">Status</th>

    </tr>
  </thead>
  <tbody>';

   
  
$sql="SELECT * FROM `transactionhistory`";
$result=mysqli_query($con,$sql); 
while($row = mysqli_fetch_assoc($result)){
echo "<tr>        
            <td>" .$row['sender_acn']. "</td>
            <td >" .$row['receiver_acn']. "</td>
            <td >" .$row['transaction_id']. "</td>
            <td >" .$row['time']. "</td>
            <td >" .$row['transfer_money']. "</td>
            <td>" .$row['status']. "</td>
            
        </tr>";

}
        
 
 echo '</tbody>
</table>

    </div>   
    
    <br>
    <br>';

}
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
