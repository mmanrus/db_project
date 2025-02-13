<?php
session_start();
include('db_conn.php');

$_SESSION['err_name'] = '';
$_SESSION['err_email'] = '';
$_SESSION['err_pass'] = '';

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: ../template/index.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password1 = $_POST["password1"];
    $password2 = $_POST["password2"];

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if (empty($name)){
        $_SESSION['err_name'] = 'Empty name';
    } elseif (!preg_match("/^[a-zA-Z0-9_.]*$/", $name)) {
        $_SESSION['err_name'] = "Username can only contain letters, numbers, and underscores.";
    }

    if (empty($email)){
        $_SESSION['err_email'] = 'Empty email';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['err_email'] = 'Invalid email format';
    }

    if (empty($password1) || empty($password2)){
        $_SESSION['err_pass'] = 'Empty password field';
    } elseif ($password1 != $password2){
        $_SESSION['err_pass'] = 'Passwords do not match';
    } elseif (!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#$%^&*\(\)\-=\.,\/\\\\;:'\"])[A-Za-z\d!@#$%^&*\(\)\-=\.,\/\\\\;:'\"]{8,}$/", $password1)) {
        $_SESSION['err_pass'] = "Password must be at least 8 characters long, include a special character, an uppercase and lowercase letter, and a number.";
    }

    if (empty($_SESSION['err_name']) && empty($_SESSION['err_email']) && empty($_SESSION['err_pass'])) {
        $hashed_password = password_hash($password1, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (name, password, email) VALUES(?, ?, ?)";

        if ($stmt = mysqli_prepare($conn, $sql)){
            mysqli_stmt_bind_param($stmt, "sss", $name, $hashed_password, $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);

            $_SESSION['success_msg'] = "{$name} registered successfully.";
            header("Location: ../template/index.php"); // Redirect to login or dashboard
            
            exit;
        } else {
            $_SESSION['err_general'] = "Error: ". mysqli_error($conn);
        }
    }

    mysqli_close($conn);
    header("Location: ../template/register_view.php"); // Redirect back if there are errors
    exit;
}
?>
