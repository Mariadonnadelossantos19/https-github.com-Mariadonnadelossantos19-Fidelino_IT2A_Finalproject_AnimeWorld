<?php
$bg = "images/bannerT.jpg";
$Logo = "images/RealLogo.png";
$videoBg = "images/bg.mp4";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=[device-width], initial-scale=1.0" />
    <title><?php echo "One Piece"?></title>

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

      <!---<video class="background-video" muted autoplay loop src="<?php echo $videoBg; ?> "></video>--->
      <img class="background-video" src="<?php echo $bg; ?>" style="height: 50%;"/>
      <img src="<?php echo $Logo; ?>" alt="logo" />
      <div class="nav-links" id="nav-links">
        <i class="nav-icons fa fa-times" onclick="hideMenu()"></i>

        <ul>
          <li><a href="main.php"><?php echo "HOME"?></a></li>
          <li><a href="#"><?php echo "ABOUT"?></a></li>
          <li><a href="blog.php"><?php echo "BLOG"?></a></li>
          <li><a href="contact.php"><?php echo "CONTACT"?></a></li>
        <li class="dropdown"><a><span><?php echo "GALERY"?></span> <i class="bi bi-chevron-down"></i></a>
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
    <h1><?php echo "About us"?></h1>
    
  </section>


    <!---- content-->
    <section class="about-us">
        <div class="row">
            <div class="about-col">
                <h1><?php echo "About Us"?></h1>
                <p>
                <?php echo "
                    Welcome to AnimeWorld, the ultimate online destination for anime enthusiasts seeking a visual feast of captivating anime artwork. Our photo gallery is dedicated to showcasing the mesmerizing world of anime through stunning visuals that will leave you spellbound.<br> <br>

                    At AnimeWorld, we understand the power of anime artistry and its ability to transport us to extraordinary realms. Our team of passionate anime lovers has curated a diverse and carefully selected collection of anime images that represent the beauty, diversity, and creativity of this captivating art form.<br><br>
                    
                    With our extensive photo gallery, we aim to celebrate the exceptional talent of anime artists and the incredible attention to detail that goes into creating each frame. From breathtaking landscapes to intricate character designs, action-packed scenes to heartwarming moments, our collection encompasses the full spectrum of emotions and experiences that anime has to offer."?>
                </p>
                    <a href="" class="hero-btn black-btn"><?php echo "EXPLORE NOW"?></a>
            </div>
            <div class="about-col">
                <img src="images/banner.jpg">
            </div>
        </div>

    </section>
    
    <!-----FOOTER----->
    <section class="footer">
      <h4><?php echo "About Us"?></h4>
      <p>
      <?php echo "
        Welcome to the official One Piece website! We are dedicated to providing 
        fans with the latest news, updates, and in-depth information about the 
        incredible world of One Piece.<br> Our passionate team of fans is committed 
        to creating a vibrant community where fans can connect, engage, and 
        celebrate the adventures of Monkey D. Luffy and the Straw Hat Pirates.
        <br>
        Contact Us:<br>
        Email: info@onepiecewebsite.com<br>
        Phone: +63-XXX-XXXX-XXX <br>"?>
      </p>
      <div class="icons">
      <a href="https://web.facebook.com/animeworld48/?__tn__=%2Cd"><i class="icons-items fab fa-facebook-f"></i></a>
        <a href="https://twitter.com/animewld"><i class="icons-items fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/worlds_anime/?hl=en"><i class="icons-items fab fa-instagram"></i></a>
        <a href="https://www.youtube.com/channel/UC30v7rrMg6luaF0h8aaoX4Q"><i class="icons-items fab fa-youtube"></i></a>
      </div>
      
    </section>

    <script src="index.js"></script>
  </body>
</html>
