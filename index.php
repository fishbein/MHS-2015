<?php include("views/header.php"); ?>
<body>
HI
  <nav class="top-bar">
  <ul class="title-area">
    <!-- Title Area -->
    <li class="name">
      <h1><a href="#"><?= SITE_NAME; ?> </a></h1>
    </li>
    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <!--<section class="top-bar-section">-->
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
      <li class="has-dropdown"><a href="#">Main Item 4</a>

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
      </li>
      <li class="divider"></li>
      <li class="has-form">
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
      </li>
      <li class="divider show-for-small"></li>
      <li class="has-form">
        <a class="button" href="#">Button!</a>
      </li>
    </ul>
  </section>-->
</nav>

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