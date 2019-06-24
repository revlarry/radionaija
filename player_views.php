
<?php include('header.php'); ?>
 <!--==========================
      Player Section
    ============================-->
    <section id="player" class="section-bg">
      <div class="container">

        <div class="section-header">
          &nbsp<br> &nbsp<br> &nbsp<br>
          <h3 class="section-title"><b>Programme:</b>  <?php echo $play_data->title;?></h3>
          <span class="section-divider"></span>
          <p class="section-title">Description</p>
          <p class="section-description"><?php echo $play_data->descrip;?></p>
        </div>

        <div class="row">

          <div class="col-lg-8 col-md-6">
            <div class="box wow fadeInLeft">
            <!--   <h4 class="get-started-btn">Title</h4> -->
              <h5 style="text-shadow: 2px 2px green;"><?php echo $play_data->title;?></h5>
              
              <img src="<?php echo $play_data->photourl;?>" width=600 height=400" alt=""> 
			<!-- <div><img src="http://placehold.it/600x400" alt=""></div> -->
            

			<audio controls autoplay>
  				<source src="<?php echo $play_data->url; ?>" type="audio/ogg">
			 	<source src="<?php echo $play_data->url; ?>" type="audio/mpeg">
			  	Your browser does not support the audio element.
			</audio>

           <!--    <a href="#" class="get-started-btn">Get Started</a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="box featured wow fadeInUp">
              <h3>YouTube video</h3>
            <!--   <h4><sup>$</sup>29<span> month</span></h4> -->
          
              <?php $video = explode('=',$play_data->youtubeurl);?>

			  <?php 
	              $file = new SplFileInfo($video[0]); // extract file extension if available
				 //var_dump($ext->getExtension());
				 //echo "<img src='http://localhost/projects/radio/images/youtube-logo.png' >"; 
				 //echo "<img src='$play_data->youtubeurl' >"; 
			  ?>
			<?php if($file->getExtension()==''): ?>

              <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $video[1];?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            <!--   <a href="#" class="get-started-btn">Get Started</a> -->
 			<?php endif; ?>

			
 			<?php if($file->getExtension()!==''): ?>	
           		 <img src="<?php echo base_url().'img/'.$file->getFilename(); ?>"  width=250 height=100 alt="">
           		 <!-- <img src="<?php echo $play_data->youtubeurl; ?>"  width=150 height=70 alt=""> -->
      		 <?php endif; ?>

            </div>
          </div>

        </div>
      </div>
    </section><!-- #pricing -->

    <?php include('footer.php'); ?>


