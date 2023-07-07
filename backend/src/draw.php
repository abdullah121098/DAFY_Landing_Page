<?php
require_once 'header.php';
include '../database/connection.php';

// Step 2: Retrieve Data from MySQL
// $query = "SELECT `ride_type`, COUNT(*) AS count FROM `customer` GROUP BY `ride_type`";
$query = "SELECT `time_ride`, COUNT(*) AS count FROM `customer` GROUP BY `ride_type` ";
$result = mysqli_query($conn, $query);

$data = array(); $data1 = array();
while ($row = mysqli_fetch_assoc($result)) {
    // $data[$row['ride_type']] = $row['count'];
    $data[$row['time_ride']] = $row['count'];
}

// Step 3: Generate Chart (using Chart.js)
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pie Chart Example</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
                    <div class="col-sm-5">
                        <div class="card  bg-info">
                            <div class="card-body">
                                <div class="row align-items-center ">
                                    <div class="col-8">
                                    <canvas id="myChart"></canvas>
  
                                    </div>   
                                </div>
                            </div>
                        </div>
                    </div>
   
</html>
    <script>
        var data = <?php echo json_encode($data); ?>;
        var data1 = <?php echo json_encode($data1); ?>;
        var labels = Object.keys(data);
        var values = Object.values(data);

        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    data: values,
                    backgroundColor: ['red', 'blue', 'green', 'yellow', 'orange'], // Customize the colors as per your preference
                }]
            },
            // datasets: [{
            //     data: [10, 20, 30]
            // }],
            // labels: [ 'Red', 'Yellow',  'Blue' ];
        });
    </script>

<?php

// Step 2: Retrieve Data from MySQL
$query = "SELECT `ride_type`, `time_ride` FROM `customer`";
$result = mysqli_query($conn, $query);

$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[$row['ride_type']] = $row['time_ride'];
}

// Step 3: Generate Chart (using Chart.js)
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pie Chart Example</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="myChart"></canvas>
    <script>
        var data = <?php echo json_encode($data); ?>;
        var labels = Object.keys(data);
        var values = Object.values(data);

        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    data: values,
                    backgroundColor: ['red', 'blue', 'green', 'yellow', 'orange'], // Customize the colors as per your preference
                }]
            },
            options: {
                // Configure additional options as needed
            }
        });
    </script>
</body>
</html>



