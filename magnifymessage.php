<?php
	include('db.php');
	$id=$_GET['message_id'];
	$result = mysql_query("SELECT * FROM message where message_id='$id'");
		while($row = mysql_fetch_array($result))
			{
				$image=$row['image'];
			}
?>
<img src="reservation/img/products/<?php echo $image ?>">

	
	
</form>