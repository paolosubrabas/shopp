 <?php 

include "db.php";

			    $pname = $_POST["name"];
			    $contact = $_POST["contact"];
			    $theme = $_POST["subject"];
			    $type = $_POST["type"];
			    $desc = $_POST["message"];
			    $dateneeded = $_POST["date"];
			    $timeneeded = $_POST["time"];
			    $venue = $_POST["pname"];
			    $str="pending";
			 //INSERT INTO `message` (`message_id`, `name`, `email`, `subject`, `message`, `image`) VALUES ('3', 'gfj', 'hgj', 'jhkj', 'hgjk', 'kjhkj')
                
                  // $sql ="INSERT INTO message (image,name, email, subject, message)
		       // VALUES ('$pname','$email','$subject','$mess','$location')";

			 //   echo $PAX;

		    $sql ="INSERT INTO `customized_party` (`name`, `contact`, `theme`, `type`, `description`, `dateneeded`, `timeneeded`, `venue`, `status`)
		                 VALUES ('$pname', '$contact', '$theme', '$type','$desc', '$dateneeded', '$timeneeded', '$venue', '$str')";

		        if(mysql_query($sql))
		        	{
		        		//echo "HEY OK KAAU";
		        		header('Location:costumparty.php');
		        	//}
		     }else{
		     	//header('Location: cateringrequest.php?err=4');
		     	echo "error:".$sql."<br>".$bd ->error;
		     //}
//}else{
//	header('Location: cateringrequest.php?err=5');
//}
		        //s	exit();

		        //	echo "error:".$sql."<br>".$bd ->error;
		   // }
		}
 ?>