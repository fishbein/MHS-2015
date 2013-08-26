<?php include("views/header.php"); ?>
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
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Pizza Sale</td>
                  <td>Wednesday, September 18th at 3 PM</td>
                  <td>Main Lobby</td>
                </tr>
                <tr>
                  <td>Battle of The Classes</td>
                  <td>???</td>
                  <td>Gym</td>
                </tr>
                
              </tbody>
            </table>
            <?php anchor("events","See more...");?>
      </div>
      <div class="small-2 large-4 columns">
            <h3>Ideas</h3>
            <table style="margin:0 auto;">
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
            </table><br />
            <?php anchor("ideas","See more...");?>
      </div>
      <div class="small-2 large-4 columns">
            <h3>Notifications</h3>
      </div>
    </div>
</div>
<?php include("views/footer.php"); ?>