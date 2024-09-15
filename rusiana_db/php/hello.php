<?php
    include('db_conn.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        

        $name = trim($_POST['name']);
        $name = strip_tags($name);
        $name = preg_replace("/[^a-zA-Z\s'-]/", "", $name);
        
        $email = trim($_POST["email"]);
        $email = strip_tags($email);
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        $message = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');

        # if name is empty then handle gracefully :D
        $error_message = '';

        if (empty($name)){
            echo'
            <script>alert("Empty name field")</script>
            <a href="../template/index.php">Go back?</a>
            ';
            # fill the error_message
            $error_message = 'failed';
        }
        # if email is empty then handle gracefully :D
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false || empty($email)) {
            echo'
            <script>alert("Error email")</script>
            <a href="../template/index.php">Go back?</a>';
            $error_message = 'failed';
        }
        # if message is empty then handle gracefully :D
        if (empty($message)){
            echo'
            <script>alert("Empty message field")</script>
            <a href="../template/index.php">Go back?</a>';
            $error_message = 'failed';
        }


        
        if (!$conn) 
        {
            die("Connection failed: " . mysqli_connect_error());
        }

        # if the $error_message is empty or acceptable? Proceed        
        if(empty($error_message)){
            $sql = "INSERT INTO users(name, email, message) VALUES (?, ?, ?)";

            // Prepare statement https://www.php.net/manual/function.mysqli-prepare.php learn more
            $stmt = mysqli_prepare($conn, $sql);
            if ($stmt) 
            {
                // Bind parameters https://www.php.net/manual/function.mysqli-stmt-bind-param.php to learn more
                mysqli_stmt_bind_param($stmt, "sss", $name, $email, $message);
                // Execute statement https://www.php.net/manual/function.mysqli-stmt-execute.php learn more
                mysqli_stmt_execute($stmt);
                // Close statement https://www.php.net/manual/function.mysqli-stmt-close.php
                mysqli_stmt_close($stmt);
                
                header("location:../template/thank_you_message.php");
            } 
            else 
            {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

            // Close connection
            mysqli_close($conn);
        }
    }
?>