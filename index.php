<?php include("views/header.php"); ?>
<div class="row">
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
</table>
<br /><br />
<table style="margin:0 auto;">
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

<br />

<form>
  <fieldset>
    <legend>Sign Up</legend>

    <div class="row">
      <div class="large-4 columns">
        <label>Name</label>
        <input type="text" placeholder="">
      </div>
    </div>

    <div class="row">
      <div class="large-4 columns">
        <label>Username</label>
        <input type="text" placeholder="">
      </div>
    </div>
    <div class="row">
      <div class="large-4 columns">
        <label>Email</label>
        <input type="text" placeholder="">
      </div>
    </div>
    <div class="row">
      <div class="large-4 columns">
        <div class="row collapse">
          <label>Password</label>
          <div class="small-9 columns">
            <input type="password" placeholder="">
          </div>
        </div>
      </div>
    </div>
<button class="button">Submit</button>

  </fieldset>
</form>
</div>
<?php include("views/footer.php"); ?>