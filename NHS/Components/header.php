

<!-- Piece of code that represents  header code -->

<?php
session_start();
?>
<nav class="navbar navbar-expand-sm top-bar">
    <div class="container ">
        <a class="navbar-brand" href="index.php">
            <img src="Images/logoo.png" class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="fa fa-bars"  style = "background-color: transparent;"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <?php 
                // for showing the menu items after login
                if(isset($_SESSION['user']))
                {
                ?>
                <li class="nav-item">
                    <a class="nav-link text-white" href="centers.php">Centers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="news.php">News</a>
                </li> 
                 <li class="nav-item">
                    <a class="nav-link text-white" href="faq.php">FAQ</a>
                </li> 
                <li class="nav-item"><a class="nav-link text-white" href="Php/logout.php">Logout</a></li>
                <?php
                }
                else{
                  ?>
                  <li class="nav-item"><a class="nav-link text-white" href="login.php">Login</a></li>
                  <li class="nav-item"><a class="nav-link text-white" href="signup.php">Register</a></li>
                </li>
                  <?php
                }
            ?>
          </ul>
        </div>
    </div> 
</nav>