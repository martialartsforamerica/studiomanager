<?php
session_start();

if(isset($_SESSION['usr_id'])!="") {
    header("Location: curriculum-manager.php");
}

include_once 'dbconnect.php';

//check if form is submitted
if (isset($_POST['login'])) {

    $userid = mysqli_real_escape_string($con, $_POST['userid']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $result = mysqli_query($con, "SELECT * FROM users WHERE userid = '" . $userid. "' and password = '" . md5($password) . "'");

    if ($row = mysqli_fetch_array($result)) {
        $_SESSION['usr_id'] = $row['id'];
        $_SESSION['usr_name'] = $row['userid'];
        header("Location: curriculum-manager.php");
    } else {
        $errormsg = "Incorrect Email or Password!!!";
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
      width: 66.6em;
      height: 16px;
      margin-bottom: 0px;
    }
    .errortext {
      font-weight:600;
      color:#c9302c;
      font-size:12px;
      text-align:center;
    }
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
<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
                        <label for="userid">User ID: </label>
                        <input type="text" style="width:3em; font-size:1.6em" name="userid" required class="form-control" />
                  <br><br>
                        <label for="name">Password: </label>
                        <input type="password" style="width:3em; font-size:1.6em" name="password" required class="form-control" />
                    <br><br>
                        <input type="submit" name="login" value="Login" class="osx" />
                   <br>
            </form>
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
</div>
</center>
</div>
<link rel="stylesheet" href="style.css">