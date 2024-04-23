<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Main Page</title>
    <link rel="stylesheet" href="bootstrap.css" />
    <style>
      .banner-image {
        background-image: url('https://t3.ftcdn.net/jpg/06/47/27/00/360_F_647270071_qQNlGIVY9mx8Ae40q0PMDDYkNaQrWQer.jpg');
        background-size: cover;
        animation: slide 10s infinite;
      
      }
    
@keyframes slide{
    40% {
        background: url('./cgc2.jpg') no-repeat ;
        background-size: cover;
      }
    /* 40% {
        background: url('http://nathanaelgreeneacademy.com/wp-content/uploads/2016/05/1370738959078.jpg');
    } */
}
    </style>
      <!-- <script src="https://unpkg.com/scrollreveal"></script> -->
  </head>
  <body>
    <!-- Navbar  -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
      <div class="container">
      <img class = "img2" src = "https://img.collegedekhocdn.com/media/img/institute/logo/cgc_3.jpeg" alt = "">
        <a class="navbar-brand text-black" href="#">CGC EVENTS</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav">
           
            <li class="nav-item">
              <a class="nav-link text-black" href="about.php">About</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

    <!-- Banner Image  -->
    <div
      class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center"
    >
      <div class="content text-center">
         
       
             <a  href = "http://localhost/Blog/index.php">
          <button class = "btn btn-success btn-lg mx-2 fs-4">User</button></a> 
          <a  href = "http://localhost/Blog/admin.php">
          <button class = "btn btn-success btn-lg mx-2 fs-4">Admin</button></a> 
      </div>
    </div>

    <!-- Main Content Area -->
    <!-- <div class="container my-5 d-grid gap-5">
      <div class="p-5 border">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Necessitatibus veniam ipsa earum quibusdam, atque ipsum error maiores
          natus iusto fugit id saepe neque rerum magni laudantium accusantium
          dolorem numquam quasi.
        </p>
     
     
      
      </div>
    </div> -->
    
    <footer class=" text-white py-6"  >
      
      <div class="credits text-center py-2">
        <p>Made by Btech Grads &copy; 2024.All rights reserved.</p>
       </div>
              </footer>
            
              <script>

              </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script> 
  </body>
</html>
