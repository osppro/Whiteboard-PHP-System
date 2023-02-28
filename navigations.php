<nav id="top-primary-nav" class="menuzord theme-color1" data-effect="fade" data-animation="none" data-align="right">
    <ul id="main-nav" class="menuzord-menu">
      <li class="active"><a href="<?=SITE_URL; ?>">Home</a></li>
      <li>
        <a href="#">About Us</a>

        <ul class="dropdown">
        <?php 
          $abt = $dbh->query("SELECT * FROM aboutus ORDER BY about_id ASC ");
          while ($rx = $abt->fetch(PDO::FETCH_OBJ)) { ?>
            <li><a href="about?about-us=<?=base64_encode($rx->about_id) ?>"><?=$rx->about_title; ?></a></li>
        <?php } ?>
          <li><a href="">Our Board</a></li>
          <li><a href="">Our Team</a></li>
          <li><a href="">Our Impact</a></li>
          <li><a href="">Funders and Partners</a></li>
        </ul>
      </li>
        <li><a href="#">Events</a>
        <ul class="dropdown">
          <li><a href="?upcoming-events">Upcoming Events</a></li>
          <li><a href="?older-events">Old Events</a></li>
        </ul>
      </li>
      <li><a href="#">What we Do ?</a>
        <ul class="dropdown">
          <?php 
          //`w_id`, `w_title`, `w_photo`, `w_description`
          $servs = $dbh->query("SELECT * FROM what_we_do ORDER BY w_id DESC ");
          while ($rx = $servs->fetch(PDO::FETCH_OBJ)) { ?>
          <li><a href="?details=<?=base64_encode($rx->w_id) ?>"><?=$rx->w_title; ?></a></li>
        <?php } ?>
        </ul>
      </li>
      <li><a href="?gallery">Gallery</a></li>
      <li><a href="#">Blog</a>
        <ul class="dropdown">
        <?php 
        $blog = $dbh->query("SELECT * FROM blog ");
        while ($rows = $blog->fetch(PDO::FETCH_OBJ)) { ?>
          <li><a href="blog?b=<?=$rows->blog_id; ?>"><?=$rows->blog_title; ?></a></li>
        <?php } ?>
        </ul>
      </li>
      <li><a href="?contact">Contact</a></li>
    <?php 

      if ($_SESSION['unique_id'] && $interface == 'admin') { ?>
        <li><a href="#">My Account</a>
        <ul class="dropdown">
          <li><a href="users/" target="_blank">Dashboard</a></li>
          <li><a href="logout">Logout</a></li>
        </ul>
      </li>
      <?php }elseif($_SESSION['unique_id'] && $interface == 'client'){ ?>
        <li><a href="logout">Logout</a></li>
      <?php } else{ ?>
        <li><a href="login">Login</a></li>
      <?php } ?>
    </ul>
  </nav>