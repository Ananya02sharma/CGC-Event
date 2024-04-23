<?php
session_start();
$serverName = "localhost:3307";
$user = "Ananya";
$pwd = "(iI0AAYJy_rHz{zu";
$db = mysqli_connect($serverName,$user,$pwd,"blogwebsite");
$mail =  mysqli_real_escape_string($db,$_POST['mail']);

$pass = mysqli_real_escape_string($db,$_POST['password']);

$pass = hash('sha512',$pass);
$query = "SELECT id  FROM author where mail = '$mail' AND password = '$pass'";

$result = mysqli_query($db,$query);

if(mysqli_num_rows($result) == 1){
    $c = 'Admin';
    $b = 'User';
    
    $_SESSION['author'] = mysqli_fetch_array($result)[0];
    $query = "SELECT role FROM author where mail = '$mail' AND password = '$pass'";
    $result = mysqli_query($db,$query);
    if(mysqli_num_rows($result) == 1){
        $a = mysqli_fetch_array($result)[0];
        if($a == $b){
            header("Location:http://localhost/Blog/index.php"); 
        }
        else if($a == $c){
            header("Location:http://localhost/Blog/admin.php");  
        }
    }
}
else{
    header("Location:http://localhost/Blog/insert_error.php"); 
}
?>