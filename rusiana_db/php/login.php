<?php 
     include('db_conn.php');

     if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
          header("location: ../template/index.php");
          exit;
      }
     $err_email = '';
     $err_pass = '';
     if ($_SERVER["REQUEST_METHOD"] == "POST"){
          $email = $_POST["email"];
          $password = $_POST["password"];

          # check if empty
          if (empty($email))
          {
               $err_email = 'Empty email field';
          }
          elseif (filter_var($email, FILTER_VALIDATE_EMAIL) == false)
          {
               $err_email = 'Invalid email format';
          }

          if (empty($password))
          {
               $err_pass = 'Empty password field';
          }
          # if error empty

          if (!$conn) 
          {
              die("Connection failed: " . mysqli_connect_error());
          }

          if(empty($err_email) && empty($err_email))
          {
               $sql = 'SELECT id, name, email, password FROM users WHERE email = ?';

               if ($stmt = mysqli_prepare($conn, $sql)) {
                    mysqli_stmt_bind_param($stmt, 's', $email);

                    if (mysqli_stmt_execute($stmt)){
                         mysqli_stmt_store_result($stmt);

                              if(mysqli_stmt_num_rows($stmt) == 1)
                              {                    
                              // Bind result variables
                                   mysqli_stmt_bind_result($stmt, $id ,$name, $email, $hashed_password);
                                   if(mysqli_stmt_fetch($stmt)){

                                        if(password_verify($password, $hashed_password)){
                                             // Password is correct, start a new session
                                             session_start();
                                             // Store data in session variables
                                             $_SESSION["loggedin"] = true;
                                             $_SESSION["id"] = $id;
                                             $_SESSION["name"] = $name; // Set the 'user' column value to the session variable
                                             $_SESSION["email"] = $email;                                  
                                             echo"verify";
                                             //Redirect user
                                             header("location: ../template/index.php");
                                        }
                                        else{
                                                  // Invalid password
                                                  $err_pass = "Invalid email or password.";
                                                  echo "<script>alert('{$err_pass}');</script>";
                                        }
                                             
                                   }
                              }
                              else{
                                   // If no user found with the email
                                   $err_email = "No account found with that email.";
                                   echo "<script>alert('{$err_email}');</script>";
                                   header("location: ../template/login_view.php");
                             }
                         }

                    mysqli_close($conn);
               }
     
          }

     }
?>