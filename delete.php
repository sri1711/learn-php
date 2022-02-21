<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rec";
  
// Create connection
$conn = new mysqli($servername, 
    $username, $password, $dbname);

$sql = "DELETE FROM empdetails WHERE empid='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
   echo "<div><b>Record deleted successfully</b></div>";
    echo "<div><a href='index.php'>View Details</a></div>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>

