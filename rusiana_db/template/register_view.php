<?php
     include('../php/register.php');
     if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
          header("location:index.php");
          exit;
      }
      $title = 'Register';
      include('head.php');
?>

<body>
     <?php 
          include('nav.php');
     ?>
     <form action="../php/register.php" method="POST" class='mx-5 px-5'>
          <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Name</label>
               <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
               <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Email address</label>
               <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
               <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Password</label>
               <input type="password" class="form-control" name="password1">
          </div>
          <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
               <input type="password" class="form-control" id="exampleInputPassword1" name="password2">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          </form>
     <a href="index.php">Home</a>
</body>
</html>