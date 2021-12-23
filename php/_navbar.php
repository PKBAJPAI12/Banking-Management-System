<?php
session_start();
echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">';
  
  $word = "/php/";
  $link = "http";
  $link .= $_SERVER['HTTP_HOST'];
  $link .= $_SERVER['REQUEST_URI'];

  if(strpos($link, $word) == false){
    

echo    '<img src="img/bank.png" class="img1" alt="" srcset="">
    <b style="margin-left:2rem"><a class="navbar-brand" href="./index.php">PBL BANK</a></b>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

        <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
          </li>';
        }
          else {
            echo    '<img src="../img/bank.png" class="img1" alt="" srcset="">
            <b style="margin-left:2rem"><a class="navbar-brand" href="../index.php">PBL BANK</a></b>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        
                <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                  </li>'; 
          }
       if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)  {
        if(strpos($link, $word) == false){
    echo '<li class="nav-item">
    <a class="nav-link active" href="php/empprofile.php">Employee Profile</a>
  </li>
    <li class="nav-item">
          <a class="nav-link active" href="php/customers.php">View All Customers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="php/moneytransfer.php">Money Transfer</a>
        </li>
        <li class="nav-item">
        <a href="php/logout.php" ><img src="img/logout (1).png" class="img1" alt="" srcset=""></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active">Logout</a>
        </li>
        ';
      }
      else{
        echo '
        <li class="nav-item">
    <a class="nav-link active" href="empprofile.php">Employee Profile</a>
  </li>
        <li class="nav-item">
          <a class="nav-link active" href="customers.php">View All Customers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="moneytransfer.php">Money Transfer</a>
        </li>
        <li class="nav-item">
          <a href="logout.php" ><img src="../img/logout (1).png" class="img1" alt="" srcset=""></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active">Logout</a>
          </li>
        ';
      }
    }
    else   if(isset($_SESSION['customerloggedin']) && $_SESSION['customerloggedin']==true){
      if(strpos($link, $word) == false){ 

        echo    '
        <li class="nav-item">
      <a class="nav-link active" href="php/userprofile.php">Profile</a>
    </li>
  <li class="nav-item">
      <a class="nav-link active" href="php/moneytransfer.php">Money Transfer</a>
    </li>
        <li class="nav-item">
          <a class="nav-link active" href="php/transactionhistory.php">Transaction History</a>
        </li>
        
        <li class="nav-item">
        <a href="php/logout.php" ><img src="img/logout (1).png" class="img1" alt="" srcset=""></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active">Logout</a>
        </li>
        ';
      }
      else{
        echo    '   <li class="nav-item">
        <a class="nav-link active" href="userprofile.php">Profile</a>
      </li>
    <li class="nav-item">
        <a class="nav-link active" href="moneytransfer.php">Money Transfer</a>
      </li>
          <li class="nav-item">
            <a class="nav-link active" href="transactionhistory.php">Transaction History</a>
          </li>
          
          <li class="nav-item">
          <a href="logout.php" ><img src="../img/logout (1).png" class="img1" alt="" srcset=""></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active">Logout</a>
          </li>
        ';
  
      }
      }
        else{
          if(strpos($link, $word) == false){ 
          echo   ' 
          <li class="nav-item">
          <a class="nav-link active" href="php/customersignup.php">Open Bank Account</a>
          <li>
          <li class="nav-item">
          <a class="nav-link active" href="#">Contact</a>
          <li>
          <li class="nav-item">
          <a href="php/login.php" ><img src="img/login (2).png" class="img1" alt="" srcset=""></a>
          
          </li>
          <li class="nav-item">
          <a class="nav-link active">Login</a>
          <li>';

        }
        else{
          echo    ' 
          
          <li class="nav-item">
          <a class="nav-link active" href="customersignup.php">Open Bank Account</a>
          <li>
          <li class="nav-item">
          <a class="nav-link active" href="#">Contact</a>
          <li>
          <li class="nav-item">
          <a href="login.php" ><img src="../img/login (2).png" class="img1" alt="" srcset=""></a>
          
          </li>
          <li class="nav-item">
          <a class="nav-link active">Login</a>
          <li>';
        }
      }

     echo '</ul>
        
    </div>
  </div>
</nav>';

?>
