<?php
include('db_conn.php');
$error_message = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare SQL statement
    $sql = "INSERT INTO users(name, email, message) VALUES (?, ?, ?)";

    // Prepare statement
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt) {
        // Bind parameters
        mysqli_stmt_bind_param($stmt, "sss", $name, $email, $message);
        // Execute statement
        mysqli_stmt_execute($stmt);
        // Close statement
        mysqli_stmt_close($stmt);

        header("location:../template/thank_you_message.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
}
