
<?php
include '../database/connection.php';

$id=$_GET['id'];
$status=$_GET['status'];
$add="UPDATE `banner` SET `status`='$status' WHERE `b_id`='$id'";
$sql=mysqli_query($conn,$add);

header('Location: banner.php');

?>