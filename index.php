<?php
include('partials/header.php');
?>
    <body>

        <div class="overlay"></div>
        <section class="top-part">
          <video controls autoplay loop>
            <source src="videos/video.mp4" type="video/mp4">
            <source src="videos/video.ogg" type="video/ogg">
          Your browser does not support the video tag.
          </video>
        </section>
        
        <section class="cd-hero">

          <div class="cd-slider-nav">
            <nav>
              <span class="cd-marker item-1"></span>
              <ul>
                <li class="selected"><a href="#0"><div class="image-icon"><img src="img/home-icon.png"></div><h6>Úvod</h6></a></li>
                <li><a href="#0"><div class="image-icon"><img src="img/about-icon.png"></div><h6>O nás</h6></a></li>
                <li><a href="#0"><div class="image-icon"><img src="img/featured-icon.png"></div><h6>QNA</h6></a></li>
                <li><a href="#0"><div class="image-icon"><img src="img/projects-icon.png"></div><h6>Projekty</h6></a></li>
                <li><a href="#0"><div class="image-icon"><img src="img/contact-icon.png"></div><h6>Kontaktujte nás!</h6></a></li>
              </ul>
            </nav> 
          </div> <!-- .cd-slider-nav -->

          <?php 
          include("uvod.php")
          ?>

          <?php 
          include("onas.php")
          ?>

          <?php 
          include("qna.php")
          ?> 

          <?php 
          include("projekty.php")
          ?> 
          
          <?php 
          include("kontakt.php")
          ?> 
          </ul> 
        </section> 
<?php
include("partials/footer.php")
?>