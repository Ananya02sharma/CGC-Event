<?php
session_start();

if(!isset($_SESSION['author'])){
header("Location: http://localhost/Blog/login.php");
}
$serverName = "localhost:3307";
$user = "Ananya";
$pwd = "";
$db = mysqli_connect($serverName,$user,$pwd,"blogwebsite");
$mail =  mysqli_real_escape_string($db,$_POST['mail']);
$name =  mysqli_real_escape_string($db,$_POST['name']);
$pass = mysqli_real_escape_string($db,$_POST['password']);
$pass = hash('sha512',$pass);

$role = filter_input(INPUT_POST, 'role', FILTER_SANITIZE_STRING);
$query = "SELECT *  FROM author where mail = '$mail'";
$result = mysqli_query($db,$query);
$nums = mysqli_num_rows($result);
if($nums>=1){
    header("Location:http://localhost/Blog/insert_error.php");
}
  else{ $query = "INSERT INTO author(name,mail,password,Role) VALUES('$name','$mail','$pass','$role')";
$result = mysqli_query($db,$query);
header("Location:http://localhost/Blog/index.php");
}


// if(empty($_POST['1'])){
//     $role = mysqli_real_escape_string($db,$_POST['2']);
// }
// else{
//     $role = mysqli_real_escape_string($db,$_POST['1']);   
// }



    

?>