<?php
    session_start();
    $serverName = "localhost:3307";
    $user = "Ananya";
    $pwd = "";
    $db = mysqli_connect($serverName,$user,$pwd,"blogwebsite");
    // $id = $_POST['id'];
    
    $title = mysqli_real_escape_string($db,$_POST['title']);
    $seo = mysqli_real_escape_string($db,$_POST['seo']);
    $author = mysqli_real_escape_string($db,$_SESSION['author']);
    $query  = "SELECT id from post where title = '$title' and seo_title = '$seo'";
      
   $result =  mysqli_query($db,$query);
    if(mysqli_num_rows($result) == 1){

        $a =  mysqli_fetch_array($result)[0];
        if($a == $author){
        if(isset($_POST['content'])){
            $content = mysqli_real_escape_string($db,$_POST['content']);
            $query  = "UPDATE post
            SET content= '$content'
            WHERE id = '$a'";
            mysqli_query($db,$query);
        }
        if(isset($_POST['url'])){
            $url = mysqli_real_escape_string($db,$_POST['url']);
            $query  = "UPDATE post
       SET url = '$url'
       WHERE id = '$a'";
       mysqli_query($db,$query);
        }}
        else{
           '<script>alert("U are already logged in")</script>';
            header("Location:http://localhost/Blog/admin.php");
        }
    //    $url = $_POST['url'];
      
    //    $query  = "UPDATE post
    //    SET seo_title = '=$seo', content= '$content',url = '$url'
    //    WHERE id = '$a'";
    //    mysqli_query($db,$query);
        // header("Location:http://localhost/Blog/index.php");
    }
    else{
        header("Location:http://localhost/Blog/insert_author.php"); 
    }
    
    
    // header('Location: http://localhost/Blog/index.php');
?>