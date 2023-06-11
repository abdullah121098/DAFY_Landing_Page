
<?php
$conn = new mysqli('localhost', 'root', '', 'file');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
  
  if (isset($_POST['addData'])) {
    // Button 1: Add all data to the database
    $stmt = $conn->prepare("INSERT INTO review (name, email, phone, pick_up, drop_in, ride_type, time_ride, date, time, v_name, v_type) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssssssss", $name, $email, $phone, $pick_up, $drop_in, $ride_type, $time_type, $date, $time, $v_name, $v_type);
  } elseif (isset($_POST['addDataWithDateTime'])) {
    // Button 2: Add data with current date and time
    $currentDateTime = date('Y-m-d H:i');
    $stmt = $conn->prepare("INSERT INTO review (name, email, phone, pick_up, drop_in, ride_type, time_ride, date, time, v_name, v_type) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssssssss", $name, $email, $phone, $pick_up, $drop_in, $ride_type, $time_type, $currentDateTime, $currentDateTime, $v_name, $v_type);
  }
  
  // Execute the prepared statement
  $stmt->execute();
  $stmt->close();
}

$conn->close();
// Redirect back to the booking page
header("Location:../index.php");
exit();
?>
