
<?php
include 'connection.php';

if (isset($_POST['b-banner'])) {

  $name = $_POST['b-name'];
  $date = $_POST['b-date'];
  $designation= $_POST['b-content'];
  $img= $_FILES ['b-img']['name'];
  $img_tmp = $_FILES ['b-img']['tmp_name'];
  $img_loc = '../assets/images/team/';
  $move=move_uploaded_file($img_tmp,$img_loc.$img);

  $stmt = $conn->prepare("INSERT INTO `banner`(`b_date` `b_name`, `b_content`, `b_img`) VALUES (?, ?, ?,?)");
  $stmt->bind_param("ssss", $date, $name, $content,$img);
  
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

$conn->close();
// Redirect back to the booking page
header("Location:../team.php");
exit();
?>
