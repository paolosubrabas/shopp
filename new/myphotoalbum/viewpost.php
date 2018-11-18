<!DOCTYPE html>
<html>
<head>
	<title></title>
 <link rel="stylesheet" type="text/css" href="css/icon.css">
  <link rel="stylesheet" type="text/css" href="css/materialize.css">
 <link rel="stylesheet" type="text/css" href="css/materialize.min.css">	
 <script type="text/javascript" src="jquery/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="script/all.js"></script>
  <style> 
 .fey{

 align-content: center;
    background-color:  #ee6e73;
    width: 600px;
    border: 10px;
    padding: 25px;
    margin: 25px;
    border-radius: 5px;
    height: 100%;
     color: #ffb3cc;
    box-shadow: 20px 20px; 
    margin-left: 400px;

}
.rosefel{
   color: black;

}
.comment{
  margin-left: 50px;
}
.imgcomment{
  width:50px;
  height: 50px; 

}
img {
  border-radius: 5%;
}
.comments{
  background-color: white;
  border-radius: 5px;
  color: black;
  height: 30px;
}

</style>
</head>
<body>
<?php include ('process/session.php');?>

<?php
      include("includes/database.php");
              
               $id="";
               if(isset($_REQUEST['photo_id'])){
                $id =$_REQUEST['photo_id'];
               }
              
            

              $query=mySQL_query("SELECT * FROM photo INNER JOIN `user` ON photo.user_id = `user`.user_id WHERE photo.photo_id =' $id'") or die(mySQL_error());
              while($row=mySQL_fetch_array($query)){
                  $location = $row['post_img'];
                  $profile_picture = $row['profile_picture'];
                  $description=$row['description']; 
                  $photo_id = $row['photo_id'];
                  $posted_by= $row['posted_by'];
                  $time=$row['date'];  
  ?>
          
          
      <div class="fey">
      
              <div class="rosefel">
              <img style="height: 50px; width 50px; " src="<?php echo $profile_picture ?>"> 
               &nbsp;<b><?php echo $posted_by?></b>
              <a style="margin-left: 400px;color: black; " href="home.php"><b>x</b></a>
              <strong></strong>
              <hr>
              </div>
              <div>
                  <div class="rosefel">
                 <p><?php echo $row['description']; ?></p>
                  <center>
                  <img style="height: 300px; width:400px; " src="<?php echo $location ?>">
                 </center>
               <hr class="rosefel" > 
                  </div>
             
          </div>
          <br><br> 
     

        <form method="Post">
           
           <div class="comment-area">
    

            <img src="<?php echo $profile_picture; ?>" width="50" height="50">
          



       <textarea cols="20" style="background-color: white; color: black;" name="content_comment" id='content_comment' required></textarea> <br />
        

      <input type="hidden" id="photo_id"  name="photo_id" value="<?php echo $row['photo_id']; ?>">
      <input type="hidden" id="user_id" name="user_id" value="<?php echo $user_id; ?>">
      <input type="hidden" id="name"  name="name" value="<?php echo $fullname;?>">
      <input type="button" name="btnsubmit" style="color: black;" value = "Comment" id='add_comment'  onclick="ajax_post();">
       <div id="status"></div>
      <?php
    include ('includes/coment_con.php');
  
    $comm = mysql_query("SELECT
                   `user`.user_id,
                   `user`.fullname,
                   `user`.username,
                   `user`.email,
                   `user`.`password`,
                   `user`.password2,
                    `user`.profile_picture,
                    `user`.cover_picture,
                    comments.comment_id,
                    comments.photo_id,
                    comments.user_id,
                    comments.`name`,
                    comments.content_comment,
                    comments.date
FROM
                    `user`
                     INNER JOIN comments ON comments.user_id = `user`.user_id
WHERE
comments.photo_id = '$photo_id' order by photo_id DESC");
    while($row=mysql_fetch_array($comm))
    {
    $photo=$row['profile_picture'];  
    $name=$row['name'];
    $comment=$row['content_comment'];
      $time=$row['date'];
      $comment_id=$row['comment_id'];
    ?>
  
<div class="comment_div"> 
 <p class="name"><img class="imgcomment" src="<?php echo $photo;?>">&nbsp;<?php echo $name;?><span style="float:right"><?php echo date("j-M-Y g:ia", strtotime($time)) ?> <a href="delete_comment.php?comment_id=<?php echo $comment_id;?>" style="margin-left: 350px">Delete</a> </span></p><br>
 <p class="comments">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $comment;?></p>
</div>
  
    <?php
    }
    ?>
  </div>

</form>
                               

</div>

      

<?php
  }
  ?>
</body>
</html>
<script src="jquery/jquery.min.js"></script>
<script>
  function ajax_post(){
    
    var hr = new XMLHttpRequest();
    
    var url = "add.php";
    var cc = document.getElementById("content_comment").value;
    var pi = document.getElementById("photo_id").value;
    var ui = document.getElementById("user_id").value;
    var n = document.getElementById("name").value;
   
   

    var vars = "content_comment="+cc+"&photo_id="+pi+"&user_id="+ui+"&name="+n;


    hr.open("POST", url, true);
  
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("status").innerHTML = return_data;
        }
    }
  
    hr.send(vars); // Actually execute the request
    document.getElementById("status").innerHTML = "processing...";
   }

</script>

