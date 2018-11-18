<?php
 ini_set('mysql.connect_timeout',300); 
 ini_set('default_socket_timeout',300);
		  //echo php_v();
$r=array();
require_once("include_connect.inc.php");

function saveimages($n, $imgs, $db, $r){
	

	$sql = "INSERT INTO phpimage(fdesc,image) VALUES(?,?)";
	$rs=$db->prepare($sql);
	$rs->execute(array($n,$imgs));
	if($rs){
		$r['cimg']="data:image;base64,".$imgs; //echo "Image uploaded!";
	}else{
		$r['success']="false";
		$r['success']['err']="<br/> Image not uploaded!";
		//echo "<br/> Image not uploaded!";;
	}
	retimages($db, $r);
	
}
function retimages($db, $r){

	$rs=$db->prepare("SELECT * FROM phpimage");
	$rs->execute();
	if($rs){
		while($rw=$rs->fetch()){
			$img = $rw['image'];
			$nm = $rw['fdesc'];
			$r['retimgs'][]='<img height="80" width="80" src="data:image;base64,'.$img. '"/>';
			//echo '<img height="80" width="80" id="upimg" src="data:image;base64,'.$img. '"/>';
			//echo 'data:image;base64,'.$img. '';
		}
		  $r['success']="true";
	
	}else{
		  $r['success']="false";
		  $r['success']['err']= "Problem with query!";
	}
	echo json_encode($r);
}

try {

	if(isset($_POST['submit'])){
	  	if(getimagesize($_FILES['mimage']['tmp_name'])==FALSE)
	  	{
	 		 $r['success']="false";
		     $r['success']['err']= "Please select image first!";
		     //echo "Please select image first!";
	  	}
	 	else{
	 		//echo "Upload images!";
	 		$r['fn']=$_POST['fname'];

	 		$getext =explode(".",$_FILES['mimage']['tmp_name']);
	 		$ext = end($getext);

	 		$myimage = addslashes($_FILES['mimage']['tmp_name']);
	  		$name=addslashes($_FILES['mimage']['name']);
	  		$myimage=file_get_contents($myimage);
	  		$myimage = base64_encode($myimage);
	  		//$file = addslashes(file_get_contents($_FILES['mimage']['tmp_name']));
	  		//echo $name."-".$myimage;

	  		saveimages($name,$myimage,$db,$r);
	  	}
	 }
} catch (Exception $e) {
			echo $e->getMessage();
}