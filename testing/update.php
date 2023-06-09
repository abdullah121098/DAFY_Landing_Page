<?php
$conn = new mysqli('localhost', 'root', '', 'file');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
   
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

    // Perform the update operation
    $stmt = $conn->prepare("UPDATE review SET name = ?, email = ?, 
    phone= ?,pick_up=?,drop_in=?,ride_type=?,time_ride=?,date=?,time=?,v_name=?,v_type=?,driver_name=?,status=? WHERE id = ?");
    
    $stmt->bind_param("sssssssssssi", $name, $email, $phone, $pick_up, $drop_in, $ride_type, $time_type, $date, $time, $v_name, $v_type, $id);
    $stmt->execute();
    $stmt->close();

}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the row data based on the ID
    $stmt = $conn->prepare("SELECT * FROM review WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $stmt->close();
    header("Location: display.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Review</title>
</head>
<body>
    <h2>Update Review</h2>

    <form method="post" action="">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo $row['name']; ?>">
        <br><br>
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $row['email']; ?>">
        <br><br>
        <input type="text" name="id" value="<?php echo $row['id']; ?>">
        <label>Name:</label>
        <input type="text" name="pick_up" value="<?php echo $row['pick_up']; ?>">
        <br><br>
        <label>Email:</label>
        <input type="text" name="drop_in" value="<?php echo $row['drop_in']; ?>">
        <br><br> <input type="text" name="ride_type" value="<?php echo $row['ride_type']; ?>">
        <label>Name:</label>
        <input type="text" name="time_ride" value="<?php echo $row['time_ride']; ?>">
        <br><br>
        <label>Email:</label>
        <input type="date" name="date" value="<?php echo $row['date']; ?>">
        <br><br> <input type="time" name="time" value="<?php echo $row['time']; ?>">
        <label>Name:</label>
        <input type="text" name="v_name" value="<?php echo $row['v_name']; ?>">
        <br><br>
        <!-- <label>Email:</label>
        <input type="text" name="email" value="<?php echo $row['email']; ?>">
        <br><br> -->
        <button type="submit">Update</button>
    </form>
    <!-- $name, $email, $phone, $pick_up, $drop_in, $ride_type, $time_type, $date, $time, $v_name, $v_type, $id); -->
</body>
</html>

<?php 
    header("Location: display.php");
    exit();
    $conn->close(); ?>
