<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ralph A. Celestin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel='stylesheet' href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>  
</head>
<body style='background-image:url("<?php bloginfo('template_directory'); ?>/images/ralph_celestin_background.jpg");> 
    <div class='main_landing' '>
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <span id="nav_icon" style="font-size:30px;cursor:pointer" onclick="openNav()">☰ Menu</span>
              <img id='brand_img' class='pull-right' src="<?php echo get_bloginfo('template_url') ?>/images/Rise%20Celestial%20Studios-hi-res-gold-outline.png">
              <div class='social_icons text-center'>
                  <a href='https://www.facebook.com/Boston2Philly/' target='_blank'><img src="<?php echo get_bloginfo('template_url') ?>/images/facebook_rounded_sqaure30x30.png" alt='Facebook Icon and Link'></a>
                  <a href='https://twitter.com/boston2philly?lang=en' target='_blank'><img  src="<?php echo get_bloginfo('template_url') ?>/images/Twitter_Social_Icon_Rounded_Square_Color.30x30.png" alt='Twitter Icon and Link'></a>
                  <a href='https://www.instagram.com/ralphaworld/' target='_blank'><img src="<?php echo get_bloginfo('template_url') ?>/images/instagram_logo30x30.png" alt='Instagram Icon and Link'></a>
              </div>
            </div>
            <div id="myNav" class="overlay">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
              <div class="overlay-content">
                <a class='hvr-underline-from-center' href="http://ralphcelestin.com/projects/">Projects</a>
                <!--<a class='hvr-underline-from-center' href="#">Auditions</a>-->
                <a class='hvr-underline-from-center' href="http://ralphcelestin.com/biography/">Biography</a>
                <a class='hvr-underline-from-center' href=" http://ralphcelestin.com/instagram/">Instagram</a>
                <a class='hvr-underline-from-center' href="http://ralphcelestin.com/public-speaking/">Public Speaking</a>
                <a class='hvr-underline-from-center' href="http://ralphcelestin.com/partners/">Partners</a>
                <a class='hvr-underline-from-center' href="http://ralphcelestin.com/contact/">Contact</a>
              </div>
            </div>
          </div>
        </nav>
        <div class="container-fluid landing_buttons">
          <div class="row">
                <div class='col-lg-6 col-md-6 col-md-push-3 col-sm-12 col-12 container-fluid'>
                    <img class='landing_img img-responsive center-block' src="<?php echo get_bloginfo('template_url') ?>/images/ralph_celestin_landing_for_backgroundFINAL.jpg">
                </div>
                <div id='landing_left' class="col-lg-3 col-md-3 col-md-pull-6 col-sm-6 col-12">
                    <div class='text-center'>
                        <h4>Ralph A. Celestin</h4>
                        <a href='http://ralphcelestin.com/ralph_a_celestin_home/'><button id='btn1' type='button' class='btn btn-lg hvr-shutter-out-horizontal'>Enter</button></a>
                    </div>
                </div>
                <div id='landing_right' class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <div class='text-center'>
                        <h4>Rise Celestial Studios</h4>
                        <button id='btn2' type='button' class='btn btn-lg hvr-shutter-out-horizontal'>Enter</button>
                    </div>
                </div>
          </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src='/landing.js'></script>
    <?php wp_footer(); ?>
</body>