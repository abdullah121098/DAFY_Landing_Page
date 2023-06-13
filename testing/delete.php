<?php
include "connection.php";
$g_id = $_GET['id'];
if(isset($_POST['delete'])){
  
  $up = "DELETE FROM `customer` WHERE id = $g_id";

  $sql = mysqli_query($conn, $up);
  if($sql) {
    header("Location:display.php");
    echo 'delete successful';
  } else {
    header("Location:display.php");
    echo 'delete failed';
  }
}
// header("Location:display.php");
// exit();
?>