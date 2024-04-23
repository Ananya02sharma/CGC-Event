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
         background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaHvumI7nudZFIXqKwshVlRliuzbdKLClJa1xqzuFnRvSETPpSL-KwMNK3SZYLzk1mem0&usqp=CAU');
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
   <title>Sign up error</title>
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



      <script> alert("username already exist or incorrect password");</script>

      <div class="container-fluid">
        
      <div class="row justify-content-center custom-margin">
         <div class="col-sm-6 col-md-4">
            <!-- Add bg-primary in form tag if want form background color-->
            <!--text-white if want text color white-->
            <h1 class="text-white f-s font-weight-bold">Sign Up</h1>
            <form method = "POST" action="./add_author.php"class="shadow-lg p-4 text-white">
               <div class="form-group">
                  <i class="fas fa-key"></i>
                  <label for="email" class="pl-2 font-weight-bold">Email</label>
                  <input name="mail" type="email"
                     class="form-control" placeholder="email" id = "email" required>
                  <!--Add text-white below if want text color white-->
                 
               </div>
               <div class="form-group">
                  <i class="fas fa-user"></i>
                  <label for="Name" class="pl-2 font-weight-bold">Name</label>
                  <input name = "name"  type="text"
                     class="form-control" placeholder="Name" id = "Name" required>
               </div>
               <div class="form-group">
                  <i class="fas fa-key"></i>
                  <label for="password" class="pl-2 font-weight-bold">password</label>
                  <input name = "password"  type="password"
                     class="form-control" placeholder="password" id = "password" required>
               </div>
               <div class="form-group">
               <i class="fas fa-user"></i>
               <select class=" pl-2 font-weight-bold" name = "role" >
              
          <option selected>Role</option>
          <option value="Admin">Admin</option>
          <option value="User">User</option>
          
        </select>
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