<?php
function getComment(){
$serverName = "localhost:3307";
    $user = "Ananya";
    $pwd = "(iI0AAYJy_rHz{zu";
    $db = mysqli_connect($serverName,$user,$pwd,"blogwebsite");

    $post = mysqli_real_escape_string($db,$_POST['post']);
    $query  = "SELECT * from comments where post_title = '$post' limit 20";
  
   $result =  mysqli_query($db,$query);
   while($row = mysqli_fetch_array($result)){
      
    $query = "SELECT name from author WHERE id =".$row['id'];
    $cat =  mysqli_query($db,$query);
    if(mysqli_num_rows($cat) == 1){
      $a = mysqli_fetch_array($cat)[0];}
      else{
        $a = "No name";
      }
    echo '
    <div class="mt-2">

                    <div class="d-flex flex-row p-3">

                      <img src="https://i.imgur.com/zQZSWrt.jpg" width="40" height="40" class="rounded-circle mr-3">

                      <div class="w-100">

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex flex-row align-items-center">
                              <span class="mr-2">'.$a.'</span>
                             
                            </div>
                            <small>'.substr($row['date'],0,10).'</small>
                      </div>

                      <p class="text-justify comment-text mb-0">'.$row['comment'].'</p>

                      <div class="d-flex flex-row user-feed">

                        

                        
                      </div>
                      
                    </div>
                    

                  </div>';

    
  }
   
}
    ?>