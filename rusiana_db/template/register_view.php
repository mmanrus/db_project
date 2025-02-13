<?php
session_start();
$title = 'Register';
include('head.php');
?>

<body>
    <?php include('nav.php'); ?>
    
    <form action="../php/register.php" method="POST" class='mx-5 px-5'>
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="<?= isset($_SESSION['name']) ? htmlspecialchars($_SESSION['name']) : '' ?>">
            <?php if (!empty($_SESSION['err_name'])) { 
                echo "<span class='text-danger'>{$_SESSION['err_name']}</span>"; 
            } ?>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" value="<?= isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email']) : '' ?>">
            <?php if (!empty($_SESSION['err_email'])) { 
                echo "<span class='text-danger'>{$_SESSION['err_email']}</span>"; 
            } ?>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password1">
            <?php if (!empty($_SESSION['err_pass'])) { 
                echo "<span class='text-danger'>{$_SESSION['err_pass']}</span>"; 
            } ?>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Confirm Password</label>
            <input type="password" class="form-control" name="password2">
        </div>
        
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
    

</body>
</html>

<?php
// Clear error messages after displaying them
unset($_SESSION['err_name']);
unset($_SESSION['err_email']);
unset($_SESSION['err_pass']);
?>
