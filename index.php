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
Created by <a href="http://twitter.com/fishbein">@fishbein</a>.
<br />
<small>This site is not directly related to Marlboro High School nor is it related to the Freehold Regional High School District.</small>
</div>

<? } ?>
<?php include("views/footer.php"); ?>