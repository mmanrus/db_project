<?php
     include('db_conn.php');

     $err_name = '';
     $err_email = '';
     $err_pass = '';
     
     if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
          header("location: ../template/index.php");
          exit;
      }

     if ($_SERVER["REQUEST_METHOD"] == "POST"){
          $name = $_POST["name"];
          $email = $_POST["email"];
          $password1 = $_POST["password1"];
          $password2 = $_POST["password2"];
          echo "<pre>";
          echo print_r($_POST);
          echo "</pre>";

          if (empty($name)){
               $err_name = 'Empty name';
               echo "<script>alert('{$err_name}');</script>";
          }
          elseif (!preg_match("/^[a-zA-Z0-9_.]*$/", $name)) {
               $err_name = "Username can only contain letters, numbers, and underscores.";
               echo "<script>alert('{$err_name}');</script>";
          }

          if (empty($email)){
               $err_email = 'Empty email';
               echo "<script>alert('{$err_email}');</script>";
          }
          elseif(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
               $err_email = 'Invalid email format';
               echo "<script>alert('{$err_email}');</script>";     
          }

          if (empty($password1) || empty($password2)){
               $err_pass = 'Empty password field';
               echo "<script>alert('{$err_pass}');</script>";
          }
          elseif($password1 != $password2){
               $err_pass = 'Password do not match';
               echo "<script>alert('{$err_pass}');</script>";
          }

          if (!$conn) 
          {
              die("Connection failed: " . mysqli_connect_error());
          }

          if (empty($err_name) && empty($err_pass) && empty($err_email)) {
               echo "reached";
               $hashed_password = password_hash($password1, PASSWORD_DEFAULT);

               $sql = "INSERT INTO users (name, password, email) VALUES(?, ?, ?)";

               if ($stmt = mysqli_prepare($conn, $sql)){
                    mysqli_stmt_bind_param($stmt, "sss", $name, $hashed_password, $email);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_close($stmt);

                   
                    header("Location: ../template/index.php");
                    echo "<script>alert('{$name} registered successfully.');</script>";
               }
               else {
                    echo "Error: ". $sql. "<br>" . mysqli_error($conn);
               }

               mysqli_close($conn);
          }
     }
?>