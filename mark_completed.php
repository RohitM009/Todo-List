<?php
include('connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $taskId = $_GET['taskId'];
  $completed = $_GET['completed'];
  
  // Update "completed" status in the database
  $sql = "UPDATE `todo` SET `completed` = '$completed' WHERE `id` = '$taskId'";
  $result = mysqli_query($conn, $sql);
  
  if ($result) {
    echo "Success"; // Send success response to AJAX request
  } else {
    echo "Error"; // Send error response to AJAX request
  }
}
?>
