<!DOCTYPE html>
  <html>
  <head>
     <link rel="stylesheet" type="text/css" href="css/postbox.css">
          <link rel="stylesheet" type="text/css" href="css/icon.css">
          <link rel="stylesheet" type="text/css" href="css/materialize.css">
          <link rel="stylesheet" type="text/css" href="css/materialize.min.css">

  <link rel="stylesheet" href="css/login.css" />
<script type="text/javascript" src="java/jquery-3.1.1.min.js"></script>

  <style> 
 .con1{

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

}
.con2{
   color: black;
}

</style>

  </head>
    <body style="margin-left: 400px;" >
  <style>
      .result p{
          margin: 0;
          padding: 7px 10px;
          border: 1px solid blue;
          border-top: none;
          cursor: pointer;
           width: 400px;
          margin-left: 40px;
      }
      .result p:hover{
          background: blue;
          width: 400px;
          margin-left: 60px;
      }
  </style>
  <form><center>
      <div class="search-box">
          <input type="text" style="width: 300px; margin-left: 60px;" autocomplete="off" placeholder="Search name  ..." /><i class="small material-icons" style="margin-top: 10px;" ><p>Search</p></i>
        <div class="result"></div>
      </div>
  </form>
  </center>
    

  <?php include ('process/session.php');?>

     

  <?php
      include("includes/database.php");
              $query=mySQL_query("SELECT * from photo inner JOIN user on user.user_id = photo.user_id order by photo_id DESC") or die(mySQL_error());
              while($row=mySQL_fetch_array($query)){
                  $location = $row['post_img'];
                  $profile_picture = $row['profile_picture'];
                  $description=$row['description']; 
                  $photo_id = $row['photo_id'];
                  $posted_by= $row['posted_by'];
                  $time=$row['date']; 
                  $user_id=$row['user_id']; 
  ?>
          
          
      <div class="con1">
      
              <div class="con2">
             <a href="view_profile.php?user_id=<?php echo $user_id;?>"> <img style="height: 50px; width:50px;" src="<?php echo $profile_picture ?>"> </a>
               &nbsp;<b><?php echo $posted_by?></b><br>
              <hr>
              </div>
              <div>
                  <div class="con2">
                  <center>
                  <a href ='viewpost.php?photo_id=<?php echo $row['photo_id'];?>'><img style="height: 300px; width:400px; " src="<?php echo $location ?>"></a> </center><br>
                   &nbsp; &nbsp; &nbsp; &nbsp;<b><?php echo $row['description']; ?></b>
                  <p>Date posted: <?php echo date("j-M-Y g:ia", strtotime($time)) ?></p>

               <hr class="con2" > 
                  </div>
             
          </div>
          <br><br>    
      
  <?php
  include("includes/database.php");
      //$comment=mySQL_query("SELECT * from comments where post_id='$post_id' order by post_id DESC") or die(mySQL_error());
      $comment=mySQL_query("SELECT
Count(comments.content_comment),
comments.photo_id
FROM
comments
WHERE
comments.photo_id = '$photo_id'
") or die(mySQL_error());
      while($row=mySQL_fetch_array($comment)){

      $comment_count=$row['Count(comments.content_comment)'];
    
      
?>  
<div class="con2">
  <b><?php echo($comment_count)?> comment(s)</b>
  <a href ='viewpost.php?photo_id=<?php echo $row['photo_id'];?>' style="margin-left: 300px; color: black;" ><b>Add comment</b></a>

</div>
<br><br>
 
   </div>
  <br><br>
              
      <?php
  }
  ?>

                
      <?php
  }
  ?>   
     



  </body>  
  </html>
  
  <script src="jquery/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("livesearch.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>