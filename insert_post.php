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
    <img class = "img2" src = "https://img.collegedekhocdn.com/media/img/institute/logo/cgc_3.jpeg" alt = "">
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
          <form method="POST" action="http://localhost/Blog/view_source.php"class="d-flex" role="search">
           <input  name = 'title'class="form-control " type="search" placeholder="enter event" aria-label="Search">
           <button class="btn btn-dark fw-bold text-dark bg-white " type="submit">Search</button>
         </form>
        </div>
     </div></div>
      </nav>
      <section class = "hero py-2 px-5">
        <div class="container">
          <div class = "d-flex justify-content-center ">
            <h1 class = "fw-bold text-white fs-1 ">
              Insert post
            </h1>
          </div>
        
        </div>
      </section>
      <main class = "content bg-light container py-2">
       <div class="row justify-content-center">
       <form  class = "col-md-6" method = "POST" action="http://localhost/Blog/admin/php/insert_post.php">
        <input name = "author" type="hidden" value="<?php echo $_SESSION['author']?>">
          <div class="row mb-3">
            <label for="Email" class="col-sm-2 col-form-label fw-bold">Title</label>
            <div class="col-sm-10">
              <input name = "title" type="text" class="form-control" id="Email">
            </div>
          </div>
          <div class="row mb-3">
            <label for="Name" class="col-sm-2 col-form-label fw-bold">seo_title</label>
            <div class="col-sm-10">
              <input name="seo" type="text" class="form-control" id="Name">
            </div>
          </div>
          <div class="row mb-3">
            <label for="Subject" class="col-sm-2 col-form-label fw-bold">Category</label>
            <div class="col-sm-10">
              <input name="category" type="text" class="form-control" id="Subject">
            </div>
          </div>
          <div class="row mb-3">
            <label for="Message" class="col-sm-2 col-form-label fw-bold">Content</label>
            <div class="col-sm-10">
              <textarea name="content" id = "Message" class = "w-100 p-5" type = "text">
            
              </textarea>
            </div>
          </div>
          <div class="row mb-3">
            <label for="url" class="col-sm-2 col-form-label fw-bold">Enter Avatar URL(optional)</label>
            <div class="col-sm-10">
              <input name="url" type="text" class="form-control" id="url">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
              <button type="submit" class="btn btn-primary fs-4 px-2">Insert</button> 
            </div>
          </div>
         
        </form>
     
           
        </div>
      
        
         
        </main>
       
        <footer  style = "background: linear-gradient(to right,grey
 ,rgb(132, 69, 80),rgb(2, 2, 44));"  class="text-white pt-4 pb-2">

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

      /* If you add background image it will look like transparent form*/
       body {
         /* background-image: url('pexels-szabó-viktor-3227984.jpg'); */
         background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaHvumI7nudZFIXqKwshVlRliuzbdKLClJa1xqzuFnRvSETPpSL-KwMNK3SZYLzk1mem0&usqp=CAU');
         background-size: cover;
         background-repeat: no-repeat;
         width: 100%;
         height: 100%;
         
      }
      .bg{
        background-color: gray;
      }
      .navbar-toggler {
          color: beige;
          background-color : beige;
      }
      .f-s{
        font-size: 32px;
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
            <h1 class="text-white f-s font-weight-bold">Insert Post</h1>
            <form  method = "POST" action="./insert_post_php.php"class="shadow-lg p-4 text-white">
              <input name = "author" type="hidden" value="<?php echo $_SESSION['author']?>">
              <div class="form-group">
                  <i class="fas fa-user"></i>
                  <label for="title" class="pl-2 font-weight-bold">Event_author</label>
                  <input name="title" type="text"
                     class="form-control" placeholder="title" id = 'title' required>
    </div>
    <div class="form-group">
                     <i class="fas fa-user"></i>
                  <label for="seo" class="pl-2 font-weight-bold">Event_title </label>
                  <input name="seo" type="text"
                     class="form-control" id = "seo" required>
                  <!--Add text-white below if want text color white-->
                  
               </div>
               <!-- <div class="form-group">
                     <i class="fas fa-user"></i>
                  <label for="category" class="pl-2 font-weight-bold">category</label>
                  <input name="category" type="text"
                     class="form-control" id = "category" >
                
                  
               </div> -->
               <div class="form-group">
                     <i class="fas fa-user"></i>
                  <label for="content" class="pl-2 font-weight-bold">content</label>
                  <textarea name="content" type="text"
                     class="form-control" id = "content" required>
                  </textarea>
                  <!--Add text-white below if want text color white-->
                  
               </div>
               <div class="form-group">
                     <i class="fas fa-user"></i>
                  <label for="url" class="pl-2 font-weight-bold">Avatar URL (optional)</label>
                  <input name="url" type="text"
                     class="form-control" id = "url" >
                  <!--Add text-white below if want text color white-->
                  
               </div>
               
               
               <button type="submit" class="btn btn-outline-success mt-3 btn-block shadow-sm font-weight-bold ">Submit</button>
            </form>
         </div>
      </div>
   </div>
   <footer   class=" text-white pt-4 pb-2">
    
    <div class="credits text-center py-2">
    <p> Made by Btech Grads &copy; 2024.All rights reserved.</p>
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