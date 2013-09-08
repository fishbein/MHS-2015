<<<<<<< HEAD
<?php include("views/header.php"); ?>
<?php if($_SESSION['username']){ ?>
<div class="row">
    <h2>Welcome back!</h2>
    <div class="row">
      <div class="small-2 large-4 columns">
            <h3>Events</h3>
            <table>
              <thead>
                <tr>
                  <th width="200">News/Event</th>
                  <th width="300">Date</th>
                  <th width="200">Location</th>
                  <th width="200">Notes</th>
                </tr>
              </thead>
              <tbody>
                 <?php $month = date('F'); $event = new Event; $event->view($month); ?>
              </tbody>
            </table>
            <?php anchor("events","See more...");?>
      </div>
      <div class="small-2 large-4 columns">
            <h3>Ideas</h3>
            <!--<table style="margin:0 auto;">
              <thead>
                <tr>
                  <th width="150">Submitter</th>
                  <th width="400">Idea</th>
                  <th width="50">Votes</th>
                  <th width="32"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><i>Anonymous</i></td>
                  <td>Pizza sale Wednesday (9/18)</td>
                  <td style="text-align:center;color:green;"><b>73</b></td>
                  <td></td>
                </tr>
                <tr>
                  <td>John Smith</td>
                  <td>Rock Band Competition</td>
                  <td style="text-align:center;color:green;"><b>43</b></td>
                  <td style="text-align:center;"><span data-tooltip class="has-tip" title="Approved"><img src="img/check.png"></span></td>
                </tr>
                <tr>
                  <td>Bill Williams</td>
                  <td>I don't have an idea...</td>
                  <td style="text-align:center;color:red;">12</td>
                  <td></td>
                </tr>
              </tbody>
            </table>-->
            <h4>Coming soon!</h4><br />
            <!--<?php anchor("ideas","See more...");?>-->
      </div>
      <div class="small-2 large-4 columns">
            <h3>Notifications</h3>
            <h4>Coming soon!</h4>
      </div>
    </div>
</div>
<?php } else { ?>
<div id="info" style="text-align:center; font-size: 22px; font-weight: 100;">
  <h1 style="display:none;">MHS2015.com is here.</h1>
  <p class="one" style="display:none;">The unofficial Marlboro High School Class of 2015 website has arrived.</p>
<p class="two" style="display:none;"><a href="/signup">Sign up today</a> so you can to view updates and information regarding class events and fundraisers. In addition, you can submit and vote on fundraising ideas.</p>
</div>
<div id="info2" style="display:none; text-align:center; font-size: 22px; font-weight: 100; width:500px; margin: 0 auto;">
=======
<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Marlboro High School Class of 2015</title>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/foundation.css" />
  

  <script src="js/vendor/custom.modernizr.js"></script>
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
      <h1><a href="#">Marlboro High School Class of 2015 </a></h1>
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
    <!--<ul class="right">
      <li class="divider hide-for-small"></li>
      <li class=""><a href="#info">Information</a></li>
      <li class="divider"></li>
      <li class=""><a href="#preview">Preview</a></li>
    </ul>-->
  </section>
</nav>
<div id="info" style="text-align:center; font-size: 22px; font-weight: 100;">
	<h1 style="display:none;">Coming Fall 2013</h1>
	<p class="one" style="display:none;">The (un)official Marlboro High School Class of 2015 website will arrive in time for Junior year.</p>
<p class="two" style="display:none;">When it arrives, you'll be able to view updates and information regarding class events and fundraisers. In addition, you can submit and vote on fundraising ideas.</p>

</div>

<div id="info2" style="display:none; text-align:center; font-size: 22px; font-weight: 100; width:500px; margin: 0 auto;">
<?php if($_GET['error']=='true'){ ?>
<p style="color:red;">We've already got your email!</p>
<?php } else if($_GET['error']=='nope') { ?>
<p style="color:green;">Got it! We'll email you when the site is ready.</p>
<?php } else { ?>
<form action="email_submit.php" method="POST">
<p><b>Put your email below and you'll know when the site is up!</b></p>
  <input type="email" name="email" placeholder="johndoe@gmail.com">
  <button type="submit">Keep Me Up to Date</button><br />
  <small>we promise not to sell or use your email for purposes other than informing you when the site is live</small>
</form>
<?php } ?>
>>>>>>> master
Created by <a href="http://twitter.com/fishbein">@fishbein</a>.
<br />
<small>This site is not directly related to Marlboro High School nor is it related to the Freehold Regional High School District.</small>
</div>

<<<<<<< HEAD
<? } ?>
<?php include("views/footer.php"); ?>
=======

<!--<div class="slide" style="display:none;width:600px;margin:0 auto;">
  <h3 style="display:none;">Sneak Peak</h3>
<ul data-orbit>
  <li>
    <img src="img/tease1.png" />
    <div class="orbit-caption">...</div>
  </li>
  <li>
    <img src="../img/demos/demo2.jpg" />
    <div class="orbit-caption">...</div>
  </li>
  <li>
    <img src="../img/demos/demo3.jpg" />
    <div class="orbit-caption">...</div>
  </li>
</ul>
</div>-->
<!--<div class="slide" id="preview" style="display:none; padding:15px;">
  <h3>Preview</h3>
  <img src="img/tease1.png">
  <img src="img/tease2.png">
  <img src="img/tease3.png">
  
</div>-->
  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>
  
  <script src="js/foundation.min.js"></script>
  <!--
  
  <script src="js/foundation/foundation.js"></script>
  
  <script src="js/foundation/foundation.alerts.js"></script>
  
  <script src="js/foundation/foundation.clearing.js"></script>
  
  <script src="js/foundation/foundation.cookie.js"></script>
  
  <script src="js/foundation/foundation.dropdown.js"></script>
  
  <script src="js/foundation/foundation.forms.js"></script>
  
  <script src="js/foundation/foundation.joyride.js"></script>
  
  <script src="js/foundation/foundation.magellan.js"></script>
  
  <script src="js/foundation/foundation.orbit.js"></script>
  
  <script src="js/foundation/foundation.reveal.js"></script>
  
  <script src="js/foundation/foundation.section.js"></script>
  
  <script src="js/foundation/foundation.tooltips.js"></script>
  
  <script src="js/foundation/foundation.topbar.js"></script>
  
  <script src="js/foundation/foundation.interchange.js"></script>
  
  <script src="js/foundation/foundation.placeholder.js"></script>
  
  -->
  
  <script>
    $(document).foundation();
  </script>
</body>
</html>
>>>>>>> master
