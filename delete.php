<?php
session_start();
if(!isset($_SESSION['author'])){
header("Location: http://localhost/Blog/login.php");
}

?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href="bootstrap.css">
</head>
<body>
   <nav class="navbar navbar-expand-lg text-dark bg-light ">
      <div class="container-fluid">
        <a class="navbar-brand fs-3 fw-bold text-blue " href="#">Lets Blog</a>
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
              <a class="nav-link fw-bold text-blue" href="./about.html">About Us</a>
            </li>
            
           
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control " type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-dark fw-bold text-dark bg-white " type="submit">Search</button>
          </form>
        </div>
     </div></div>
      </nav>
      <section class = "hero py-2 px-5">
        <div class="container">
          <div class = "d-flex justify-content-center ">
            <h1 class = "fw-bold text-white fs-1 ">
            View Post
            </h1>
          </div>
        
        </div>
      </section>
      <main class = "content bg-light container py-2">
       <div class="row justify-content-center">
       <form  class = "col-md-6" method = "POST" action="http://localhost/Blog/delete_post.php">
       
          <div class="row mb-3">
            <label for="id" class="col-sm-2 col-form-label">title</label>
            <div class="col-sm-10">
              <input name = "title" type="text" class="form-control" id="inputEmail3">
            </div>
          </div>
          <div class="row mb-3">
            <label for="Name" class="col-sm-2 col-form-label">UserName</label>
            <div class="col-sm-10">
              <input name="id" type="text" class="form-control" id="inputPassword3">
            </div>
          </div>
         
         
          <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
              <button type="submit" class="btn btn-primary fs-4 px-2">Sign in</button> 
            </div>
          </div>
         
        </form>
     
           
        </div>
      
        
         
        </main>
       
        <footer class="bg-dark text-white pt-4 pb-2">
<div class="container text-center">
  <h2 class="fw-bold">Blog</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas veniam sapiente et ex, alias laudantium sit, nostrum dignissimos harum, dolorem corporis dolorum. 
    Inventore ab laboriosam quo nihil beatae eos provident?</p>
    <div class="d-flex flex-wrap justify-content-center">
 <a class="badge badge-primary bg-success fs-5 m-1 p-2" href=""> privacy</a>
 <a class="badge badge-primary  bg-success fs-5 m-1 p-2" href=""> terms conditions</a>
 <a class="badge badge-primary bg-success fs-5 m-1 p-2" href=""> settings</a>
    </div>
</div>
<div class="credits text-center py-2">
 <p> Made by Ananya and mohini &copy; 2023.All rights reserved.</p>
</div>
        </footer>

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>  
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="bootstrap.css">
   <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"> -->

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
      crossorigin="anonymous">

   <style>
      .custom-margin {
         margin-top: 20vh;
      }
      .f-s{
        font-size: 32px;
      }

      /* If you add background image it will look like transparent form*/
       body {
         background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaHvumI7nudZFIXqKwshVlRliuzbdKLClJa1xqzuFnRvSETPpSL-KwMNK3SZYLzk1mem0&usqp=CAU');
         background-repeat: no-repeat;
         width: 100%;
         height: 100%;
         background-size: cover;
      }
      .bg{
        background-color: gray;
      }
      .navbar-toggler {
          color: beige;
          background-color : beige;
      }
   </style>
   <title>Login Form</title>
</head>

<body>



    <nav class="navbar navbar-expand-lg text-dark bg-light ">
    <img class = "img2" src = "https://img.collegedekhocdn.com/media/img/institute/logo/cgc_3.jpeg" alt = "">
        <div class="container-fluid">

          <a class="navbar-brand fs-3 fw-bold text-blue " href="./main.php">Events</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
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
           
          </div>
        </div>
        </div>
      </nav>





   <div class="container-fluid">
      <div class="row justify-content-center custom-margin">
         <div class="col-sm-6 col-md-4">
            <!-- Add bg-primary in form tag if want form background color-->
            <!--text-white if want text color white-->
            <h1 class="text-white f-s font-weight-bold">Delete Post</h1>
            <form action="http://localhost/Blog/delete_post.php" method = "POST" class="shadow-lg p-4 text-white">
               <div class="form-group">
                  <i class="fas fa-user"></i><label for="email" class="pl-2 font-weight-bold">Event_title</label>
                  <input name="seo" type="text"
                     class="form-control" placeholder="Event_title" required>
                  <!--Add text-white below if want text color white-->
                 
               </div>
               <div class="form-group">
                  <i class="fas fa-key"></i><label for="pass" class="pl-2 font-weight-bold">userName</label>
                  <input name = "id"  type="email"
                     class="form-control" placeholder="userName" required>
               </div>
               
               <button type="submit" class="btn btn-outline-success mt-3 btn-block shadow-sm font-weight-bold ">Submit</button>
            </form>
         </div>
      </div>
   </div>
   <footer   class="text-white pt-4 pb-2">
    
    <div class="credits text-center py-2">
      <p>Made by Btech Grads &copy; 2024.All rights reserved..</p>
    </div>
  </footer>


   
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
    crossorigin="anonymous"></script>
</body>

</html>