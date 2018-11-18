<!DOCTYPE html>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/icon.css">
    <link rel="stylesheet" type="text/css" href="css/materialize.css">
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" href="css/login.css" />
    <script type = "text/javascript"   src = "jquery/jquery-2.1.1.min.js"></script>           
    <script src = "jquery/materialize.min.js"> </script> 

  <title></title>
</head>
<style>
  .iframesize{
  width:100%;
  padding:10px;
  height:115%;

}
#content-area{
  width:100%;
  text-align:center;
  height:495px;
}
</style>
<script type="text/javascript">
function changeSRC(page)
{
  document.getElementById('content').src=page;
}
</script>

 <?php include ('process/session.php');?>

<body>
            <nav>
        
                  &nbsp; &nbsp; &nbsp;<a style="margin-left: 180px;" href = "javascript:changeSRC('home.php')" ><img src="image/logoss.png" width="50px" height="50px"><font class="logo">ShareMU</font></a>
                  <ul id = "nav-mobile" class = "right hide-on-med-and-down" style="margin-right: 200px;">
                      <li><a  href = "javascript:changeSRC('profile.php')"><img src="image/profile.png" width="45px" height="45px"></a></li>
                     <li><a  id="myBtn"><img src="image/upload.png" width="45px" height="45px"></a></li>
                    <li><a href = ""><img src="image/notification.png" width="45px" height="45px"></a></li>
                    <!--<li><a href = "process/logout.php"><img src="image/logout.png" width="50px" height="50px"></a></li> -->
                  </ul>
            
            </nav>    
        

<div id="myModal" class="modal">

  <!-- Modal content -->
  <form action = "post.php" enctype = "multipart/form-data" method = "POST" >
  <div class="modal-content">
      

    <h5 style="color:black;">Upload your post</h5><span style="margin-left: 80%" class="close">&times;</span>

 <input type="text" name="description" id="description" placeholder="What's on your mind?" required /> 
       
      <input type="hidden" name="posted_by" id="posted_by" value="<?php echo($fullname); ?>">
      <form id="uploadimage" action="" method="post" enctype="multipart/form-data">
       <center><div id="image_preview"><img id="previewing" style="height:250px;width:250px;" src="image/default.png" /></div><center>
      <hr id="line">
       <div id="selectImage">
      <h6 style="color:black;">Select image</h6>
        <input type="file" name="file" id="file" required />
       <input type="text" id="accountid" name="accountid" style="display:none" value="<?php echo $row['user_id'];?>" >
       <input type="submit" class="btn" value="Upload"/>

     </div>
        </form>
      </div>
      <div id="message"></div>
  </div>


            



 <div id="content-area">
  <iframe  class="iframesize" src="home.php" id="content"  frameborder="0" scrolling="yes" ></iframe>
    <div class="footer" style="text-align:center">
            &copy; 2018 <span style="color:#ee6e73;">ShareMU</span>. All Rights Reserved.
          </div> 

</body>
</html>
<script src="jquery/jquery.min.js"></script>
<script src="script/script.js"></script>
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
</script>