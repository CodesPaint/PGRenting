

      <header id="header">
        <div class="inner">
          <a href="index.php" class="logo">Amaya</a>
          <nav id="nav" class="navbar">
            <a href="index.php">Home</a>
            <a href="rooms.php">Rooms</a>
            <a href="pghouses.php">PG Houses</a>
            <?php
             
              if (!isset($_SESSION['cname'])||!isset($_SESSION['cid'])){?>
                <a href="login.php">Login / Signup</a>
              <?php }else{?>
                
                <a href="logout.php">Logout</a>
                
              <?php
            }
            ?>
            
            
          </nav>
        </div>
      </header>
      <a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a> 


