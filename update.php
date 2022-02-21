<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rec";
  
// Create connection
$conn = new mysqli($servername, 
    $username, $password, $dbname);

$id = $_POST['empid'];
$name = $_POST['ename'];
$desig = $_POST['desig'];
$dept = $_POST['dept'];
$date =  $_POST['date'];
$salary = $_POST['salary'];

$sql = "UPDATE empdetails SET empid='$id',ename='$name',desig='$desig',dept='$dept',doj='$date',salary='$salary' WHERE empid=$id";

if ($conn->query($sql) === TRUE) {
  echo "<div><b>Record Updated successfully</b></div>";
  echo "<div><a href='index.php'>View Details</a></div>";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

