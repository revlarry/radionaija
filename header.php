 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Radio Naija | Home</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="http://localhost/projects/test/img/favicon.png" rel="icon">
  <link href="http://localhost/projects/test/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="http://localhost/projects/test/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
  <!-- <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

  <script src="https://use.fontawesome.com/55ffa4f105.js"></script>


  <!-- Libraries CSS Files -->
  <link href="http://localhost/projects/test/lib/animate/animate.min.css" rel="stylesheet">
  <!-- <link href="http://localhost/projects/test/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet"> -->
  <link href="http://localhost/projects/test/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="http://localhost/projects/test/lib/magnific-popup/magnific-popup.css" rel="stylesheet">


  <!-- Main Stylesheet File -->
  <link href="http://localhost/projects/test/css/style.css" rel="stylesheet">
  <!-- <link href="css/style.css" rel="stylesheet"> -->

  <!-- =======================================================
    Theme Name: Avilon
    Theme URL: https://bootstrapmade.com/avilon-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left"> 
        <h1><i class="fas fa-microphone"></i>
          <a href="http://localhost/projects/test/" class="scrollto">Radio Naija</a>
        </h1>
        <!-- <h1><a href="#intro" class="scrollto">Avilon</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title=""></a> -->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="<?php echo base_url(); ?>">Home</a></li>
          <!-- <li class="menu-active"><a href="#intro">Home</a></li> -->
          <li><a href="<?php echo base_url(); ?>/index.php/menu/about">About Us</a></li>
          <!-- <li><a href="#about">About Us</a></li> -->

          <li><a href="<?php echo base_url(); ?>/index.php/menu/features">Features</a></li>
          <!-- <li><a hrhttp://localhost/projects/test/index.php/menu/ef="#features">Features</a></li> -->
          <li><a href="<?php echo base_url(); ?>/index.php/menu/pricing">Pricing</a></li>
          <!-- <li><a href="#pricing">Pricing</a></li> -->
          <li><a href="<?php echo base_url(); ?>/index.php/menu/team">Team</a></li>
          <li><a href="<?php echo base_url(); ?>/index.php/menu/gallery">Gallery</a></li>
          <!-- <li><a href="#gallery">Gallery</a></li> -->
          <li class="menu-has-children"><a href="">Segments</a>
            <ul>
              <li><a href="<?php echo base_url(); ?>/index.php/displaysegments/segment/hea">Health</a></li>
              <li><a href="<?php echo base_url(); ?>/index.php/displaysegments/segment/soc">Social</a>
              <!--   <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul> -->
              </li>
              <li><a href="<?php echo base_url(); ?>index.php/displaysegments/segment/pol">Politics</a></li>
              <li><a href="<?php echo base_url(); ?>/index.php/displaysegments/segment/edu">Education</a></li>
              <li><a href="<?php echo base_url(); ?>/index.php/displaysegments/segment/pas">Pastoral Forum</a></li>
              <li><a href="<?php echo base_url(); ?>/index.php/displaysegments/segment/bus">Business</a></li>
              <li><a href="<?php echo base_url(); ?>/index.php/displaysegments/segment/leg">Legal Issues</a></li>
              <li><a href="<?php echo base_url(); ?>/index.php/displaysegments/segment/you">Youth &amp; Society</a></li>
              <li><a href="<?php echo base_url(); ?>/index.php/displaysegments/segment/eve">Community Events</a></li>
              <li><a href="<?php echo base_url(); ?>/index.php/displaysegments/segment/all">All Programmes</a></li>
            </ul>
          </li>

          <li class="fas fa-search"><a href="http://localhost/projects/test/search_views.php">Search</a></li>
           <!--     <li class="fas fa-search"><a href="<?php //echo base_url(); ?>search_views.php">Search</a></li> -->
          <li><a href="<?php echo base_url(); ?>/index.php/menu/contact">Contact Us</a></li>

        <?php 
          if ($this->session->has_userdata('logged_in')) { 
              if($this->router->class == 'displaysegments')  // This piece helps to pass on segment_id to next controller
              {
                echo '<li><a href="'. base_url().'index.php/login/logout/'.$segment_id.'"> You are: '.$this->session->userdata('username').'|  <i class="fas fa-sign-out-alt"></i></i> Log Out</a></li>';
              } else 
              {
                echo '<li><a href="'. base_url().'index.php/login/logout/'.'NULL'.'"> You are: '.$this->session->userdata('username').'|  <i class="fas fa-sign-out-alt"></i></i> Log Out</a></li>';
              }
            
          }
          else 
          {
              if($this->router->class == 'displaysegments') // This piece helps to pass on segment_id to next controller
              {
                echo '<li><a href="'. base_url().'index.php/login/index/'.$segment_id.'"><i class="fas fa-sign-in-alt"></i> Log in</a> </li>';
              } else
              {
                echo '<li><a href="'. base_url().'index.php/login/index/'.'all'.'"><i class="fas fa-sign-in-alt"></i> Log in</a> </li>';
                // echo '<li><a href="'. base_url().'index.php/login"><i class="fas fa-sign-in-alt"></i> Log in</a> </li>';
              }
              // echo '<li><a href="'. base_url().'index.php/login/index/'.$segment_id.'"><i class="fas fa-sign-in-alt"></i> Log in</a> </li>';
              ?>
              <!-- <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button> -->
              <?php
          }
          ?>

          <!-- <li><a href="#contact">Contact Us</a></li> -->
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->