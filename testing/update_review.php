<?php
$conn = new mysqli('localhost', 'root', '', 'file');

// Assuming you have already retrieved the values from $_POST
//$sql = "SELECT id FROM review where id = $id  ORDER BY id DESC";

// $id = $_POST['id']; // Assuming you have the ID of the data to update

// $confirm = $_POST['confirm'];

// if ($confirm == "2") {
//     $driver_name = $_POST['assign'];

//     // Prepare and execute the SQL update statement
//     $sql = "UPDATE `review` SET `driver_name`='$driver_name', `status`='$confirm' WHERE `id`='$id'";
//     $result = $conn->query($sql);

//     if ($result) {
//         // Update successful
//         echo "Driver assigned successfully.";
//     } else {
//         // Update failed
//         echo "Update failed: " . $conn->error;
//     }
// } elseif ($confirm == "3") {
//     // Prepare and execute the SQL update statement
//     $sql = "UPDATE `review` SET `status`='$confirm' WHERE `id`='$id'";
//     $result = $conn->query($sql);

//     if ($result) {
//         // Update successful
//         echo "Drive started successfully.";
//     } else {
//         // Update failed
//         echo "Update failed: " . $conn->error;
//     }
// } elseif ($confirm == "5") {
//     // Prepare and execute the SQL update statement
//     $sql = "UPDATE `review` SET `status`='$confirm' WHERE `id`='$id'";
//     $result = $conn->query($sql);

//     if ($result) {
//         // Update successful
//         echo "Drive canceled successfully.";

//         // Move the data to another table
//         $moveSql = "INSERT INTO `review1` SELECT * FROM `review` WHERE `id`='$id'";
//         $moveResult = $conn->query($moveSql);

//         if ($moveResult) {
//             // Data moved successfully
//             echo "Data moved to review1 table.";
//         } else {
//             // Data move failed
//             echo "Data move failed: " . $conn->error;
//         }
//     } else {
//         // Update failed
//         echo "Update failed: " . $conn->error;
//     }
// }

// Close the database connection
// header("Location: display.php");
// exit();
// Check if ID parameter is set
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare and execute the SQL statement to retrieve the row with the given ID
    $stmt = $conn->prepare("SELECT * FROM `review` WHERE `id` = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Row found, fetch the data
        $row = $result->fetch_assoc();

        // Print the data
        echo "ID: " . $row['id'] . "<br>";
        echo "Name: " . $row['name'] . "<br>";
        echo "Email: " . $row['email'] . "<br>";
        // Print other fields as needed
    } else {
        echo "No data found for the given ID.";
    }

    // Close the prepared statement
    $stmt->close();
} else {
    echo "ID parameter is missing.";
}

// Close the database connection
$conn->close();



$conn->close();
?>
