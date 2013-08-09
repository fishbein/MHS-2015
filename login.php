<?php include("views/header.php"); ?>
<div class="row">
<?php if($_GET['success']){ ?>
  <div data-alert class="alert-box success">
    <?php echo $_GET['success']; ?>
    <a href="#" class="close">&times;</a>
</div>
<?php } ?>
<?php if($_GET['error']){ ?>
  <div data-alert class="alert-box alert">
    <?php echo $_GET['error']; ?>
    <a href="#" class="close">&times;</a>
</div>
<?php } ?>
<form action="login_action.php" method="POST">
  <fieldset>
    <legend>Log In</legend>
    <div class="row">
      <div class="large-4 columns">
        <label>Username</label>
        <input type="text" placeholder="" name="username">
      </div>
    </div>
    <div class="row">
      <div class="large-4 columns">
        <label>Password</label>
        <input type="password" placeholder="" name="password">
      </div>
    </div>
<button class="button">Log In</button>

  </fieldset>
</form>
</div>
<?php include("views/footer.php"); ?>