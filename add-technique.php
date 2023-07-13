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
  <link rel="stylesheet" href="style.css">
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
      width: 1500px;
      height: 16px;
      margin-bottom: 0px;
    }
    .blink {
      animation: blink-animation 0.6s infinite;
    }

    @keyframes blink-animation {
      0% { opacity: 1; }
      50% { opacity: 0; }
      100% { opacity: 1; }
    }
</style>
        <script>
    window.addEventListener('DOMContentLoaded', function() {
      var selectElement = document.getElementById('mySelect');

      selectElement.addEventListener('click', function() {
        selectElement.classList.remove('blink');
      });

      selectElement.classList.add('blink');
    });
    </script>
    <style>
    .osx, .osx:hover {

color: #000; text-decoration: none; text-shadow: 0 1px rgba(255,255,255,.2);
 font:  400 13px/19px "Helvetica Neue", Arial, sans-serif;

-webkit-tap-highlight-color: transparent;
cursor:pointer;
padding: 0 20px;
      border: 1px solid;
  border-top-color: #9d9d9d; border-bottom-color: #939393;
  border-left-color: #949494; border-right-color: #949494;

  -webkit-border-radius: 50px;   box-shadow: 0 1px rgba(0,0,0,0.1);
  -moz-border-radius: 50px; -moz-box-shadow: 0 1px rgba(0,0,0,0.1);
  border-radius: 50px;   -webkit-box-shadow: 0 1px rgba(0,0,0,0.1);
    
  -webkit-appearance: none;

  background: #ffffff; /* Old browsers */

  background: -webkit-gradient(linear, left top, left bottom, 
             /* Chrome, */     color-stop( 0%, #ffffff),
             /* Safari4+ */                 color-stop(25%, #ffffff),       
                                                        color-stop( 30%, #fcfcfc), 
                                                                       color-stop(35%, #f9f9f9),            
                               color-stop(40%, #f7f7f7),    
                                            color-stop(45%, #f5f5f5),         
                                                        color-stop( 50%, #f2f2f2), 
                                                                       color-stop(50%, #ececec),                 
                               color-stop(80%, #ededed),
                                            color-stop(95%, #efefef),
                                                        color-stop(100%, #f2f2f2)); 
  background: -webkit-linear-gradient(top,     #ffffff  0%, #ffffff 25%, #fcfcfc  30%, #f9f9f9 35%,
               /* Chrome10+, */                #f7f7f7 40%, #f5f5f5 45%, #f2f2f2  50%, #ececec 50%,
               /* Safari5.1+ */                #ededed 80%, #efefef 95%, #f2f2f2 100%);
  background: -moz-linear-gradient(top,        #ffffff  0%, #ffffff 25%, #fcfcfc  30%, #f9f9f9 35%, 
               /* FF3.6+ */                    #f7f7f7 40%, #f5f5f5 45%, #f2f2f2  50%, #ececec 50%,
                                               #ededed 80%, #efefef 95%, #f2f2f2 100%); 
  background: -o-linear-gradient(top,          #ffffff  0%, #ffffff 25%, #fcfcfc  30%, #f9f9f9 35%,
               /* Opera 11.10+ */              #f7f7f7 40%, #f5f5f5 45%, #f2f2f2  50%, #ececec 50%,
                                               #ededed 80%, #efefef 95%, #f2f2f2 100%); 
  background: -ms-linear-gradient(top,         #ffffff  0%, #ffffff 25%, #fcfcfc  30%, #f9f9f9 35%,
               /* IE10+ */                     #f7f7f7 40%, #f5f5f5 45%, #f2f2f2  50%, #ececec 50%,
                                               #ededed 80%, #efefef 95%, #f2f2f2 100%);
  background: linear-gradient(top,             #ffffff  0%, #ffffff 25%, #fcfcfc  30%, #f9f9f9 35%,
              /* W3C */                        #f7f7f7 40%, #f5f5f5 45%, #f2f2f2  50%, #ececec 50%,
                                               #ededed 80%, #efefef 95%, #f2f2f2 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( 
          /* IE6-9 */           startColorstr='#ffffff',    endColorstr='#f2f2f2',GradientType=0 );

     -webkit-user-select: none;
    -moz-user-select: none;  user-select: none;

}
  </style>


      <a href="logout.php" style="float:right; margin-top:15px" class="btn">Logout</a>
<p class="header"><a href="curriculum-manager.php">Back to Main Menu</a></p>
<div class="row">
  <div class="column" style="background-color:white;">
  <p style="font-weight:500px; font-family: 'Arial, Tahoma, Helvetica, Verdana', sans-serif;">Curriculum Manager - Add Technique</p>
 <div class="main" style="width:600px">	
 <form action="process_technique.php" style="font-size:12px" method="POST">
  <br>
<?php
error_reporting(E_ALL & ~E_NOTICE);

$link = mysqli_connect("localhost","root","","curriculum");

$sql = "SELECT categoryname FROM categories GROUP BY categoryname;";

$result = mysqli_query($link,$sql);
if ($result != 0) {
    echo '<label>Select Category: ';
    echo '<select id="mySelect" name="categoryname">';
    echo '<option disabled selected></option>';

    $num_results = mysqli_num_rows($result);
    for ($i=0;$i<$num_results;$i++) {
        $row = mysqli_fetch_array($result);
        $categoryname = $row['categoryname'];
        echo '<option value=' .$categoryname. '>' .$categoryname. '</option>';
    }

    echo '</select>';
    echo '</label>';
}
?>
<br><br>
<?php
$link = mysqli_connect("localhost","root","","curriculum");

$sql = "SELECT program_name FROM programs GROUP BY program_name";

$result = mysqli_query($link,$sql);
if ($result != 0) {
    echo '<label>Select Program: ';
    echo '<select name="program_name">';
    echo '<option disabled selected></option>';

    $num_results = mysqli_num_rows($result);
    for ($i=0;$i<$num_results;$i++) {
        $row = mysqli_fetch_array($result);
        $program_name = $row['program_name'];
        echo '<option value=' .$program_name. '>' .$program_name. '</option>';
    }

    echo '</select>';
    echo '</label>';
}

?>

<br><br>
  <label for="techniquename">Technique:</label>
  <input type="text" id="techniquename" id="techniquename" required>
  <br><br>
  <?php
$link = mysqli_connect("localhost","root","","curriculum");

$sql = "SELECT beltname FROM ranks GROUP BY beltname";

$result = mysqli_query($link,$sql);
if ($result != 0) {
    echo '<label>Rank: ';
    echo '<select name="ranks">';
    echo '<option disabled selected></option>';

    $num_results = mysqli_num_rows($result);
    for ($i=0;$i<$num_results;$i++) {
        $row = mysqli_fetch_array($result);
        $beltname = $row['beltname'];
        echo '<option value=' .$beltname. '>' .$beltname. '</option>';
    }

    echo '</select>';
    echo '</label>';
}

mysqli_close($link);

?>
<br><br><br>
  <label for="description">Description:</label><br><br>
  <textarea id="description" rows="6" cols="35" name="description" required></textarea>
  
  <br><br>
  <input type="submit" title="Add entry" value="Add entry" class="osx" name="submit">
</form>


</div>
  </div>
  <div class="column" style="background-color:transparent;">
  
  </div>
  <div class="column" style="background-color:transparent">
  <p style="font-weight:500px; font-family: 'Arial, Tahoma, Helvetica, Verdana', sans-serif;">Tools</p>
  <div class="main" style="height:250px">
  <br>
    <a href="add-program.php" style="font-size:12px">Add Program</a>
    <br>
    <br>
    <a href="add-category.php" style="font-size:12px">Add Category</a>
    <br>
    <br>
    <a href="add-rank.php" style="font-size:12px; font-weight:600">Add Rank</a>
    <br>
    <br>
    <a href="add-technique.php" style="font-size:12px">Add Technique</a>
    <br>
    <br>
    <hr style="background-color:#999; height:1px; border:none; width:80%">
    <br>
    <a href="view-techniques.php" style="font-size:12px">View Techniques</a>
    <br>
    <br>
    <a href="view-categories.php" style="font-size:12px">View Categories</a>
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
</center>
</div>