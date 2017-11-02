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
<body> 
    <div class='main_landing' style='background-image:url("<?php bloginfo('template_directory'); ?>/images/ralph_celestin_landing_image.png");'>
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <img id='brand_img' class='pull-right' src="<?php echo get_bloginfo('template_url') ?>/images/Rise%20Celestial%20Studios-hi-res-gold-outline.png">
              <div class='social_icons text-center'>
                  <a href='#'><img src="<?php echo get_bloginfo('template_url') ?>/images/facebook_rounded_sqaure30x30.png" alt='Facebook Icon and Link'></a>
                  <a href='#'><img  src="<?php echo get_bloginfo('template_url') ?>/images/Twitter_Social_Icon_Rounded_Square_Color.30x30.png" alt='Twitter Icon and Link'></a>
                  <a href='#'><img src="<?php echo get_bloginfo('template_url') ?>/images/instagram_logo30x30.png" alt='Instagram Icon and Link'></a>
              </div>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav text-center">
                <li><a class='hvr-underline-from-center' href="#">Projects</a></li>
                <li><a class='hvr-underline-from-center' href="#">Auditions</a></li>
                <li><a class='hvr-underline-from-center' href="#">Biography</a></li>
                <li><a class='hvr-underline-from-center' href="#">Instagram</a></li>
                <li><a class='hvr-underline-from-center' href="#">Public Speaking</a></li>
                <li><a class='hvr-underline-from-center' href="#">Partners</a></li>
                <li><a class='hvr-underline-from-center' href="#">Contribute</a></li>
              </ul>
            </div>
          </div>
        </nav>
        <div class="container-fluid landing_buttons">
          <div class="row">
                <div id='landing_left' class="col-lg-6 col-md-6 col-12">
                    <div class='text-center'>
                        <h4>Ralph A. Celestin</h4>
                        <button id='btn1' type='button' class='btn btn-lg hvr-shutter-out-horizontal'>Enter</button>
                    </div>
                </div>
                <div id='landing_right' class="col-lg-6 col-md-6 col-12">
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