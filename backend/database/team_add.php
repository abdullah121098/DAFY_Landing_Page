
<?php
include 'connection.php';

if (isset($_POST['t_addData'])) {

  $name = $_POST['t-name'];
  $date = $_POST['t-date'];
  $designation= $_POST['t-position'];
  $img= $_FILES ['t-img']['name'];
  $img_tmp = $_FILES ['t-img']['tmp_name'];
  $img_loc = '../assets/images/team/';
  $move=move_uploaded_file($img_tmp,$img_loc.$img);

  $stmt = $conn->prepare("INSERT INTO `team`(`t_date`, `t_name`, `t_position`, `t_img`) VALUES (?, ?, ?,?)");
  $stmt->bind_param("ssss", $date, $name, $designation,$img);
  
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
header("Location:../src/team.php");
exit();
?>
