<?php include("views/header.php"); ?>
<div class="row">
<form>
  <fieldset>
    <legend>Sign Up</legend>
    <div class="row">
      <div class="large-4 columns">
        <label>Name</label>
        <input type="text" placeholder="John Smith" name="name">
      </div>
    </div>
    <div class="row">
      <div class="large-4 columns">
        <label>Username</label>
        <input type="text" placeholder="jsmith" name="username">
      </div>
    </div>
    <div class="row">
      <div class="large-4 columns">
        <label>Email</label>
        <input type="text" placeholder="johnsmith@gmail.com" name="email">
      </div>
    </div>
    <div class="row">
      <div class="large-4 columns">
        <div class="row collapse">
          <label>Password</label>
          <div class="small-9 columns">
            <input type="password" placeholder="••••••••••" name="password">
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="large-4 columns">
        <input type="checkbox" checked name="emailme"> Email me about upcoming events
      </div>
    </div>
<button class="button">Submit</button>

  </fieldset>
</form>
</div>
<?php include("views/footer.php"); ?>