
<?php
include 'connection.php';

  
  if (isset($_POST['subscribe-submit'])) {
    $name = $_POST['name1'];
     $email = $_POST['email1'];
     $phone = $_POST['phone1'];
    // Button 2: Add data with current date and time
    $currentDateTime = date('Y-m-d H:i');
    $stmt = $conn->prepare("INSERT INTO `subscribe`(`name`, `email`, `phone`, `date`) VALUES(?,?,?,?)");
    $stmt->bind_param("ssss", $name, $email, $phone, $currentDateTime);


  // Execute the prepared statement
  $stmt->execute();
  $stmt->close();
  }

$conn->close();
// Redirect back to the booking page
header("Location:../index.php");
exit();
?>
