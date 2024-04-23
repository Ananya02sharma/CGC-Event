
<?php

session_start();
if(!isset($_SESSION['author'])){
header("Location: http://localhost/Blog/login.php");
}


// $serverName = "localhost:3307";
//     $user = "Ananya";
//     $pwd = "ananya101";
//     $db = mysqli_connect($serverName,$user,$pwd,"blogwebsite");
//     // $id = $_POST['id'];
    
//     // $title = $_POST['title'];
//     $title = $_SESSION['author'];
    
//    if(empty($_POST['comment']) == false){
//     $comment = $_POST['comment'];
//     $post_title = $_POST['post'];
//     $query = "INSERT INTO comments(id,comment,post_title)
//     VALUES('$title','$comment','$post_title')";
    
//      mysqli_query($db,$query);
// }

function viewPost(){
    $serverName = "localhost:3307";
    $user = "Ananya";
    $pwd = "(iI0AAYJy_rHz{zu";
    $db = mysqli_connect($serverName,$user,$pwd,"blogwebsite");
    // $id = $_POST['id'];
    
   
    if(isset($_POST['seo']) ){ 
      //code to be executed
      $title = mysqli_real_escape_string($db,$_POST['seo']);

    $query  = "SELECT * from post where seo_title = '$title'";
   $result =  mysqli_query($db,$query);
   $nums = mysqli_num_rows($result);
  if($nums==0){
    echo '<script>alert("the event doesnt exist")</script>';
    
  }
  else{
    while($row = mysqli_fetch_array($result)){
      
    
      echo '
      <article>
       <header class="mb-4">
      <!-- Post title-->
      <h1 class="fw-bolder mb-1">'.$row['seo_title'].'</h1>
      <!-- Post meta content-->
      <div class="text-muted fst-italic mb-2">'.$row['date'].' <a target = "_blank" href = "#">'.$row['title'].'</a></div>
      <!-- Post categories-->
      
  </header>
  <!-- Preview image figure-->
  <figure class="mb-4"><img class="img-fluid rounded" src="'.$row['url'].'" alt="..." /></figure>
  <!-- Post content-->
  <section class="mb-5">
      <p class="fs-5 mb-4">'.$row['content'].'</p>
  
  </section>
  </article>';

      
    }}}
    else {
      echo " ";
    }
  }
 
    
   
?>