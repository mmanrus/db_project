<nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
               <a class="navbar-brand" href="index.php">Rusiana's DB Stuff</a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                    <li class="nav-item">
                        <a href="../php/display_user.php" class="nav-link">Display User</a>
                    </li>
                    
                    </ul>
               </div>
               <div>
                <ul class='navbar-nav'>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><?php echo isset($_SESSION["name"]) ? $_SESSION["name"] : ""; ?></a>
                    </li>
                    
                    <?php

                        if(!isset($_SESSION["loggedin"])){
                            echo'
                            <li class="nav-item">
                                <a href="login_view.php" class="nav-link">Login</a>
                            </li>
                            <li class="nav-item">
                                <a href="register_view.php" class="nav-link">Register</a>
                            </li>
                    
                            ';
                        }
                    
                        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                            
                            echo'
                            <li class="nav-item">
                                <a href="../php/logout.php"  class="btn">Logout</a>
                            </li>
                            
                            ';
                        }
                        
                    ?>
                </ul>
            </div>
        </div>
</nav>