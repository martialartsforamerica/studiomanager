<a href="curriculum-manager.php" title="Curriculum Manager">Curriculum Manager</a>
<a href="add-program.php" title="Add Program">Add Program</a>
<a href="add-rank.php" title="Add Rank">Add Rank</a>
<a href="add-category.php" title="Add Category">Add Category</a>
<a href="add-technique.php" title="Add Technique">Add Technique</a>
<a href="index.php" title="Home">Home</a>

<form action="process_data.php" method="POST">
    <label for="category">Category:</label>
<select style="width:21%" required id="category" name="category">
  <option disabled selected></option>
  <option><code><-- Show All --></code></option>
  <option disabled selected></option>
  <option value="absorptiontechniques">Absorption Techniques</option>
  <option value="balancebeam">Balance Beam</option>
  <option value="breaking">Breaking</option>
  <option value="blocks">Blocks</option>
  <option value="breathingtechniques">Breathing Techniques</option>
  <option value="breakreleases">Break Releases</option>
  <option value="calisthenics">Calisthenics</option>
  <option value="chokes">Chokes</option>
  <option value="cargonet">Cargo Net</option>
  <option value="characterdevelopment">Character Development</option>
  <option value="drills">Drills</option>
  <option value="falls">Falls</option>
  <option value="floor">Floor</option>
  <option value="forms">Forms</option>
  <option value="grabs">Grabs</option>
  <option value="grappling">Grappling</option>
  <option value="immobilizationtechniques">Immobilization Techniques</option>
  <option value="jointbreaks">Joint Breaks</option>
  <option value="kicks">Kicks</option>
  <option value="lock">Lock</option>
  <option value="movement">Movement</option>
  <option value="philosophy">Philosophy</option>
  <option value="precisionjumping">Precision Jumping</option>
  <option value="pressurepoints">Pressure Points</option>
  <option value="pegboard">Peg Board</option>
  <option value="rings">Rings</option>
  <option value="rolls">Rolls</option>
  <option value="ropes">Ropes</option>
  <option value="rockwall">Rock Wall</option>
  <option value="supplements">Supplements</option>
  <option value="selfdefense">Self-Defense</option>
  <option value="stepping">Stepping</option>
  <option value="stances">Stances</option>
  <option value="striding">Striding</option>
  <option value="strikes">Strikes</option>
  <option value="sparring">Sparring</option>
  <option value="swordbasics">Sword Basics</option>
  <option value="sworddueling">Sword Dueling</option>
  <option value="swordforms">Sword Forms</option>
  <option value="swordtwirling">Sword Twirling</option>
  <option value="trampoline">Trampoline</option>
  <option value="tumbletrack">Tumble Track</option>
  <option value="throws">Throws</option>
  <option value="trainingprinciples">Training Principles</option>
  <option value="vaults">Vaults</option>
  <option value="vitalareas">Vital Areas</option>
  <option value="wall">Wall</option>
</select>
<br><br>

<?php
error_reporting(E_ALL & ~E_NOTICE);

$link = mysqli_connect("localhost","root","","curriculum");

$sql = "SELECT categoryname FROM categories GROUP BY categoryname;";

$result = mysqli_query($link,$sql);
if ($result != 0) {
    echo '<label>City:';
    echo '<select name="city">';
    echo '<option value="">all</option>';

    $num_results = mysqli_num_rows($result);
    for ($i=0;$i<$num_results;$i++) {
        $row = mysqli_fetch_array($result);
        $categoryname = $row['categoryname'];
        echo '<option value="' .$categoryname. '">' .$categoryname. '</option>';
    }

    echo '</select>';
    echo '</label>';
}

mysqli_close($link);

?>


  <label for="technique">Technique:</label>
  <select id="technique" name="technique" required>
<option disabled selected></option>
<optgroup label="Absorption Techniques">
<option disabled></option>
</optgroup>
<optgroup label="Balance Beam">
<option value="Walk Across">Walk Across</option>
<option value="Walk Backwards Across">Walk Backwards Across</option>
</optgroup>
<optgroup label="Breaking">
<option value="Elbow Break">Elbow Break</option>
</optgroup>
<optgroup label="Blocks">
<option value="High Block">High Block</option>
</optgroup>
</select>
  <br><br>
  <label for="rank">Rank:</label>
  <select id="rank" name="rank" required>
<option disabled selected></option>
<option value="White Belt">White Belt</option>
<option value="Yellow Belt">Yellow Belt</option>
</select>
<br><br>
  <label for="description">Description:</label>
  <textarea id="description" name="description" required></textarea>
  
  <!-- Add any additional fields here -->
  <br><br>
  <input type="submit" value="Add Curriculum">
</form>
