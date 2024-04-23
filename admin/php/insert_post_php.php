<?php
session_start();
if(!isset($_SESSION['author'])){
header("Location: http://localhost/Blog/login.php");
}



$serverName = "localhost:3307";
$user = "Ananya";
$pwd = "ananya101";

$db = mysqli_connect($serverName,$user,$pwd,"blogwebsite");
$title = mysqli_real_escape_string($db,$_POST['title']);
$seo = mysqli_real_escape_string($db,$_POST['seo']);
$content = mysqli_real_escape_string($db,$_POST['content']);
// $category = $_POST['category'];
$author = mysqli_real_escape_string($db,$_POST['author']);
if(empty($_POST['url'])){
  $url = 'https://images.unsplash.com/photo-1575936123452-b67c3203c357?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8aW1hZ2V8ZW58MHx8MHx8&w=1000&q=80';
}
else{
  $url = mysqli_real_escape_string($db,$_POST['url']);
}
$query = "INSERT INTO post(title,seo_title,content,author,url)
VALUES('$title','$seo','$content',$author,'$url')";

 mysqli_query($db,$query);
// fetching id from post table of seo title
// $query = "SELECT id FROM post WHERE seo_title = '$seo'";
// $result = mysqli_query($db,$query);
//  $row = mysqli_fetch_array($result);
//  echo $row[0];
//  $post_id =  $row[0];
//  $category_array =  explode(" ",$category);
//  foreach ($category_array as $el ) {
//    $query = "INSERT INTO has_category(post,category) VALUES($post_id,$el)";
//    mysqli_query($db,$query);
//  }
 header('Location: http://localhost/Blog/index.php');
?>
