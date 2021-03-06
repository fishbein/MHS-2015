<?php require('start.php'); ?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title><?php echo SITE_NAME; ?></title>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <link rel="stylesheet" href="../css/foundation.css" />
  

  <script src="../jquery/vendor/custom.modernizr.js"></script>
  <script>
    $(document).ready(function() {
      $('h1').delay('100').fadeIn('slow');
      $('p.one').delay('600').fadeIn('slow');
      $('p.two').delay('1200').fadeIn('slow');
      $('h3').delay('1600').fadeIn('slow');
      $('#info2').delay('2000').fadeIn('slow');
      $('.slide').delay('2000').fadeIn('slow');
  });
    
  </script>
</head>
<body>
  <nav class="top-bar">
  <ul class="title-area">
    <!-- Title Area -->
    <li class="name">
      <h1><?php anchor(SITE_PATH, SITE_NAME); ?></h1>
    </li>
    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Left Nav Section -->
    <!--<ul class="left">
      <li class="divider"></li>
      <li class="active"><a href="#">Main Item 1</a></li>
      <li class="divider"></li>
      <li><a href="#">Main Item 2</a></li>
      <li class="divider"></li>
      <li class="has-dropdown"><a href="#">Main Item 3</a>

        <ul class="dropdown">
          <li class="has-dropdown"><a href="#">Dropdown Level 1a</a>

            <ul class="dropdown">
              <li><label>Dropdown Level 2 Label</label></li>
              <li><a href="#">Dropdown Level 2a</a></li>
              <li><a href="#">Dropdown Level 2b</a></li>
              <li class="has-dropdown"><a href="#">Dropdown Level 2c</a>

                <ul class="dropdown">
                  <li><label>Dropdown Level 3 Label</label></li>
                  <li><a href="#">Dropdown Level 3a</a></li>
                  <li><a href="#">Dropdown Level 3b</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Dropdown Level 3c</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown Level 2d</a></li>
              <li><a href="#">Dropdown Level 2e</a></li>
              <li><a href="#">Dropdown Level 2f</a></li>
            </ul>
          </li>
          <li><a href="#">Dropdown Level 1b</a></li>
          <li><a href="#">Dropdown Level 1c</a></li>
          <li class="divider"></li>
          <li><a href="#">Dropdown Level 1d</a></li>
          <li><a href="#">Dropdown Level 1e</a></li>
          <li><a href="#">Dropdown Level 1f</a></li>
          <li class="divider"></li>
          <li><a href="#">See all &rarr;</a></li>
        </ul>
      </li>
      <li class="divider"></li>
    </ul>-->

    <!-- Right Nav Section -->
    <ul class="right">
      
      <li class="divider hide-for-small"></li>

      <!--Always Shown-->
      <li><?php anchor(SITE_PATH, 'Home');?></li>
      <li class="divider hide-for-small"></li>
      <li><?php anchor(SITE_PATH.'ideas', 'Ideas'); ?></li>
      <li class="divider hide-for-small"></li>
      <li><?php anchor(SITE_PATH.'events', 'Events'); ?></li>
      <li class="divider hide-for-small"></li>

      <?php if(!$_SESSION['username']){ ?>
      <li><?php anchor(SITE_PATH.'signup', 'Sign Up'); ?></li>
      <li class="divider hide-for-small"></li>
      <li><?php anchor(SITE_PATH.'login', 'Log In'); ?></li>
      <?php } else if($_SESSION['username']) { ?>
      <?php $user = user($_SESSION['username']); ?>
      <li class="has-dropdown"><?php anchor('#',"Welcome, ".$user['name']);?>
          <ul class="dropdown">
            <li><?php anchor("/profile","My Profile");?></li>
            <li><?php anchor("/logout","Logout");?></li>
          </ul>
      </li>
      <?php } ?>

      <!--<li class="has-dropdown"><a href="#">Main Item 4</a>

        <ul class="dropdown">
          <li><label>Dropdown Level 1 Label</label></li>
          <li class="has-dropdown"><a href="#" class="">Dropdown Level 1a</a>

            <ul class="dropdown">
              <li><a href="#">Dropdown Level 2a</a></li>
              <li><a href="#">Dropdown Level 2b</a></li>
              <li class="has-dropdown"><a href="#">Dropdown Level 2c</a>

                <ul class="dropdown">
                  <li><a href="#">Dropdown Level 3a</a></li>
                  <li><a href="#">Dropdown Level 3b</a></li>
                  <li><a href="#">Dropdown Level 3c</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown Level 2d</a></li>
              <li><a href="#">Dropdown Level 2e</a></li>
              <li><a href="#">Dropdown Level 2f</a></li>
            </ul>
          </li>
          <li><a href="#">Dropdown Level 1b</a></li>
          <li><a href="#">Dropdown Level 1c</a></li>
          <li class="divider"></li>
          <li><label>Dropdown Level 1 Label</label></li>
          <li><a href="#">Dropdown Level 1d</a></li>
          <li><a href="#">Dropdown Level 1e</a></li>
          <li><a href="#">Dropdown Level 1f</a></li>
          <li class="divider"></li>
          <li><a href="#">See all &rarr;</a></li>
        </ul>
      </li>-->
      <li class="divider"></li>
      <!--<li class="has-form">
        <form>
          <div class="row collapse">
            <div class="small-8 columns">
              <input type="text">
            </div>
            <div class="small-4 columns">
              <a href="#" class="alert button">Search</a>
            </div>
          </div>
        </form>
      </li>-->
      <li class="divider show-for-small"></li>
      <!--<li class="has-form">
        <a class="button" href="#">Button!</a>
      </li>-->
    </ul>
  </section>
</nav>