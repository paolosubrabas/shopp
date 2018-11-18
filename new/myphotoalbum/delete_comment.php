<?php
include ('includes/coment_con.php');
include ('process/session.php');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$comment_id=$_GET['comment_id'];

// sql to delete a record
$sql = "DELETE FROM `comments` WHERE (`comment_id`='$comment_id')";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
      header('location:viewpost.php');
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>