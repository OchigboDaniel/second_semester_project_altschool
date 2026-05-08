<?php
$servername = "3.86.177.97";
$username = "admin";
$password = "password123";
$dbname = "studentdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "<h1>My Name: Daniel</h1>";
echo "<p>Server: " . gethostname() . "</p>";

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<p>ID: " . $row["id"] . " - Name: " . $row["name"] . "</p>";
    }
} else {
    echo "No data found.";
}

$conn->close();
?>