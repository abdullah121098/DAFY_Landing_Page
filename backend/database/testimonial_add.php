
<?php
//include 'connection.php';

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//   $name = $_POST['r-name'];
//   $date = $_POST['r-date'];
//   $review = $_POST['r-review'];

//   if(empty($name)||empty($date)||empty( $review)){
//     echo '<script>alert("Please Fill the  Blank !");</script>';
//     // header("location:login.php");
//   }else
// if (isset($_POST['addData'])) {
//   $stmt = $conn->prepare("INSERT INTO testimonial (date, name, review) VALUES (?, ?, ?)");
//   $stmt->bind_param("sss", $date, $name, $review);
  
//   // Execute the prepared statement
//   if ($stmt->execute()) {
//     echo "Data inserted successfully.";
//   } else {
//     echo "Failed to insert data.";
//   }
  
//   $stmt->close();
// } else {
//   echo "Failed to insert data.";
// }
// }
// $conn->close();
// // Redirect back to the booking page
// header("Location:../src/testimonial.php");
// exit();

?>
<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['r-name'];
  $date = $_POST['r-date'];
  $review = $_POST['r-review'];
  if (isset($_POST['addData'])) {
  if (empty($name) || empty($date) || empty($review)) {
    header("Location: ../src/testimonial.php");
    // echo '<script>alert("Please fill in all fields.");</script>';
   }else{

  $stmt = $conn->prepare("INSERT INTO testimonial (date, name, review) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $date, $name, $review);
  $stmt->execute();
    echo "Data inserted successfully.";
  }

  $stmt->close();
  $conn->close();

  header("Location: ../src/testimonial.php");
  exit();
}
}
?>
