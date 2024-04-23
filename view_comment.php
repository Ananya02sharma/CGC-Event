<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="bootstrap.css">

  <style>
     .custom-margin {
         margin-top: 20vh;
      }
      .f-s{
        font-size: 32px;
      }
    body{
         background-image: url('https://img.freepik.com/free-vector/low-poly-white-subtle-colors-background_1017-33838.jpg?w=2000');
         background-repeat: no-repeat;
        
         width: 100%;
         height: 100%;
         
      }
  </style>
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
  <div class="container mt-5 mb-6">

            <div class="row height d-flex justify-content-center align-items-center">

              <div class="col-md-7">

                <div class="card">

                  <div class="p-3">

                    <h6>Comments</h6>
                    
                  </div>
<!-- <form method = "POST" action="http://localhost/Blog/view_php.php">
<div class="mt-3 d-flex flex-row align-items-center p-3 form-color">

<img src="https://i.imgur.com/zQZSWrt.jpg" width="50" class="rounded-circle mr-2">
<input type="text" class="form-control" placeholder="Enter your comment...">

</div>
</form> -->


                  <!-- <div class="mt-2">

                    <div class="d-flex flex-row p-3">

                      <img src="https://i.imgur.com/zQZSWrt.jpg" width="40" height="40" class="rounded-circle mr-3">

                      <div class="w-100">

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex flex-row align-items-center">
                              <span class="mr-2">Brian selter</span>
                              <small class="c-badge">Top Comment</small>
                            </div>
                            <small>12h ago</small>
                      </div>

                      <p class="text-justify comment-text mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

                      <div class="d-flex flex-row user-feed">

                        <span class="wish"><i class="fa fa-heartbeat mr-2"></i>24</span>
                        <span class="ml-3"><i class="fa fa-comments-o mr-2"></i>Reply</span>

                        
                      </div>
                      
                    </div>
                    

                  </div> -->

                  <?php
                    require_once("./view_php.php");
                    getComment();
                    ?>
                 


                  
                </div>
                
              </div>
              
            </div>
            </div>
            
          </div>
  
          <div class="col-lg-4">
                
                <div class="card mb-4 bg-dark text-white">
                    <div class="card-header">Comment section</div>
                    <div class="card-body">
                    comments related to particular event
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer-->
    
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
    crossorigin="anonymous"></script>
</body>

</html>