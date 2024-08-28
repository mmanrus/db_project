<?php
    include('hello.php');
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="hello.php" method="post" class="px-5">
        <label for="name" >Name:</label class="form-label">
        <input type="text" name="username" id="email" class="form-control w-50" >

        <label for="name" name="email" id="email" class="form-label">Email:</label>
        <input type="email" name="email" id="" class="form-control  w-50">

        <label for="message" class="form-label">Message:</label>
        <textarea id="message" name="message" rows="4" cols="50"  class="form-control w-50"  rows="3">
        </textarea>

        <button type="submit" class="btn border">Post</button>

    </form>
</body>
</html>