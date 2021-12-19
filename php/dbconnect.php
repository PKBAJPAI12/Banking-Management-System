<?php
$servername = "localhost";
$username = "root";
$password = "8572008222";
$dbname="bankingsystem";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . $con->connect_error);
}

?>