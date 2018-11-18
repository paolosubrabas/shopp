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
         <link rel="stylesheet" type="text/css" href="css/w3.css">

  <link rel="stylesheet" href="css/login.css" />
<script type="text/javascript" src="java/jquery-3.1.1.min.js"></script>
<link rel="stylesheet" href="fonts/font.css" />
<link href="css/design.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="java/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="java/java.js"></script>
<script type="text/javascript" src="java/onscrollindex.js"></script>

</head>
  <style>
.container {
    display: inline-block;
    cursor: pointer;
}

.bar1, .bar2, .bar3 {
    width: 35px;
    height: 5px;
    background-color: #333;
    margin: 6px 0;
    transition: 0.4s;
}

.change .bar1 {
    -webkit-transform: rotate(-45deg) translate(-9px, 6px);
    transform: rotate(-45deg) translate(-9px, 6px);
}

.change .bar2 {opacity: 0;}

.change .bar3 {
    -webkit-transform: rotate(45deg) translate(-8px, -8px);
    transform: rotate(45deg) translate(-8px, -8px);
}
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
   
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
/**modal css**/

body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
   height:900px; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 400px;
   
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
<body>


<div id="nav" style="margin-top: 35px">
   <button style="border-radius:10px;" onclick="document.getElementById('id01').style.display='block'"><a id="myBtn2" ><img src="<?php echo $row['profile_picture'] ?>" style = "float:left; border-radius:10px; mar" height = "200px"  width="200px"></a></button>

</div>

<div id="section">
<a id="myBtn"><img src = "<?php echo $row['cover_picture'] ?>" style = "float:center; margin-left: 30px;" height = "300px"  width="100%" /></a> 
 </div> 




<div id="section" style="margin-top: 10px; margin-left: 240px;">
      <b style="color: black;"><p style="color: black; font-size: 30px;"><?php echo $fullname ?>&nbsp;(<?php echo $username ?>)</p></b>
  </div> 
  <?php
  include 'includes/coment_con.php';
         
         $query=mysqli_query($conn,"SELECT Count(photo.photo_id) FROM photo WHERE photo.user_id='$id'");
         $row=mysqli_fetch_array($query);
         $photo_id=$row['Count(photo.photo_id)'];
         ?>
    <div class="profileinfo"><center>
                 
                 <div id="followers229" style="">
                <label style="color: black;"> <b>0</b> friends</label>&nbsp;&nbsp;
                 <label style="color: black;"> <b><?php echo "$photo_id"; ?></b> posts</label>&nbsp;&nbsp;
                 <a href="setting.php?user_id=<?php echo $user_id;?>">account setting</a> <a href = "process/logout.php"><img src="image/logout.png" width="50px" height="50px"></a></li>

                 
                 

                 </div>

  </center>
</div>

<div id="myModal" class="modal">

  <!-- Modal content -->
  <form action = "cover.php" enctype = "multipart/form-data" method = "POST" >
  <div class="modal-content">
    <span class="close">&times;</span>
  <b>change cover |Photo</b><br/>

        <hr>
        <input type="hidden" name="user_id" id="user_id" value="<?php echo($id); ?>">
      <form id="uploadimage" action="" method="post" enctype="multipart/form-data">
       <div id="image_preview"><img id="previewing" style="height:150px;width:300px;" src="image/default.png" /></div>
      <hr id="line">
       <div id="selectImage">
      <label>Select Your Image</label><br/>
        <input type="file" name="file" id="file" required />
       <input type="submit" value="Upload" class="submit" />

     </div>
        </form>
      </div>
      <div id="message"></div>
  </div>
    
<!-- profile picture  -->
<div id="id01" class="w3-modal">
   <form action = "profile_pic.php" enctype = "multipart/form-data" method = "POST" >
    <div class="w3-modal-content">
      <header class="w3-container w3-teal"> 
     <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
  <b>change profile |Photo</b><br/>

        <hr>
        <input type="hidden" name="user_id" id="user_id" value="<?php echo($id); ?>">
      <label>Select Your Image</label><br/>
        <input type="file" name="file" id="file" required />
       <input type="submit" value="Upload" class="submit" />

     </div>
        </form>
      </div>
      <div id="message"></div>
  </div>
</div>







</body>
</html>
<script src="jquery/jquery.min.js"></script>
<script src="script/script.js"></script>
<script>
function myFunction(x) {
    x.classList.toggle("change");
}
</script>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
function openSearch() {
    document.getElementById("myOverlay").style.display = "block";
}

function closeSearch() {
    document.getElementById("myOverlay").style.display = "none";
}
// para sa profile picture modal

</script>
