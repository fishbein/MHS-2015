<?php include("views/header.php"); ?>
<div class="row">
<?php if(!$_GET['year']){$year = date("Y");} ?>
<?php if(!$_GET['month']){$month = date('F');} else {$month = date('F', mktime(0, 0, 0, $_GET['month'], 1, $year));} ?>
<h1>Events for <?php echo $month; ?></h1> <?php if($admin==TRUE){ ?> <form action="/events/new" method="POST"><button class="btn btn-primary">Add Event</button></form> <?php } ?>
<table style="margin:0 auto;">
  <thead>
    <tr>
      <th width="400">News/Event</th>
      <th width="300">Date</th>
      <th width="300">Location</th>
      <th width="300">Notes</th>
    </tr>
  </thead>
  <tbody>
  <?php $event = new Event; $event->view($month); ?>
</tbody>
</table>
</div>
<?php include("views/footer.php"); ?>