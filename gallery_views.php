<?php include('header.php'); ?>
 <!--==========================
      Gallery Section
    ============================-->
  <?php 
  $dir = "/wamp/www/projects/radio/images/gallerypix";
  $gallery = scandir($dir);
 
  array_shift($gallery);
  array_shift($gallery);
 //var_dump($gallery);


   ?>

    <section id="gallery">
      <div class="container-fluid">
        <div class="section-header">
          <h3 class="section-title">Gallery</h3>
          <span class="section-divider"></span>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item wow fadeInUp">
              <a href="http://[::1]/projects/radio/images/gallerypix/<?php echo $gallery[0];?>" class="gallery-popup">
              <!-- <a href="http://placehold.it/800x600" class="gallery-popup"> -->
                <img src="http://[::1]/projects/radio/images/gallerypix/<?php echo $gallery[0];?>" alt="">
              </a>

               <!-- <a href="img/gallery/gallery-1.jpg" class="gallery-popup">
                <img src="img/gallery/gallery-1.jpg" alt="">
              </a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item wow fadeInUp">
              <a href="http://[::1]/projects/radio/images/gallerypix/<?php echo $gallery[1];?>" class="gallery-popup">
                <img src="http://[::1]/projects/radio/images/gallerypix/<?php echo $gallery[1];?>" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item wow fadeInUp">
              <a href="http://[::1]/projects/radio/images/gallerypix/<?php echo $gallery[5];?>" class="gallery-popup">
                <img src="http://[::1]/projects/radio/images/gallerypix/<?php echo $gallery[5];?>" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item wow fadeInUp">
              <a href="http://[::1]/projects/radio/images/gallerypix/<?php echo $gallery[2];?>" class="gallery-popup">
                <img src="http://[::1]/projects/radio/images/gallerypix/<?php echo $gallery[2];?>" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item wow fadeInUp">
              <a href="http://[::1]/projects/radio/images/gallerypix/<?php echo $gallery[3];?>" class="gallery-popup">
                <img src="http://[::1]/projects/radio/images/gallerypix/<?php echo $gallery[3];?>" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item wow fadeInUp">
              <a href="http://[::1]/projects/radio/images/gallerypix/<?php echo $gallery[4];?>" class="gallery-popup">
                <img src="http://[::1]/projects/radio/images/gallerypix/<?php echo $gallery[4];?>" alt="">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #gallery -->

    <?php include('footer.php'); ?>