<?php
$servername = "localhost";
$username = "webprogss211";
$password = "webprogss211";
$dbname = "webprogss211";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, password, email, website, comment, gender, reg_date FROM ddangat_myguests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Encrypted Password: " . $row["password"]. " - Email " . $row["email"]. " - Website " . $row["website"]. " - Comment " . $row["comment"]. " - Gender " . $row["gender"]. " - Date Registered " . $row["reg_date"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>