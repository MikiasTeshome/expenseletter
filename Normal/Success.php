<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Docs | Success</title>
<link rel="stylesheet" href="../css/login.css">
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }

  #wrap {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
  }

  #header {
    background: #f2f2f2;
    padding: 10px;
    text-align: center;
  }

  #content {
    margin-top: 30px;
    text-align: center;
  }

  #footer {
    background: #f2f2f2;
    padding: 10px;
    text-align: center;
  }
</style>
</head>
<body>
<div id="wrap">
<div id="header">
<div id="logo">
    <h1 style="text-align: center;"> Tafari Makonnen Polytechnic College| <span style="color:green">Message</span></h1>  
</div>
</div>

<div id="content">
    
    <h1 style="margin-left: 5em;"> Success</h1>
    <h2 style="color: green">You have successful Upload your file</h2>
    
</div>

<div class= "clear"></div>

<div id="footer">
&copy;2023 tmptc.edu.et
</div>
</div>
</body>
</html>
<?php
$path = ($_SESSION['type'] == 'Admin') ? "../" : "../Normal/";
    $loc = "../";
					
					echo '<script> 
					
					function refPage() {
						var loc = "'.$loc.'";
						document.location = loc;
					}
					
					setInterval(\'refPage()\', 2000);
					
					</script>';
?>