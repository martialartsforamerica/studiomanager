<?php
session_start();

if (isset($_SESSION['last_activity']) && time() - $_SESSION['last_activity'] > 600) {
    // last request was more than 15 minutes ago
    session_unset(); // unset $_SESSION variable for the run-time
    session_destroy(); // destroy session data in storage
    header("Location: index.php"); // redirect to login page
  }
  $_SESSION['last_activity'] = time(); // update last activity time stamp
  ?>
<link rel="shortcut icon" type="image/x-icon" href="favicon.png">
<title>Studio Manager</title>
<div class="container">
  <center>
<div class="hero">
  <div class="rectangle" style="height:84px; background-color:white">
  <p style="text-align:left; font-size:23px;  margin-left:5px; font-style:italic; font-weight:400; color:#222; font-family:'Verdana', sans-serif">Academy of Martial Arts<br>Studio Manager <label style="text-align:right; float:right; font-size:12px; font-family: 'Arial, Tahoma, Helvetica, Verdana', sans-serif; font-style:normal; margin-left:5px; margin-top:-3px; color:black">1404 Tolland Turnpike Manchester CT 06042<br>860.646.7993 - Office@TheAcademy.us</label></p>
  </div>
    <div class="rectangle" style="background-color:#c9302c"></div>
    <div class="rectangle" style="background-color:#0000c0"></div>
  </div>
  <style>
    .hero {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align:left;
      background-color:white;
    }
    
    .rectangle {
      width: 66.6em;
      height: 16px;
      margin-bottom: 0px;
    }
  </style>
  <a href="logout.php" style="float:right; margin-top:15px" title="Logout">Logout</a>
<p class="header" style="font-size:17px">Main Menu</p>
<div class="row">
  <div class="column" style="background-color:white;">
    
  </div>
  <div class="column" style="background-color:white;">
  <p style="font-weight:500px; font-size:13px; font-family: 'Arial, Tahoma, Helvetica, Verdana', sans-serif">Resources</p>
  <div class="main" style="height:250px; width:100%">
    <br>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "accounts";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>




    <a href="activities.php" disabled style="font-size:12px">Setup</a>
    <br>
    <br>
    <a href="categories.php" disabled style="font-size:12px">Admin</a>
    <br>
    <br>
    <a href="curriculum-manager.php" style="font-size:12px; font-weight:600">Curriculum</a>
    <br>
    <br>
    <a href="forms.php" style="font-size:12px">Forms</a>
    <br>
    <br>
    <a href="self-defense-routines.php" style="font-size:12px">Self-Defense Routines</a>
    <br>
    <br>
    <a href="supplements.php" style="font-size:12px">Supplements</a>
    <br>
    <br>
    <a href="techniques.php" style="font-size:12px">Techniques</a>
  <br><br>  
  </div>
  </div>
  <div class="column" style="background-color:white;">
  <p style="font-weight:500px; font-size:13px; font-family: 'Arial, Tahoma, Helvetica, Verdana', sans-serif">User</p>
  <div class="main" style="height:250px">
    <br>
    <a href="login.php" style="font-size:12px">Login</a>
    <br>
    <br>
    <a href="techniques-review.php" style="font-size:12px">Techniques Review</a>
    <br>
    <br>
    <a href="curriculum-student.php" style="font-size:12px; font-weight:600">Curriculum</a>
    <br>
    <br>
  </div>
  </div>
</div>
<div style="display: flex; margin-top:55px;
  justify-content: center;
  align-items: center; background-color:#e0e0e0;
  height: 40px;
  width: 100%">
<span style="font-size:13px">Copyright Martial Arts for America 2023</span>
</div>

<label for="category" style="display:none">Select Category:</label> 
  <select style="width:21%; display:none">
  <option disabled selected></option>
  <option value="absorptiontechniques"><code><-- Show All --></code></option>
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
</center>
</div>
<link rel="stylesheet" href="style.css">