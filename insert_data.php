<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Connect to the database
  $servername = "localhost"; // Replace with your database server name
  $username = "root"; // Replace with your database username
  $password = ""; // Replace with your database password
  $dbname = "file"; // Replace with your database name

  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check the connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Get the form data
  $name = $_POST['name3'];
  $email = $_POST['email3'];
  $phone = $_POST['phone3'];
  $pick_up = $_POST['pick_up3'];
  $drop_in = $_POST['drop_in3'];
  $ride_type = $_POST['ride-type3'];
  $time_type = $_POST['t-type3'];
  $date = $_POST['date_in3'];
  $time = $_POST['time_in3'];
  $v_name = $_POST['v_name3'];
  $v_type = $_POST['v_type3'];

  // Prepare the SQL statement
  $stmt = $conn->prepare("INSERT INTO review (name, email, phone, pick_up, drop_in, ride_type, time_ride, date, time, v_name, v_type) VALUES (?,?,?,?,?,?,?,?,?,?,?)");

  // Bind the parameter to the statement
  $stmt->bind_param("sssssssssss", $name, $email, $phone, $pick_up, $drop_in, $ride_type, $time_type, $date, $time, $v_name, $v_type);

  // Execute the statement
  if ($stmt->execute()) {
    echo "Form submitted successfully";
  } else {
    echo "Error submitting the form: " . $stmt->error;
  }

  // Close the statement and connection
  $stmt->close();
  $conn->close();
}
?>
