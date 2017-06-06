<html>
 <head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>



  </head>
 
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ed";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM reg";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table ><tr><th>ID</th><th>Name</th><th>regnumber</th><th>college</th><th>department</th><th>year</th><th>emailid</th><th>mobilenumber</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
echo "<tr><td>".$row["s_no"]."</td><td>".$row["name"]."</td><td>".$row["reg_no"]."</td><td>".$row["college"]."</td><td>".$row["dept"]."</td><td>".$row["year"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td></tr>";

		}
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();

?> </html>