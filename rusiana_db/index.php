<?php
    include('hello.php');
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="hello.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="username" id="email">

        <label for="name" name="email" id="email">Email:</label>
        <input type="email" name="email" id="">

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" cols="50">
        </textarea>

        <button type="submit">Post</button>

    </form>
</body>
</html>