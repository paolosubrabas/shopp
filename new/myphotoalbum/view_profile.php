     <?php include ('process/session.php');?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/profile.css">
    <link rel="stylesheet" type="text/css" href="css/icon.css">
      <link rel="stylesheet" type="text/css" href="css/design.css">
        <link rel="stylesheet" type="text/css" href="css/materialize.css">
        <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
         <link rel="stylesheet" type="text/css" href="css/menu.css">
</head>
<style>
div.img {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
    margin-top: 100px;
}

div.img:hover {
    border: 1px solid #777;
}

div.img img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}
</style>
<body>

<?php
  include 'includes/coment_con.php';

        $user_id=$_REQUEST['user_id'];

         
         $query=mysqli_query($conn,"SELECT * FROM `user` WHERE `user`.user_id ='$user_id'");
         $row=mysqli_fetch_array($query);
         $username=$row['fullname'];
         $profile_picture= $row['profile_picture'];
         $cover_picture= $row['cover_picture'];
         ?>


<div id="nav">

 
   <a id="myBtn2"><img src="<?php echo $row['profile_picture'] ?>" style = "float:left;" height = "200px"  width="100%"></a>

    <br><br>
  
 


</div>

 

<div id="section">
  
<a id="myBtn"><img src = "<?php echo $row['cover_picture'] ?>" style = "float:left;" height = "300px"  width="95%" /></a> 

 </div> 
<hr>
<div id="section" style="margin-top: 10px; margin-left: 240px;">
      <b style="color: black;"><label style="color: black; font-size: 30px;"><?php echo $row['fullname']; ?>&nbsp;&nbsp;(<?php echo $row['username']; ?>)</label></b>
  </div>
  <?php
  include 'includes/coment_con.php';
          $user_id=$_REQUEST['user_id'];

         $query=mysqli_query($conn,"SELECT Count(photo.photo_id) FROM photo WHERE photo.user_id='$user_id'");
         $row=mysqli_fetch_array($query);
         $photo_id=$row['Count(photo.photo_id)'];

         ?>
    <div class="profileinfo"><center>
                 
                 <div id="followers229" style="">
                <label style="color: black;"> <b>0</b> friends</label>&nbsp;&nbsp;
                 <label style="color: black;"> <b><?php echo "$photo_id"; ?></b> posts</label>&nbsp;&nbsp;
                 <input style="color: black; border-radius: 5px;" type="button" id="submitbutton" name="addfriend" value="add friend" onclick="return changeText('submitbutton');">
                 
                </div>    


</center>
</div>
<b> <p style="margin-top: 500px;">Recently post</p></b>


  <?php
      include("includes/database.php");
              $query=mySQL_query("SELECT photo.photo_id, photo.user_id, photo.description, photo.date, photo.post_img, photo.posted_by FROM photo  WHERE photo.user_id='$user_id'") or die(mySQL_error());
              while($row=mySQL_fetch_array($query)){
                  $location = $row['post_img'];
                  $description=$row['description']; 
                 
            
  ?>

 
<div class="img">
  <a target="_blank" href="fjords.jpg">
    <img src="<?php echo $location;?>" alt="Fjords" width="300" height="200">
  </a>
  <div class="desc"><?php echo $description; ?></div>
</div>
    

      
       
     

          <?php}?>  
              <?php
  }
  ?>   
     
</body>
</html>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<script type="text/javascript"> 
    function changeText(submitId){
        var submit = document.getElementById(submitId);
        submit.value = 'requst sent...';
        return false;
    };
</script>