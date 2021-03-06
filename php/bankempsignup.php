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
    <title>Employee Signup - Banking System</title>
  </head>
  <body>
    <?php
    include '_navbar.php';

    
    if(isset($_GET['empregisteration']) && $_GET['empregisteration']=="true"){
        $password=$_GET['temppass'];
        $getsql="SELECT * FROM `employeedetails` WHERE emp_temp_pass=$password";
        $rresult=mysqli_query($con, $getsql);
       
    $row=mysqli_fetch_assoc($rresult);


        echo '<div class="alert alert-success d-flex align-items-center" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/>
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </symbol>
        </svg>
        <div>
        Employee Registeration is Successfully Done. Your Employee ID is '  .$row['employee_id'].' and Your Temporary Password is 
        ' .$_GET['temppass'].'
             <strong>Please!</strong> <a href="createemployeepass.php"> Change Your Password</a> for Secure Authentication
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>
           </div>';
      }
      else if(isset($_GET['empregisteration']) && $_GET['empregisteration']=="false"){
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
       <!-- Optional JavaScript; choose one of the two! -->
       <div class="head my-4">
        <h1 class="text-center">Bank Employee Registeration</h1>
    </div>

    
<div class="container">

<form class="row g-3" action="bankempsignuphandle.php" method="POST">

<div class="col-md-6">
<label for="inputName" class="form-label">Employee Name</label>
    <input type="text" class="form-control"  name="name" placeholder="Employee Name" aria-label=" Employee Name">
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
    <label for="inputDesignation" class="form-label">Designation</label>
    <select name="designation" id="designation" class="form-select">
      <option selected>Branch Manager</option>
      <option>Manager</option>
      <option>Deputy Manager</option>
      <option>Assistant Manager</option>
      <option>Relationship Manager</option>
      <option>Personal Banker</option>
      <option>Sr. Executive</option>
      <option>Executive</option>
      <option>Sales Manager</option>
</select>
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Employee Registeration</button>
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
