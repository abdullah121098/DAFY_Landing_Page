
<?php
include "connection.php";

// $g_id=$_GET['id'];
// // echo $g_id;

// $sql=mysqli_query($conn,"SELECT * FROM `customer` WHERE id= $g_id");

// if (mysqli_num_rows($sql) > 0) {
//   while ($edit = mysqli_fetch_array($sql)) {
//     echo ' <form method="POST">
//     <tr>
//     <td class="border-bottom-0"><h6 class="fw-semibold mb-0">'.  $edit['id'] .'</h6></td>
//     <td class="border-bottom-0"><h6 class="fw-semibold mb-1">'. $edit['name'] .'</h6></td>
//     <td class="border-bottom-0"><p class="mb-0 fw-normal">'. $edit['phone'].'</p></td>
//     <td class="border-bottom-0"><p class="mb-0 fw-normal">'.  $edit['email'].'</p></td>
//     <td class="border-bottom-0"><p class="mb-0 fw-normal">'. $edit['pick_up'].'</p> </td>
//     <td class="border-bottom-0"><p class="mb-0 fw-normal">'. $edit['drop_in'].'</p></td>
//     <td class="border-bottom-0"><p class="mb-0 fw-normal">'.$edit['ride_type'].'</p></td>
//     <td class="border-bottom-0"><p class="mb-0 fw-normal">'.$edit['time_ride'].'</p></td>
//     <td class="border-bottom-0"><p class="mb-0 fw-normal">'.$edit['date'].'</p></td>
//     <td class="border-bottom-0"><p class="mb-0 fw-normal">'.$edit['time'].'</p></td>
//     <td class="border-bottom-0"><p class="mb-0 fw-normal">'.$edit['v_name'].'</p></td>
//     <td class="border-bottom-0"><input type="text" class="form-control mb-0 fw-normal" value="'.$edit['v_type'].'" name="v-type"></td>
//     <!-- table row data -->
//     <td class="border-bottom-0">
//     <div class="d-flex align-items-center gap-2">
//         <label class="badge bg-warning rounded-3 fw-semibold py-3 px-3" id="res">
//         '.$edit['status'].'
//         </label>
//     </div>
//     </td>
//     <td class="border-bottom-0 data5" >
//     <select name="assign" id=""class="badge bg-primary fw-semibold">
//         <option selected disabled>Select</option>
//         <option>Amal</option>
//         <option >jijo</option>
//         <option >Drive Started</option>
//         <option >siva</option>
//         <option>Cancel</option>
//     </select>
//     </td>
//     <td class="border-bottom-0" >
//     <select name="status" id="sel"class="badge bg-primary fw-semibold">
//         <option value="" selected disabled>Select</option>
//         <option>Confirm</option>
//         <option  >Driver Assigned</option>
//         <option  >Drive Started</option>
//         <option  >Completed</option>
//         <option >Cancel</option>
//     </select>
//     </td> 
//     <td class="border-bottom-0">
//     <div class="d-flex align-items-center gap-2">
//         <!-- <a type="button" name="submit" class="badge bg-warning rounded-3 fw-semibold py-3 px-3" href="">confirm</a> 
//         <a type="button" class="fa-solid fa-trash fs-5" name="update" type="submit" href="update.php?id=">delete</a>-->
//         <button type="submit" class="btn  btn-primary" name="update"> update</button>
//     </div>
//     </td>
// </tr> 
// </form>
//     ';
   
//   }
// }
// if(isset($_POST['update'])){
//   $a=$_POST['assign'];
//   $b=$_POST['status'];
//   $up="UPDATE `customer` SET  `driver_name`=$a,`status`=$b WHERE id= $g_id";

//   $sql=mysqli_query($conn,$up);
// if($sql){
// echo 'update';
// }else{
// echo 'failed';
// }
// }


$g_id = $_GET['id'];
// echo $g_id;

$sql = mysqli_query($conn, "SELECT * FROM `customer` WHERE id= $g_id");

if (mysqli_num_rows($sql) > 0) {
  echo '<form method="POST">'; // Move the form tag outside the loop

  while ($edit = mysqli_fetch_array($sql)) {
    echo '
    <tr>
    <td class="border-bottom-0"><h6 class="fw-semibold mb-0">'.  $edit['id'] .'</h6></td>
    <td class="border-bottom-0"><h6 class="fw-semibold mb-1">'. $edit['name'] .'</h6></td>
    <!-- rest of the table row data -->
    <td class="border-bottom-0 data5">
    <select name="assign" id="" class="badge bg-primary fw-semibold">
        <option selected disabled>Select</option>
        <option>Amal</option>
        <option>jijo</option>
        <option>Drive Started</option>
        <option>siva</option>
        <option>Cancel</option>
    </select>
    </td>
    <td class="border-bottom-0 data5">
    <select name="pay_type" id="" class="badge bg-primary fw-semibold">
        <option selected disabled>Select</option>
        <option>G-pay</option>
        <option>Patym</option>
        <option>phonepe Started</option>
        <option>Cancel</option>
    </select>
    </td>
    <td class="border-bottom-0"><input type="text" class="fw-semibold mb-1" value="'. $edit['payment'] .'" name="pay_ment"></td>
    <td class="border-bottom-0">
    <select name="status" id="sel" class="badge bg-primary fw-semibold">
        <option value="" selected disabled>Select</option>
        <option>Confirm</option>
        <option>Driver Assigned</option>
        <option>Drive Started</option>
        <option>Completed</option>
        <option>Cancel</option>
    </select>
    </td> 

    <td class="border-bottom-0">
    <div class="d-flex align-items-center gap-2">
        <button type="submit" class="btn btn-primary" name="update">update</button>
        <button type="submit" class="btn btn-primary" name="delete">delete</button>
    </div>
    </td>
    </tr>
    ';
  }

  echo '</form>'; // Close the form tag after the loop
}

if(isset($_POST['update'])){
  $a = $_POST['assign'];
  $b = $_POST['status'];
  $c=$_POST['pay_type'];
  $d=$_POST['pay_ment'];
  $up = "UPDATE `customer` SET  `driver_name` = '$a', `status` = '$b',`payment`='$d',`payment_type`='$c' WHERE id = $g_id";

  $sql = mysqli_query($conn, $up);
  if($sql) {
    header("Location:display.php");
    echo 'Update successful';
  } else {
    echo 'Update failed';
  }
}

if(isset($_POST['delete'])){
  
  $up = "DELETE FROM `customer` WHERE id = $g_id";

  $sql = mysqli_query($conn, $up);
  if($sql) {
    header("Location:display.php");
    echo 'delete successful';
  } else {
    echo 'delete failed';
  }
}


      // Display each row of data
      
?>
