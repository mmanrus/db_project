<?php
    session_start();
    $title = 'Home';
    include('head.php');
   
?>

<body>
    <?php 
        include('nav.php');
    ?>
    <form action="../php/hello.php" method="post" class="px-5 mx-5 form_container">
        <div class="input-container">
            <label for="name">Name:</label class="form-label">
            <input type="text" name="name" id="email" class="form-control">
        </div>
        <div class="input-container">
            <label for="name" name="email" id="email" class="form-label">Email:</label>
            <input type="email" name="email" id="" class="form-control">
        </div>
        <div class="input-container">
            <label for="message" class="form-label">Message:</label>
            <textarea id="message" name="message" rows="4" cols="50" class="form-control" rows="3"></textarea>
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