
<?php
// include 'connection.php';

// if (isset($_POST['t_addData'])) {

//   $name = $_POST['t-name'];
//   $date = $_POST['t-date'];
//   $mobile= $_POST['t-mobile'];
//   $mail= $_POST['t-email'];
//   $designation= $_POST['t-position'];
//   $img= $_FILES ['t-img']['name'];
//   $img_tmp = $_FILES ['t-img']['tmp_name'];
//   $img_loc = '../assets/images/team/';
//   $move=move_uploaded_file($img_tmp,$img_loc.$img);
 
//   $stmt = $conn->prepare(" INSERT INTO `admin`(`a_name`, `a_mobile`, `a_mail`, `a_position`, `a_img`, `a_date`)VALUES (?, ?, ?,?,?,?)");
//   $stmt->bind_param("ssssss",$name,$mobile,$mail, $designation,$img,$date);
  
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

// // Redirect back to the booking page
// header("Location:../src/adduser.php");
// exit();
?>

