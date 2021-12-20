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
    <link rel="stylesheet" href="css/index2.css">
    <title>Banking System</title>
  </head>
  <body>
    <?php
    include '_navbar.php';
    ?>
       <!-- Optional JavaScript; choose one of the two! -->
       <div class="head my-4">
        <h1 class="text-center">Money Transfer</h1>
    </div>
      <div class="container">
        <form action="mthandle.php" method="POST">

        <div class="card" style="width: 18rem;">

            <div class="card-body">
                <h5 class="card-title">Money Transfer From</h5>
                <label for="acno">Account Number:</label>
                <input type="text" class="form-control" id="fname" name="sacno" value="' .$row['accountno']. '"><br><br>
                <label for="lname">Account Name:</label>
                <input type="text"  class="form-control" id="lname" name="sname" value="' .$row['name']. '"><br><br>


            </div>
        </div>
            <div class="card" style="width: 18rem;">

                <div class="card-body">
                    <h5 class="card-title">Money Transfer To</h5>
                    <label for="acno">Account Number:</label>
                    <input type="text" class="form-control"  id="rname" name="racno" ><br><br>
                    <label for="lname">Account Name:</label>
                    <input type="text"  class="form-control" id="cname" name="rname"><br><br>
                    <label for="lname">Ammount Transfer:</label>
                    <input type="text"  class="form-control" id="pname" name="ammount"><br><br>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Transfer Money</button>

        </form>
    </div>';
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
