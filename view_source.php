<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Blog Post Name</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="bootstrap.css" rel="stylesheet" />
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg text-dark bg-light ">
    <img class = "img2" src = "https://img.collegedekhocdn.com/media/img/institute/logo/cgc_3.jpeg" alt = "">
        <div class="container-fluid">

            <a class="navbar-brand fs-3 fw-bold text-blue " href="./main.php">Events</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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
    <!-- Page content-->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <!-- Post content-->
                <!-- <article> -->
                    <!-- Post header-->
                    <?php
                    require_once("./view_post.php");
                    viewPost();
                    ?>
                </article>
                <!-- Comments section -->
                 <section class="mb-5">
                    <div class="card bg-light">
                        <div class="card-body"> 
                            Comment form
                             <h5 class="mb-4 bg-dark text-white"> Leave a Comment:</h5>
                            <form method = "POST" action="http://localhost/Blog/comment.php"class="mb-4">
                                <div class="row mb-3">
          <label for="Name" class="col-sm-2 col-form-label">Comment</label>
          <div class="col-sm-10">
            <input name="comment" type="text" class="form-control" id="Name">
          </div>
        </div>
        <div class="row mb-3">
          <label for="Name" class="col-sm-2 col-form-label">PostName</label>
          <div class="col-sm-10">
            <input name="post" type="text" class="form-control" id="Name">
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-sm-10 offset-sm-2">
            <button type="submit" target = "_sel" class="btn btn-primary fs-4 px-2">Sign in</button>
          </div>
        </div> 
                            </form>
                            
                            
                           
                        </div>
                    </div>
                </section> 
                <section class="mb-5">
                    <div class="card bg-light">
                        <div class="card-body"> 
                            Comment form
                             <h5 class="mb-4 bg-dark text-white">View Comments:</h5>
                            <form method = "POST" action="http://localhost/Blog/view_comment.php"class="mb-4">
                                
        <div class="row mb-3">
          <label for="Name" class="col-sm-2 col-form-label">PostName</label>
          <div class="col-sm-10">
            <input name="post" type="text" class="form-control" id="Name">
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-sm-10 offset-sm-2">
            <button type="submit" class="btn btn-primary fs-4 px-2">Sign in</button>
          </div>
        </div> 
                            </form>
                            
                            
                           
                        </div>
                    </div>
                </section>       
               
                            
                    </div>
            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">
                
                <div class="card mb-4 bg-dark text-white">
                    <div class="card-header">About us</div>
                    <div class="card-body">Engage with your audience and gather valuable feedback through our Comment Section. This interactive feature allows event attendees and visitors to share their thoughts, ask questions, and connect with each other. Whether it's sharing their experience, offering suggestions, or expressing excitement, the Comment Section fosters a sense of community and enables meaningful interactions. Join the conversation and let your voice be heard!</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer-->
    <footer   class="py-4 ">
        <div class="container">
            <p class="m-0 text-center text-white">Made by Btech Grads &copy; 2024.All rights reserved.</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>