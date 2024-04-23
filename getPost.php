<?php
function getMainPost(){
    $serverName = "localhost:3307";
$user = "Ananya";
$pwd = "(iI0AAYJy_rHz{zu";
$db = mysqli_connect($serverName,$user,$pwd,"blogwebsite");
$query = "SELECT * FROM post ORDER BY date DESC LIMIT 20 ";
$result = mysqli_query($db,$query);

while($row = mysqli_fetch_array($result)){
 
    // $query = "SELECT name FROM category INNER JOIN has_category ON category.id = has_category.category
    // WHERE has_category.post = ".$row['id'] ;
    // $cat_result = mysqli_query($db,$query);
    // $categories = "";
    // while($category = mysqli_fetch_array($cat_result) ){
    //     $categories .= '<span class="badge  bg-success ml-1 fs-5">'.$category['name'].'</span>';
    // }
    // <p >'.$categories.'</p>
    echo ' <article class = "col-md-3  p-0">
    <div class="m-1 shadow">
      <img class = "img-fluid img-thumbnail" alt = "'.$row['title'].'" src="'.$row['url'].'"> 
    <div class="article-content px-2 py-1">
     <h2 class = "fs-3 fw-bold">'.$row['seo_title'].'</h2>
     <a class = " fw-bold" href = "#"  > '.$row['title'].'</a>
     <div class="d-flex justify-content-between">
       <p>'.substr($row['date'],0,10).'</p>
      
       <a  href = "http://localhost/Blog/view.php">
       <button class = "btn btn-success btn-lg mx-2 fs-6">View Post</button></a> 
     </div>
    </div>
    </div>
    
    </article>';
}
}
?>