<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Docs | Success</title>
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
      <h1>Tafari Makonnen Polytechnic College | <span style="color:green">Message</span></h1>  
    </div>
  </div>

  <div id="content">
    <h1>Success</h1>
    <h2 style="color: green">You have successfully uploaded your file</h2>
  </div>

  <div class="clear"></div>

  <div id="footer">
    &copy;2023 tmptc.edu.et
  </div>
</div>

<script> 
  function redirectToHomePage() {
    var loc = "../index.php";
    document.location = loc;
  }

  setTimeout(redirectToHomePage, 5000); // Redirect after 5 seconds (5000 milliseconds)
</script>
</body>
</html>