<?php
$videoBg = "images/bg.mp4";
$OpLogo = "images/LG.png";
$Logo = "images/RealLogo.png";
$bg = "images/bg2.jpg";
$lo = "images/LO.png"
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

    <section class="header">
      <nav>

       <video class="background-video" muted autoplay loop src="<?php echo $videoBg; ?>"></video>
         <!---<img class="background-video" src="<?php echo $bg; ?>"/>--->
        <img src="<?php echo $Logo; ?>" alt="logo" />
        <div class="nav-links" id="nav-links">
          <i class="nav-icons fa fa-times" onclick="hideMenu()"></i>

          <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="blog.php">BLOG</a></li>
            <li><a href="contact.php">CONTACT</a></li>
          <li class="dropdown"><a><span>GALLERY</span> <i class="bi bi-chevron-down"></i></a>
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

      <div class="text-box">
        
      <a href="index.php"><img src="<?php echo $lo; ?>" alt="logo" /></a>
        <p>
          <?php echo " “Power isnt determined by your size, but the size of your heart and dreams!” "?>
        </p>
      </div>
    </section>

    <!----- Lesson ----->

    <section class="lesson">
      <h1><?php echo "Life Lesson Anime Has to Offer"?></h1>
      <p><?php echo "These life lessons can be found in various anime series and are often depicted through engaging storylines and memorable characters."?></p>

      <div class="row">
        <div class="lesson-col">
          <h3><?php echo "Embrace individuality and be true to yourself:"?></h3>
          <p>
          <?php echo 
            "
            Many anime series emphasize the importance of embracing one's uniqueness 
            and being true to oneself. Characters often face societal pressures or 
            struggle with their own identity, but they ultimately learn that it's 
            important to embrace their individuality and not conform to others' 
            expectations. This lesson encourages viewers to embrace their own quirks, 
            talents, and passions, and to not be afraid of standing out." ?>
          </p>
        </div>

        <div class="lesson-col1">
          <h3><?php echo "Perseverance and resilience in the face of adversity:"?></h3>
          <p>
          <?php echo 
            "Anime often portrays characters facing immense challenges, setbacks, 
            and even failures. However, they learn the value of perseverance and 
            resilience by picking themselves up and continuing to move forward. 
            This lesson teaches viewers the importance of not giving up when faced 
            with difficulties, and to keep striving for their goals, no matter how 
            daunting the obstacles may seem."?>
          </p>
        </div>

        <div class="lesson-col2">
          <h3><?php echo "The power of friendship and teamwork:"?></h3>
          <p>
          <?php echo 
            "Anime frequently emphasizes the strength of friendship and the power of 
            teamwork. Characters come together, support one another, and overcome 
            obstacles through their bonds. This lesson highlights the importance of 
            surrounding yourself with supportive friends and recognizing the benefits 
            of collaboration and cooperation. It teaches viewers that by working 
            together, they can achieve more than they could alone."?>
        </div>
      </div>
    </section>



    <!-- CTA -->
    <section class="cta">
      <h1 style="color: black">
      <?php echo "IF I GET REINCARNATED...<br />I WANNA BECOME A CLAM"?>
      </h1>
      <a href="#" class="hero-btn1"><?php echo "HOME"?></a>
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