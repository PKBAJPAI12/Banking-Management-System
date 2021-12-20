<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="bankingsystem";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . $con->connect_error);
}

?>