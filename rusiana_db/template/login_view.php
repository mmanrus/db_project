<?php 
     include('../php/login.php');
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

     <form action="../php/login.php" method="POST" class='mx-5 px-5'>
          <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Email address</label>
               <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
               <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Password</label>
               <input type="password" class="form-control" id="exampleInputPassword1" name="password">
          </div>
          <div class="mb-3 form-check">
               <input type="checkbox" class="form-check-input" id="exampleCheck1">
               <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
               <button type="submit" class="btn btn-primary">Submit</button>
     </form>
     <a href="index.php">Home</a>
</body>
</html>