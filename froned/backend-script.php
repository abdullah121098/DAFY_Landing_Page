<?php
// Connect to the database
$servername = "localhost"; // Replace with your database server name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "dafy"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$searchTerm = $_GET['term'];

$sql = "SELECT * FROM customer WHERE name LIKE '%" . $searchTerm . "%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $tutorialData = array();
    while ($row = $result->fetch_assoc()) {
        $data['id'] = $row['id'];
        $data['value'] = $row['name'];

        $tutorialData[] = $data;
    }
    echo json_encode($tutorialData);
} else {
    echo json_encode([]);
}
?>