<?php include("views/header.php"); ?>
<div class="row">
<?php if(!$_GET['month']){$month = date('F');} else {$month = '???';} ?>
<h1>Events for <?php echo $month; ?></h1>
<!--<table style="margin:0 auto;">
  <thead>
    <tr>
      <th width="400">News/Event</th>
      <th width="300">Date</th>
      <th width="300">Location</th>
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
</table>-->
<p>No events scheduled for <?php echo $month; ?> yet.</p>
</div>
<?php include("views/footer.php"); ?>