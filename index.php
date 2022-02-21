<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1 style="text-align: center;">EmployeeDetails</h1>
        <hr>
        <a href="addDetails.html">Add New Data</a>
        
        <?php
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "rec";
        
        

// Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        echo "<table border='1' style='margin-top: 15px;'><tr><th style='padding: 10px;'>Emp Id</th><th style='padding: 10px;'>Name</th><th style='padding: 10px;'>Designation</th><th style='padding: 10px;'>Department</th><th style='padding: 10px;'>DOJ</th><th style='padding: 10px;'>Salary</th><th style='padding: 10px;'>Edit/delete</th></tr>";
        
        $sql = "SELECT * FROM empdetails";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $id = $row["empid"];
                echo "<tr style='padding: 10px;'><td style='padding: 10px;'>".$row["empid"]."</td><td style='padding: 10px;'>".$row["ename"]."</td><td style='padding: 10px;'>".$row["desig"]."</td><td style='padding: 10px;'>".$row["dept"]."</td><td style='padding: 10px;'>".$row["doj"]."</td><td style='padding: 10px;'>".$row["salary"]."</td><td style='padding: 10px;'><a href='update_form.html?id=$id'>Edit</a>/<a href='delete.php?id=$id'>delete</a></td></tr>";
            }
              echo "</table>";
            } else {
                echo "0 results";
            }
            $conn->close();
        ?>
    </body>
</html>
