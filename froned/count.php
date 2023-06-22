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

<?php
$servername = "localhost"; // Replace with your database server name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "dafy"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$action = isset($_POST['action']) ? $_POST['action'] : '';

switch ($action) {
  case 'search':
    if (isset($_POST['name'])) {
      $a = $_POST['name'];

      // Prepare the statement with placeholders
      $stmt = mysqli_prepare($conn, "SELECT * FROM customer WHERE name = ? OR id = ?");

      // Bind the input value to the prepared statement
      mysqli_stmt_bind_param($stmt, "ss", $a, $a);

      // Execute the prepared statement
      mysqli_stmt_execute($stmt);

      // Get the result set from the executed statement
      $result = mysqli_stmt_get_result($stmt);

      // Check if there are any rows returned
      if (mysqli_num_rows($result) > 0) {
        echo '<table id="data-count" style="border: black;">
              <tr>
                <th>Id</th>
                <th>Content</th>
              </tr>';

        // Fetch each row from the result set
        while ($row = mysqli_fetch_array($result)) {
          echo '<tr>
                  <td class="border-bottom-0"><h6 class="fw-semibold mb-0">' . $row['id'] . '</h6></td>
                  <td class="border-bottom-0"><h6 class="fw-semibold mb-1">' . $row['name'] . '</h6></td>
                </tr>';
        }

        echo '</table>';
      }

      // Close the statement
      mysqli_stmt_close($stmt);
    }
    break;

  default:
    $result = mysqli_query($conn, "SELECT * FROM customer");

    echo '<table id="data-count" style="border: black;">
          <tr>
            <th>Id</th>
            <th>name</th>
          </tr>';

    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_array($result)) {
        // Display each row of data
        echo '<tr>
                <td class="border-bottom-0"><h6 class="fw-semibold mb-0">' . $row['id'] . '</h6></td>
                <td class="border-bottom-0"><h6 class="fw-semibold mb-1">' . $row['name'] . '</h6></td>
              </tr>';
      }
    }

    echo '</table>';

    $sq = mysqli_query($conn, "SELECT * FROM customer");
    $res = mysqli_num_rows($sq);

    $rowsPerPage = 4; // Number of rows to display per page
    $totalRows = $res; // Total number of rows in the table

    $page = isset($_GET['page']) ? $_GET['page'] : 1; // Get the current page number

    $start = ($page - 1) * $rowsPerPage; // Calculate the starting row index
    $end = $start + $rowsPerPage; // Calculate the ending row index

    $ql = "SELECT * FROM customer LIMIT $start, $rowsPerPage";

    $result = mysqli_query($conn, $ql);

    echo '
    <form action="" method="post">
      <table id="data-count">
        <tr>
          <th>Company</th>
          <th>Contact</th>
          <th>Country</th>
        </tr>';

    if (mysqli_num_rows($result) > 0) {
      while ($rows = mysqli_fetch_array($result)) {
        // Display each row of data
        echo '<tr>
                <td class="border-bottom-0"><h6 class="fw-semibold mb-0">' . $rows['id'] . '</h6></td>
                <td class="border-bottom-0"><h6 class="fw-semibold mb-1">' . $rows['name'] . '</h6></td>
              </tr>';
      }
    }

    echo '
      </table>
      <ul class="pager">';
    if ($page > 1) {
      echo '<li><a href="?page=' . ($page - 1) . '" class="per">Previous</a></li>';
    }
    if ($end < $totalRows) {
      echo '<li><a href="?page=' . ($page + 1) . '" class="pro">Next</a></li>';
    }
    echo '
      </ul>
      <input type="hidden" name="action" value="search">
      <input type="search" name="name" id="">
      <input type="submit" value="Search">
    </form>';
    break;
}

// Close the database connection
mysqli_close($conn);
?>


  </body>
</html>
