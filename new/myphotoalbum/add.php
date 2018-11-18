<style>
  .comments{
  background-color: white;
  border-radius: 5px;
  color: black;
}
</style>
<?php
include ('includes/coment_con.php');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$photo_id=$_POST['photo_id'];
$user_id=$_POST['user_id'];
$name=$_POST['name'];
$content_comment=$_POST['content_comment'];
date_default_timezone_set("Asia/Manila");
$now=date("Y-m-d H:i:s");



$sql = "INSERT INTO `comments` (`photo_id`, `user_id`, `name`, `content_comment`, `date`) 
                     VALUES ('$photo_id', '$user_id', '$name', '$content_comment', '$now')";

if ($conn->query($sql) === TRUE) {

//$sql = "select name,content_comment,date from comments where name='$name' and content_comment='$content_comment'";
$sql = "SELECT comments.`name`, comments.content_comment, comments.date, `user`.profile_picture FROM comments INNER JOIN `user` ON comments.user_id = `user`.user_id where name='$name' and content_comment='$content_comment'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      //echo "id: " . $row["name"]. " - Name: " . $row["content_comment"]. " " . $row["date"]. "<br>";
      $name=$row['name'];
      $comment=$row['content_comment'];
      $time=$row['date'];
      $photo=$row['profile_picture'];
    }
?>
<div class="comment_div"> 
 <p class="name"><img class="imgcomment" src="<?php echo $photo;?>">&nbsp;<?php echo $name;?><span style="float:right"><?php echo date("j-M-Y g:ia", strtotime($time)) ?> <a href="" style="margin-left: 350px">Delete</a> </span></p><br>
 <p class="comments">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $comment;?></p>
</div>
<?php


} else {
    echo "0 results";
}

$conn->close();
}

                
?>

<!--if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$photo_id=$_POST['photo_id'];
$user_id=$_POST['user_id'];
$name=$_POST['name'];
$content_comment=$_POST['content_comment'];
$now=date("Y-m-d H:i:s");



$sql = "INSERT INTO `comments` (`photo_id`, `user_id`, `name`, `content_comment`, `date`) 
                     VALUES ('$photo_id', '$user_id', '$name', '$content_comment', '$now')";

if ($conn->query($sql) === TRUE) {

    header('location:viewpost.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

-->