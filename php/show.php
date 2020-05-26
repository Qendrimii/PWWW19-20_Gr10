<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "seminaribi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT first_name,email,image FROM clients ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Name</th><th>Email</th><th>Image</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["first_name"]."</td><td>".$row["email"]."</td><td>".base64_encode( stripslashes($row['image']) )."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>