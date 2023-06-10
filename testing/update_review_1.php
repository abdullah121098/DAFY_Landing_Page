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
    $confirm = $_POST['confirm'];

    if ($confirm == "2") {
        $driver_name = $_POST['assign'];

        // Prepare and execute the SQL update statement
        $stmt = $conn->prepare("UPDATE `review` SET `driver_name`=?, `status`=? WHERE `id`=?");
        $stmt->bind_param("ssi", $driver_name, $confirm, $id);
        $result = $stmt->execute();

        if ($result) {
            // Update successful
            echo "Driver assigned successfully.";
        } else {
            // Update failed
            echo "Update failed: " . $stmt->error;
        }
    } elseif ($confirm == "3") {
        // Prepare and execute the SQL update statement
        $stmt = $conn->prepare("UPDATE `review` SET `status`=? WHERE `id`=?");
        $stmt->bind_param("si", $confirm, $id);
        $result = $stmt->execute();

        if ($result) {
            // Update successful
            echo "Drive started successfully.";
        } else {
            // Update failed
            echo "Update failed: " . $stmt->error;
        }
    } elseif ($confirm == "5") {
        // Prepare and execute the SQL update statement
        $stmt = $conn->prepare("UPDATE `review` SET `status`=? WHERE `id`=?");
        $stmt->bind_param("si", $confirm, $id);
        $result = $stmt->execute();

        if ($result) {
            // Update successful
            echo "Drive canceled successfully.";

            // Move the data to another table
            $moveSql = "INSERT INTO `review1` SELECT * FROM `review` WHERE `id`='$id'";
            $moveResult = $conn->query($moveSql);

            if ($moveResult) {
                // Data moved successfully
                echo "Data moved to review1 table.";
            } else {
                // Data move failed
                echo "Data move failed: " . $conn->error;
            }
        } else {
            // Update failed
            echo "Update failed: " . $stmt->error;
        }
    }

    // Close the prepared statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
