<!DOCTYPE html>
<html>
<head>
<title>Docs | Login</title>
<link rel="stylesheet" href="../css/login.css">
<script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>
<script>
  function getPage(url) {
    $('#content').hide(1000, function() {
      $('#content').load(url);
      $('#content').show(1000, function() {});
    });
  }
</script>
</head>
<body>
<div id="wrap">
  <div id="header">
    <div id="logo">
      <h1>Tafari Makonnen Polytechnic College | <span style="color:green">Login</span></h1>  
    </div>
  </div>

  <div id="content">
    <form name="Myform" id="Myform" action="loginProcess.php" method="post" onsubmit="return(Validate());">
      <div id="error"></div>
      <table>
        <tr>
          <td>Username</td>
          <td><input type="text" name="uname" id="fname" onkeydown="HideError()" /></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="password" name="password" id="password" onkeydown="HideError()" /></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" name="submit" value="Login" /></td>
        </tr>
        <tr>
          <td></td>
          <td><a href="#" onclick="getPage('forgetPassword.php')">Forgot your password..?</a></td>
        </tr>
      </table>
    </form>
  </div>

  <div class="clear"></div>

  <div id="footer">
    &copy;2023 tmptc.edu.et
  </div>
</div>
</body>
</html>