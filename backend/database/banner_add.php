
<?php
include 'connection.php';

if (isset($_POST['b-banner'])) {

  $name = $_POST['b-name'];
  $date = $_POST['b-date'];
  $content = $_POST['b-content'];
  $img = $_FILES['b-img']['name'];
  $img_tmp = $_FILES['b-img']['tmp_name'];
  $img_loc = '../assets/images/team/';
  $move = move_uploaded_file($img_tmp, $img_loc.$img);

  $stmt = $conn->prepare("INSERT INTO `banner`( `b_name`, `b_content`, `b_img`, `b_date`) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("ssss", $name, $content, $img, $date);

  // Execute the prepared statement
  if ($stmt->execute()) {
    echo "Data inserted successfully.";
  } else {
    echo "Failed to insert data.";
  }

  $stmt->close();
} else {
  echo "Failed to insert data.";
}



// Redirect back to the booking page
header("Location:../src/banner.php");
exit();
?>
