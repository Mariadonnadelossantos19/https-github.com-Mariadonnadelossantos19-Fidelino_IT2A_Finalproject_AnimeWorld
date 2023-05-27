<?php
$videoBg = "images/bg1.webm";
$bg = "images/bannerT.jpg";
$Logo = "images/RealLogo.png";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=[device-width], initial-scale=1.0" />
    <title>One Piece</title>

    <!-- CSS  -->
    <link rel="stylesheet" href="script/style1.css" />

    <!-- FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
      rel="stylesheet"
    />

    <script
      defer
      src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"
    ></script>
  </head>

  <body>
    
   <!------ HEADER ------->

   <section class="sub-header">
    <nav>

      <!---<video class="background-video" muted autoplay loop src="<?php echo $videoBg; ?>"></video>--->
      <img class="background-video" src="<?php echo $bg; ?>" style="height: 50%;"/>
      <img src="<?php echo $Logo; ?>" alt="logo" />
      <div class="nav-links" id="nav-links">
        <i class="nav-icons fa fa-times" onclick="hideMenu()"></i>

        <ul>
          <li><a href="main.php"><?php echo "HOME"?></a></li>
          <li><a href="about.php"><?php echo "ABOUT"?></a></li>
          <li><a href="blog.php"><?php echo "BLOG"?></a></li>
          <li><a href="#"><?php echo "CONTACT"?></a></li>
        <li class="dropdown"><a><span><?php echo "GALLERY"?></span> <i class="bi bi-chevron-down"></i></a>
          <ul>
              <li><a class="nav-link scrollto" href="naruto.php"><?php echo "NARUTO"?></a></li>
              <li><a class="nav-link scrollto" href="op.php"><?php echo "ONE PIECE"?></a></li>
              <li><a class="nav-link scrollto" href="ds.php"><?php echo "DEMON SLAYER"?></a></li>
              <li><a class="nav-link scrollto" href="bleach.php"><?php echo "BLEACH"?></a></li>
              <li><a class="nav-link scrollto" href="hxh.php"><?php echo "HUNTER X HUNTER"?></a></li>
              <li><a class="nav-link scrollto" href="dragonBall.php"><?php echo "DRAGON BALL"?></a></li>
              <li><a class="nav-link scrollto" href="blueLock.php"><?php echo "Blue Lock"?></a></li>
              <li><a class="nav-link scrollto" href="lookism.php"><?php echo "Lookism"?></a></li>
              <li><a class="nav-link scrollto" href="index.php"><?php echo "LOGOUT"?></a></li>
          </ul>
        </li>
        </ul>
        
      </div>
      <i class="nav-icons fa fa-bars" onclick="showMenu()"></i>
    </nav>
    <h1>Contact</h1>
  </section>


    <!---- content-->
    <section class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31065.726756220996!2d122.01351623553204!3d13.274447891543119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a317ac1a7e6235%3A0xeef8ab3c0bf58567!2sTigwi%2C%20Torrijos%2C%20Marinduque!5e0!3m2!1sen!2sph!4v1684228759624!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section class="contact-us">
        <div class="row">
            <div class="contact-col">
                <div>
                    <i class="fa fa-home"></i>
                    <span>
                        <h5><?php echo "XYZ Road, ABC building"?></h5>
                        <p><?php echo "Tigwi, Torrijos, Marinduque"?></p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <span>
                        <h5><?php echo "+63-XXX-XXXX-XXX"?></h5>
                        <p><?php echo "Everyday, 7AM - &PM"?></p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-envelope"></i>
                    <span>
                        <h5><?php echo "info@animeworld.com"?></h5>
                        <p><?php echo "Email us in your query"?></p>
                    </span>
                </div>
            </div>
            <div class="contact-col">
                <form action="">
                    <input type="text" placeholder="Enter your name" required>
                    <input type="Email" placeholder="Enter email address" required>
                    <input type="text" placeholder="Enter your favorite OP character" required>
                    <textarea rows="8" placeholder="Message" required></textarea>
                    <button type="submit" class="hero-btn black-btn"><?php echo "Send Message"?></button>
                </form>
            </div>
        </div>
    </section>

    
    <!-----FOOTER----->
    <section class="footer">
      <h4><?php echo "About Us"?></h4>
      <p>
      <?php echo 
        "Welcome to the AnimeWorld website! We are dedicated to providing 
        fans with the latest news, updates, and in-depth information about the 
        incredible world of anime. <br>Our passionate team of fans is committed 
        to creating a vibrant community where fans can connect, engage, and 
        celebrate the adventures of our favorite anime.
        <br>
        Contact Us:<br>
        Email: info@animeworldwebsite.com<br>
        Phone: +63-XXX-XXXX-XXX <br>"?>
      </p>
      <a class="icons">
        <a href="https://web.facebook.com/animeworld48/?__tn__=%2Cd"><i class="icons-items fab fa-facebook-f"></i></a>
        <a href="https://twitter.com/animewld"><i class="icons-items fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/worlds_anime/?hl=en"><i class="icons-items fab fa-instagram"></i></a>
        <a href="https://www.youtube.com/channel/UC30v7rrMg6luaF0h8aaoX4Q"><i class="icons-items fab fa-youtube"></i></a>
      </div>
      
    </section>

    <script src="index.js"></script>
  </body>
</html>
