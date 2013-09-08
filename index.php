
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
