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
  <?php include ('process/session.php');?>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "biobook");
  
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$term = mysqli_real_escape_string($link, $_REQUEST['term']);



if(isset($term)){
    // Attempt select query execution
   


   $sql = "SELECT
       `user`.user_id,
       `user`.fullname,
       `user`.username,
       `user`.email,
       `user`.`password`,
       `user`.profile_picture,
       `user`.cover_picture

        FROM
        `user`
         WHERE
        `user`.fullname LIKE '" . $term . "%'";

    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
               // echo "<p>" . $row['word']."<p>". $row[word_meaning'] . "</p>";
     ?>

      <div class="result" style="background-color: white; border-bottom-right-radius: 10px; border-bottom-left-radius: 10px; width: 400px;">
 
            <br>
                  <div class="result">
                <a href="view_profile.php?user_id=<?php echo $row['user_id'];?>" style="color: black;"><img src="<?php echo $row['profile_picture'];?>"
                  width="30px" height="30px" style="border-radius:5px;" draggable="false" />
                 <br/> <b><?php echo $row['fullname']?>&nbsp;&nbsp;<?php echo $row['username']?></b></a>                
                   </div>

                
           </div>
     
      <?php 
            }
            // Close result set
            mysqli_free_result($result);
        } else{
            echo "<p>No matches found</p>";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}
 
// close connection
mysqli_close($link);


      ?>

       