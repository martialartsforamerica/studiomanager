
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
      width: 66.6em;
      height: 16px;
      margin-bottom: 0px;
    }
  </style>
      <a href="logout.php" style="float:right; margin-top:21px" class="btn">Logout</a>
<p class="header"><a href="curriculum-manager.php">Back to Main Menu</a></p>
<div class="row">
  <div class="column" style="background-color:white;">
  <p style="font-weight:500px; margin-right:-50px; margin-left:-59px; margin-bottom:5px; font-family: 'Arial, Tahoma, Helvetica, Verdana', sans-serif;">Studio Manager - Accounts</p>
 <div class="main" style="width:660px; margin-left:-10px; height:399px">	
<?php
$user = 'root';
$password = '';
$database = 'testdb';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}
$sql = " SELECT * FROM users ORDER BY userid DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>

	<style>
		table {
			margin: 0 auto;
			font-size: 12px;
            background-color: white;
            width:100%;
            border-collapse:collapse;
		}
    
		td {
			background-color: #b5cbf0;
			border: 1px solid #888;
		}
        th {
            position: sticky;
  top: 0; 
  background: white;
        }
		th,
		td {
			font-weight: bold;
			border: none;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
        .scrollit {
    overflow-y:scroll;
    height:391px;
}
	</style>

<body>
	<section>
    <div class="scrollit">
		<table>
			<tr>
				<th>ID</th>
				<th>Email</th>
				<th>User ID</th>
                <th>Password</th>

			</tr>
			<?php
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<td><?php echo $rows['id'];?></td>
				<td><?php echo $rows['email'];?></td>
				<td><?php echo $rows['userid'];?></td>
                <td><?php echo $rows['password'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
            </div>
	</section>
</body>

</html>

<link rel="stylesheet" href="style.css">

</div>
  </div>
  <div class="column" style="background-color:white;">
  
  </div>
  <div class="column" style="background-color:transparent">
  <p style="font-weight:500px; font-family: 'Arial, Tahoma, Helvetica, Verdana', sans-serif;">Tools</p>
  <div class="main" style="height:250px">
  <br>
  <a href="curriculum-manager.php" style="font-size:12px; font-weight:600">Curriculum</a>
    <br>
    <br>
    <a href="add-program.php" style="font-size:12px">Add Program</a>
    <br>
    <br>
    <a href="add-category.php" style="font-size:12px">Add Category</a>
    <br>
    <br>
    <a href="add-rank.php" style="font-size:12px">Add Rank</a>
    <br>
    <br>
    <a href="add-technique.php" style="font-size:12px">Add Technique</a>
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