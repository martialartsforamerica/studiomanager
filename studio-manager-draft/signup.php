<?php
session_start();

if(isset($_SESSION['usr_id'])) {
    header("Location: index.php");
}

include_once 'dbconnect.php';

//set validation error flag as false
$error = false;

//check if form is submitted
if (isset($_POST['signup'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    
    //name can contain only alpha characters and space
    if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
        $error = true;
        $name_error = "Name must contain only alphabets and space";
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $email_error = "Please Enter Valid Email ID";
    }
    if(strlen($password) < 6) {
        $error = true;
        $password_error = "Password must be minimum of 6 characters";
    }
    if($password != $cpassword) {
        $error = true;
        $cpassword_error = "Password and Confirm Password doesn't match";
    }
    if (!$error) {
        if(mysqli_query($con, "INSERT INTO users(name,email,password) VALUES('" . $name . "', '" . $email . "', '" . md5($password) . "')")) {
            $successmsg = "Successfully Registered! <a href='login.php'>Click here to Login</a>";
        } else {
            $errormsg = "Error in registering...Please try again later!";
        }
    }
}
?>
<link rel="shortcut icon" type="image/x-icon" href="favicon.png">
<title>Studio Manager</title>
<?php ini_set('display_errors', 0); ?>

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
    ::selection {
    background: #0000c0;
    color:white; /* WebKit/Blink Browsers */
  }
  ::-moz-selection {
    background: #0000c0;
    color:white; /* Gecko Browsers */
  }
    .rectangle {
      width: 1500px;
      height: 16px;
      margin-bottom: 0px;
    }
    .errortext {
      font-weight:600;
      color:#c9302c;
      font-size:12px;
      text-align:center;
    }
  </style>
<p class="header" style="font-size:17px">Main Menu</p>
<div class="row">
  <div class="column" style="background-color:white;">
    
  </div>
  <div class="column" style="background-color:white;">
  <p style="font-weight:500px; font-size:13px; font-family: 'Arial, Tahoma, Helvetica, Verdana', sans-serif">Sign In</p>
  <div class="main" style="height:250px; width:100%; font-size:12px">
  <br>
  <br>
  <br>
  <br>
  <br>
<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
              
                        <label for="name">Name</label>
                        <input type="text" name="name" placeholder="Enter Full Name" required value="<?php if($error) echo $name; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                    <br><br>
                        <label for="name">Email</label>
                        <input type="text" name="email" placeholder="Email" required value="<?php if($error) echo $email; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
                        <br><br>
                        <label for="name">Password</label>
                        <input type="password" name="password" placeholder="Password" required class="form-control" />
                        <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                        <br><br>
                        <label for="name">Confirm Password</label>
                        <input type="password" name="cpassword" placeholder="Confirm Password" required class="form-control" />
                        <span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
                        <br><br>
                        <input type="submit" name="signup" value="Sign Up" class="btn btn-primary" />
                        <br>
            </form>
            <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
            <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
            <script src="js/jquery-1.10.2.js"></script>
  </div>
  <p style="color:#888; font-size:12px; font-weight:500"><a href="register.php">Register</a></p>
  </div>
  <div class="column" style="background-color:white;">
  <p style="font-weight:500px; font-size:13px; color:white; font-family: 'Arial, Tahoma, Helvetica, Verdana', sans-serif">User</p>
  <div class="main" style="height:250px; border:none">

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