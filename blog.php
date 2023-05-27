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
          <li><a href="#"><?php echo "BLOG"?></a></li>
          <li><a href="contact.php"><?php echo "CONTACT"?></a></li>
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
    <h1><?php echo "Blog"?></h1>
  </section>

    <!---- content-->
    <section class="Contact">
      <div class="row">
          <div class="blog-col">
              <h1><?php echo "Anime Snapshot: Exploring the Vibrant World of Anime"?></h1>
              <p>
              <?php echo "
                Welcome to Animeworld, the ultimate destination for anime enthusiasts who appreciate the artistry and beauty of anime visuals. On this blog, we invite you to dive into a mesmerizing gallery of captivating anime photos that will transport you to extraordinary worlds and evoke a range of emotions. <br> <br>

                At Animeworld, we curate a diverse collection of anime images, ranging from breathtaking landscapes and intricate character designs to powerful action sequences and heartwarming moments. Our team of dedicated anime lovers handpicks each photograph, ensuring that every image tells a unique story and captures the essence of the series it represents. <br><br>
                
                Whether you're a seasoned anime fan or just starting your journey into the world of anime, Animeworld is here to ignite your imagination and ignite your passion for anime visuals. Explore our carefully organized galleries featuring popular series, hidden gems, and iconic scenes that have left a lasting impact on the anime community.<br><br>
                
                But Animeworld is not just about admiring the aesthetics; it's also a place for discussion and interaction. Join our vibrant community of anime enthusiasts through comments, forums, and social media platforms, where you can share your thoughts, insights, and recommendations. Connect with fellow fans, engage in lively debates, and discover new anime series to add to your watchlist.<br><br>
                
                Whether you seek inspiration for your own artistic endeavors or simply want to marvel at the extraordinary craftsmanship behind anime, Animeworld is your go-to source for stunning anime imagery. So, fasten your seatbelt, grab your favorite snack, and get ready for an unforgettable visual journey through the captivating realm of anime.<br><br>
                
                Welcome to Animeworld, where every photo tells a story and brings the magic of anime to life. Let's embark on this extraordinary adventure together!."?>
              </p>
                  <a href="" class="hero-btn black-btn"><?php echo "EXPLORE NOW"?></a>
          </div>
          <div class="blog-col">
              <img src="images/g5.png">
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
