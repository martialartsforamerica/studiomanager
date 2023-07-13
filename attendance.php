<style>
.session-timeout {
background-color:#b5cbf0;
border:1px solid #888;
width:40%;
padding:2px 4px;
color:black;
font-size:12px;
}
label {
    font-size:12px;
    font-weight:400;
}
.close {
    float:right;
}
</style>
<link rel="shortcut icon" type="image/x-icon" href="favicon.png">
<title>Studio Manager</title>
<link rel="stylesheet" href="style.css">
<div id="myModal" class="modal">
  <div class="modal-content">
    		<form action="submit-attendance.php" method="post">
			
<p>
			<label for="name">Name: </label>
			<input type="text" name="name" id="name">
			</p>

			
<p>
			<label for="date">Date: </label>
			<input type="date" name="date" id="date">
			</p>

			
<p>
			<label for="time">Time: </label>
			<input type="text" name="time" id="time">
			</p>

			
            <p>
        <label for="status">Status: </label>
        <select name="status" id="status">
<option selected disabled></option>
<option value="Present">Present</option>
<option value="Unexcused Absent">Unexcused Absent</option>
<option value="Excused Absent">Excused Absent</option>
<option value="Tardy">Tardy</option>
</select>
    </p>
    <br>
			<input type="submit" id="submit" value="Submit Attendance" title="Submit Attendance">
		</form>
  </div>
</div>
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
    ::selection {
    background: #0000c0;
    color:white; /* WebKit/Blink Browsers */
  }
  ::-moz-selection {
    background: #0000c0;
    color:white; /* Gecko Browsers */
  }
  [aria-current="page"] {
  pointer-events: none;
  cursor: default;
  font-weight:300;
  text-decoration: none;
  color: #666;
}
  </style>
  <a href="logout.php" style="float:right; margin-top:15px" title="Logout">Logout</a>
<p class="header" style="font-size:17px">Main Menu</p>
<a href="#" id="myBtn" style="float:right">Take Attendance</a>
  <p style="font-weight:500px; font-size:13px; font-family: 'Arial, Tahoma, Helvetica, Verdana', sans-serif">Admin</p>
  <style>
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.4);
}
.modal-content {
  background-color: #b5cbf0;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 20%;
}
</style>
<script>
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("submit")[0];
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
  <div class="main" style="background-color: #b5cbf0; height:399; width:100%; font-size:12px">
  <?php
$user = 'root';
$password = '';
$database = 'attendance';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}
$sql = " SELECT * FROM records ORDER BY time DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>

	<style>
		table {
			margin: 0 auto;
			font-size: 12px;
            background-color: #b5cbf0;
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
  background-color: #fefefe;
        }
		th,
		td {
			font-weight: bold;
			border: none;
            background-color: #fefefe;
			padding: 10px;
			text-align: center;
		}

		td {
			background-color: #fefefe;
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
				<th>Date</th>
				<th>Time</th>
				<th>Name</th>
                <th>Status</th>
			</tr>
			<?php
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<td><?php echo $rows['date'];?></td>
				<td><?php echo $rows['time'];?></td>
				<td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['status'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
            </div>
	</section>
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
