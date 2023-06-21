<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
  <body>
<?php
// Connect to the database
$servername = "localhost"; // Replace with your database server name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "sample_test"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

$sq = mysqli_query($conn,"SELECT * FROM count");
$res= mysqli_num_rows($sq);

$rowsPerPage = 4; // Number of rows to display per page
$totalRows = $res; // Total number of rows in the table

$page = isset($_GET['page']) ? $_GET['page'] : 1; // Get the current page number

$start = ($page - 1) * $rowsPerPage; // Calculate the starting row index
$end = $start + $rowsPerPage; // Calculate the ending row index

$sql = "SELECT * FROM count Limit $start,$rowsPerPage";

$result = mysqli_query($conn, $sql);
?>

<form action="" method="post">
  <table id="data-count">
    <tr>
      <th>Company</th>
      <th>Contact</th>
      <th>Country</th>
    </tr>
    <?php
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_array($result)) {
        // Display each row of data
        echo '<tr>
                <td class="border-bottom-0"><h6 class="fw-semibold mb-0">' . $row['id'] . '</h6></td>
                <td class="border-bottom-0"><h6 class="fw-semibold mb-1">' . $row['count'] . '</h6></td>
              </tr>';
      }
    }
    ?>
  </table>
  <ul class="pager">
    <?php if ($page > 1): ?>
      <li><a href="?page=<?php echo ($page - 1); ?>" class="per">Previous</a></li>
    <?php endif; ?>
    <?php if ($end < $totalRows): ?>
      <li><a href="?page=<?php echo ($page + 1); ?>" class="pro">Next</a></li>
    <?php endif; ?>
  </ul>
</form>

<form method="post">
    <div class="autocomplete-container" style="width:300px;">
        <input type="text" id="tutorial_name" name="tutorial_name" placeholder="tutorial name">
    </div>
    <input type="submit" name="submit">
</form>
<script>
    $(function() {
        $("#tutorial_name").autocomplete({
            source: 'backend-script.php',
            minLength: 1 // Minimum number of characters to trigger autocomplete
        });
    });
</script>

  </body>
</html>
