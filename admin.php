<?php

echo "Welcome New system";

?>
 <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <a class="navbar-nav ml-auto mt-2 mt-lg-0" href="logout.php">
            <?php session_start(); $name=$_SESSION["name"]; echo "Welcome $name"; ?> LOGOUT
          </a>
        </div>