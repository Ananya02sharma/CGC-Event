

<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="bootstrap.css">

</head>

<body>
  <nav class="navbar navbar-expand-lg text-dark bg-light ">
    <div class="container-fluid">
      <a class="navbar-brand fs-3 fw-bold text-blue " href="#">Lets Blog</a>
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
            <a class="nav-link fw-bold text-blue" href="./about.html">About Us</a>
          </li>


        </ul>
        <form method="POST" action="http://localhost/Blog/view_source.php"class="d-flex" role="search">
           <input  name = 'title'class="form-control " type="search" placeholder="enter event" aria-label="Search">
           <button class="btn btn-dark fw-bold text-dark bg-white " type="submit">Search</button>
         </form>
      </div>
    </div>
    </div>
  </nav>
  <section class="hero py-2 px-5">
    <div class="container">
      <div class="d-flex justify-content-center ">
        <h1 class="fw-bold text-white fs-1 ">
          Log IN
        </h1>
      </div>

    </div>
  </section>
  <main class="content bg-light container py-2">
    <div class="row justify-content-center">
      <form class="col-md-6" method="POST" action="php/login.php">

        <div class="row mb-3">
          <label for="mail" class="col-sm-2 col-form-label">mail</label>
          <div class="col-sm-10">
            <input name="mail" type="email" class="form-control" id="inputEmail3">
          </div>
        </div>
        <div class="row mb-3">
          <label for="Name" class="col-sm-2 col-form-label">password</label>
          <div class="col-sm-10">
            <input name="password" type="text" class="form-control" id="inputPassword3">
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
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas veniam sapiente et ex, alias laudantium sit,
        nostrum dignissimos harum, dolorem corporis dolorum.
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

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
    crossorigin="anonymous"></script>
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
         background-image: url('data:image/jpeg;base64,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');
         background-repeat: no-repeat;
         width: 100%;
         height: 100%;
         background-size: cover;
      }
      .f-s{
        font-size: 32px;
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
            <h1 class="text-blue f-s font-weight-bold">Login</h1>
            <h1 class="text-blue f-s font-weight-bold">Does nt have an account? <a href= "http://localhost/Blog/insert_author.php"><button type="submit"  class="btn btn-outline-success btn-block shadow-sm font-weight-bold ">SignUp</button></a></h1>
            <form  method = "POST" action="login_php.php"class="shadow-lg p-4 text-blue">
               <div class="form-group">
                  <i class="fas fa-key"></i>
                  <label for="email" class="pl-2 font-weight-bold">email</label>
                  <input name="mail" type="email"
                     class="form-control" placeholder="Email" required>
    </div>
    <div class="form-group">
                     <i class="fas fa-key"></i>
                  <label for="email" class="pl-2 font-weight-bold">password</label>
                  <input name="password" type="text"
                     class="form-control" required >
                  <!--Add text-white below if want text color white-->
                  
               </div>
               
               
               <button type="submit" class="btn btn-outline-success mt-3 btn-block shadow-sm font-weight-bold ">Submit</button>
            </form>
         </div>
      </div>
   </div>
   <footer   class=" text-white pt-4 pb-2">
    
    <div class="credits text-center py-2">
      <p>Made by Btech Grads &copy; 2024.All rights reserved.</p>
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