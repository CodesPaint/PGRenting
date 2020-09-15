      <header id="header">
        <div class="inner">
          <a href="home.php" class="logo">Amaya</a>
          <nav id="nav">
            <a href=""><i class="fa fa-phone fa-1x"></i>+91 8603100915</a>
            <a href=""><i class="fa fa-envelope fa-1x"></i> soyabhishek81@gmail.com</a>
            <?php
              $flg=1;
              if ($flg==1){
                echo '<a href="" data-toggle="modal" data-target="#modalLoginForm">Login</a>';
              }else{
                $str='<select id="select-1">
                  <option selected="selected">Welcome </option>
                  <option>My Profile</option>
                  <option>24X7 Support</option>
                  <option><a href="">About Us</a></option>
                  <option>Logout</option>
            </select>';
                echo $str;
              }
            ?>
            
          </nav>
        </div>
      </header>
      <a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a> 
