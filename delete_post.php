<?php

    $serverName = "localhost:3307";
    $user = "Ananya";
    $pwd = "";
    $db = mysqli_connect($serverName,$user,$pwd,"blogwebsite");
    // $id = $_POST['id'];
    $title = mysqli_real_escape_string($db,$_POST['seo']);
    $userName = mysqli_real_escape_string($db,$_POST['id']);
    // $query = "DELETE from post WHERE title = '$title' ";
  $query = "DELETE post FROM post INNER JOIN author ON post.author = author.id where post.seo_title = '$title' AND author.mail = '$userName'  ";
  
  mysqli_query($db,$query);
  
    
    
    header('Location: http://localhost/Blog/admin.php');
?>
