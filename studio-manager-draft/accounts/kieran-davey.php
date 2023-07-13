<link rel="shortcut icon" type="image/x-icon" href="favicon.png">
<title>Studio Manager</title>
<link rel="stylesheet" href="style.css">
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
  <a href="http://localhost:8080/studio-manager-draft\logout.php" style="float:right; margin-top:15px">Logout</a>
<p class="header"><a href="http://localhost:8080/studio-manager-draft\curriculum-manager.php">Back to Main Menu</a></p>
  <p style="font-weight:500px; font-size:13px; font-family: 'Arial, Tahoma, Helvetica, Verdana', sans-serif">Attendance</p>
  
  <div class="main" style="height:398px; background-color: #b5cbf0; width:100%; font-size:12px">


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
			border: 1px solid transparent;
		}
        th {
            position: sticky;
  top: 0; 
  border: 1px solid transparent;
  background: white;
        }
		th,
		td {
			font-weight: bold;
			border: 1px solid transparent;
			text-align: center;
		}

		td {
			font-weight: lighter;
      border: 1px solid transparent;
		}
        .scrollit {
    overflow-y:scroll;
    height:391px;
}

	</style>
 
<section>
    <div class="scrollit">
	<table>

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
