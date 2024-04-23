<?php


session_start();
if(!isset($_SESSION['author'])){
header("Location: http://localhost/Blog/login.php");
}
$serverName = "localhost:3307";
    $user = "Ananya";
    $pwd = "(iI0AAYJy_rHz{zu";
    $db = mysqli_connect($serverName,$user,$pwd,"blogwebsite");
    // $id = $_POST['id'];
    
    // $title = $_POST['title'];
    $title = mysqli_real_escape_string($db,$_SESSION['author']);
     
   if(empty($_POST['comment']) == false){
    $post_title = mysqli_real_escape_string($db,$_POST['post']);
    $comment = mysqli_real_escape_string($db,$_POST['comment']);
    $query = "INSERT INTO comments(id,comment,post_title)
    VALUES('$title','$comment','$post_title')";
    
     mysqli_query($db,$query);
    
}

header('Location: http://localhost/Blog/view_source.php');
?>