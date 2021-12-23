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
    

echo
'<div class="customerimage w3-hover-opacity">
    <div class="semibox">

   </div>
   <div class="semibox">
    <div style="margin-bottom: 2rem" class="semibox1">
    <h1 style="color:white; text-align:center ">Welcome ' .$_SESSION['name']. ' in PBL Bank</h1>

    </div> 
    <div class="semibox1">
    <h2 style="color:gold; text-align:center ">Our Customers</h2>
        <a style="color:black" href="../index.php" class="btn btn-primary topbutton">Go to Home</a>  
    </div>
   
   </div>
  
 </div>


<br>


    <div class="head my-4">
        <h1 class="text-center">Customers Details</h1>
    </div>

    <div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Account No</th>
      <th scope="col">Account Holder</th>
      <th scope="col">Email</th>
        <th scope="col">Account Type</th>
      <th scope="col">Current Balance</th>
      <th scope="col">Actions</th>

    </tr>
  </thead>
  <tbody>';


   
$sql="SELECT * FROM `accountdetails`";
$result=mysqli_query($con,$sql); 
while($row = mysqli_fetch_assoc($result)){
echo "<tr>        
            <td>" .$row['accountno']. "</td>
            <td >" .$row['name']. "</td>
            <td >" .$row['phoneno']. "</td>
            <td >" .$row['account']. "</td>
            <td>" .$row['current_balance']. "</td>";

      echo " <td>
            '<a href='userprofile.php?id={$row['accountno']}' class='btn btn-primary'>Select</a>
            <a href='moneytransfer.php?id={$row['accountno']}' class='btn btn-primary'>Money Transfer</a>'
            </td>
            
        </tr>";

}
  echo '        
  </tbody>
</table>

    </div>';
    ?>
       <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../js/jquery_min_js.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
