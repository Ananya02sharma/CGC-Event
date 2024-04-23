<?php
session_start();
if(!isset($_SESSION['author'])){
header("Location: http://localhost/Blog/login.php");
}
else echo '<script>alert("you logged in as a user")</script>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href="bootstrap.css">
    
</head>
<body>

    <nav class="navbar navbar-expand-lg  ">
    <img class = "img2" src = "https://img.collegedekhocdn.com/media/img/institute/logo/cgc_3.jpeg" alt = "">
    <div class="container-fluid">
       <a class="navbar-brand fs-3 fw-bold text-blue " href="main.php">Events</a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>

       <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
          
           <li class="nav-item" >
             <a class="nav-link active fw-bold text-blue" aria-current="page" href="./index.php">Home</a>
           </li>
           <li class="nav-item">
              <a class="nav-link fw-bold text-blue" href="./login.php">login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold text-blue" href="./insert_author.php">Sign Up</a>
            </li>
           <li class="nav-item">
             <a class="nav-link fw-bold text-blue" href="./about.php">About Us</a>
           </li>
          
          
         </ul>
         <form method="POST" action="http://localhost/Blog/view_source.php"class="d-flex" role="search">
           <input  name = 'seo'class="form-control " type="search" placeholder="enter event" aria-label="Search">
           <button class="btn btn-dark fw-bold text-dark bg-white " type="submit">Search</button>
         </form>
       </div>
     </div></div>
      </nav>
      <section class = "hero py-5 ">
        <div class="container">
          <div class = "d-flex justify-content-right ">
            <h1 class = "fw-bold text-white">
            EVENTS <br>
            To Add a Event Sign In As a Admin 
            <a  href = "http://localhost/Blog/login.php">
       <button class = "btn btn-success btn-lg mx-2 fs-4">Log in</button></a> 
            </h1>
          </div>
        
        </div>
      </section>
      <main class = "content bg-light container py-4">
        
        <section class = "row">
          <?php
            require_once("./getPost.php");
            getMainPost();
          ?>
        </section>
        <!-- <div class="d-flex justify-content-center my-3 ">
        <a  href = "http://localhost/Blog/update_post.php">
       <button class = "btn btn-success btn-lg mx-2 fs-4">Update Post</button></a> 
          <a  href = "http://localhost/Blog/insert_post.php"><button class = "btn btn-success btn-lg fs-4"> Insert Post</button></a>
          <a  href = "http://localhost/Blog/delete.php">
       <button class = "btn btn-success btn-lg mx-2 fs-4">Delete Post</button></a> 
       
        </div> -->
         
        
         
        </main>
       
        <footer   class="py-4 ">
        <div class="container">
            <p class="m-0 text-center text-white"> Made by Btech Grads &copy; 2024.All rights reserved.</p>
        </div>
    </footer>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script> 
</body>

</html>