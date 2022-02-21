<?php
  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rec";
  
// Create connection
$conn = new mysqli($servername,$username, $password, $dbname);

echo '<h1 style="text-align: center">Add Employee Details</h1>
        <hr>';
  
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['empid'];
$name = $_POST['ename'];
$desig = $_POST['desig'];
$dept = $_POST['dept'];
$date =  $_POST['date'];
$salary = $_POST['salary'];
  
$sqlquery = "INSERT INTO empdetails(empid,ename,desig,dept,doj,salary) VALUES ('$id', '$name', '$desig','$dept','$date','$salary')";
  
if ($conn->query($sqlquery) === TRUE) {
    echo "<div><b>record inserted successfully</b></div>";
    echo "<div><a href='index.php'>View Details</a></div>";
} else {
    echo "Error: " . $sqlquery . "<br>" . $conn->error;
}

