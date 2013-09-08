<?php include("views/header.php"); ?>
<div class="row">
<?php if($_GET['error']){ ?>
  <div data-alert class="alert-box alert">
    <?php echo $_GET['error']; ?>
    <a href="#" class="close">&times;</a>
</div>
<?php } ?>
<form action="../event_action.php" method="POST" class="custom">
  <fieldset>
    <legend>Add a New Event</legend>
    <div class="row">
      <div class="large-4 columns">
        <label>What?</label>
        <input type="text" placeholder="Pizza Sale" name="title">
      </div>
    </div>
    <div class="row">
      <div class="large-4 columns">
        <label>When?</label>
        <select name="month" class="small">
          <option value="01">January</option>
          <option value="02">February</option>
          <option value="03">March</option>
          <option value="04">April</option>
          <option value="05">May</option>
          <option value="06">June</option>
          <option value="07">July</option>
          <option value="08">August</option>
          <option value="09">September</option>
          <option value="10">October</option>
          <option value="11">November</option>
          <option value="12">December</option>
        </select>
        <select name="day" class="small">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
          <option>11</option>
          <option>12</option>
          <option>13</option>
          <option>14</option>
          <option>15</option>
          <option>16</option>
          <option>17</option>
          <option>18</option>
          <option>19</option>
          <option>20</option>
          <option>21</option>
          <option>22</option>
          <option>23</option>
          <option>24</option>
          <option>25</option>
          <option>26</option>
          <option>27</option>
          <option>28</option>
          <option>29</option>
          <option>30</option>
          <option>31</option>
        </select>
        <select name="year" class="small">
          <option>2013</option>
          <option>2014</option>
        </select>
        <input type="text" class="small" size="2" placeholder="01" name="hour">:<input type="text" size="2" class="small" placeholder="01" name="minute">
      </div>
    </div>
    <div class="row">
      <div class="large-4 columns">
        <label>Where?</label>
        <input type="text" placeholder="Main Lobby" name="where">
      </div>
    </div>
    <div class="row">
      <div class="large-4 columns">
        <label>Notes:</label>
        <textarea name="note"></textarea>
      </div>
    </div>
<button class="button">Add</button>

  </fieldset>
</form>
</div>
<?php include("views/footer.php"); ?>