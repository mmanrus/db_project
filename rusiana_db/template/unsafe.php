<?php
    include('../php/db_conn.php');
    $error_message = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        if (!$conn) 
        {
            die("Connection failed: " . mysqli_connect_error());
        } 
        $sql = "INSERT INTO users(name, email, message) VALUES ('$name', '$email', '$message')";
        if($conn->query( $sql) === TRUE){
          echo "The data successfully inserted";
        }
        else 
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close connection
        $conn->close();
    }
    else {
     echo'Invalid requuest';
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
    <header class="nav">
        <div>
            Unsafe
        </div>
    </header>
    <form action="unsafe.php" method="post" class="px-5 mx-5 form_container">
        <div class="input-container">
            <label for="name" >Name:</label class="form-label">
            <input type="text" name="name" id="email" class="form-control" >
        </div>
        <div class="input-container">
            <label for="name" name="email" id="email" class="form-label">Email:</label>
            <input type="email" name="email" id="" class="form-control">
        </div>
        <div class="input-container">
            <label for="message" class="form-label">Message:</label>
            <textarea id="message" name="message" rows="4" cols="50"  class="form-control"  rows="3"></textarea>
        </div>
        
        <div class="input-container button">
            <button type="submit" class="btn border">Post</button>
        </div>
    </form>
    <div>
        <a href="../php/display_user.php">display_user</a>
    </div>
</body>
</html>
