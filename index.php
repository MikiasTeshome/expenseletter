<?php
    include_once 'AdminSession.php';
    $uname = $_SESSION['email'];
    $password = $_SESSION['password'];
    $chekUser = mysqli_query($con,"Select * from user where email= '$uname' AND password = '$password'") or die(mysqli_error($con));
    $row = mysqli_fetch_array($chekUser);
    $fname = $row['fname'];
    $lname = $row['lname'];
    
    $username = $fname . " ".$lname;
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Docs | Home Page</title>
        <link rel="stylesheet" href="css/index.css"> <!-- Add the CSS file -->
        <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="js/Registration.js"></script>
        <script>
            function getPage(url){
                $('#content').hide(1000,function(){
                $('#content').load(url);
                $('#content').show(1000,function(){});
                });
            }
        </script>
        <style>
            /* Add the CSS styles here */
            /* ... */
        </style>
    </head>
    <body>
        <div id="wrap">
            <div id="header">
                <div  id="logo">
                    <h1 style="text-align: center;color: green; "><span> ደብዳቤ ሲወጣ የወጪ ምዝገባ የሚያደርግ ፕላትፎርም   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;           &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;                <img style=" hight: 15%;width:15%; text-align:right;" src="image/Address Book.png" alt="logo"/></span></h1>  
                </div>
            </div>
            <div id="menu">
                <ul>
                    <li><a href="#" onclick="getPage('User/Registration.php')">Registration</a></li>
                    <li><a href="#">File Management</a>
                        <ul>
                            <li><a href="#" onclick="getPage('Upload/Upload.php')">Add New file</a></li>
                            <li><a href="#" onclick="getPage('View/View.php')">View All file</a></li>
                            <!--<li><a href="#">Edit file</a></li>-->
                        </ul>
                    </li> 
                    <li><a href="logout.php">Logout</a></li>
                    <li style="margin-top: 5px;margin-left: 25em;">You login as : <?php echo $username?></li>
                </ul>
            </div>
            <div id="main">
                <div id="content">
                    <h1>Welcome  </h1>
                    <ul style="margin-left: 5em; margin-top: 2em;">
                    <li>This page is for demo or prototype purposes only. It is not intended for actual use. &copy; Entoto Polytechnic College</li>
                        <li>ይህ ገጽ የማሳያ ወይም ለፕሮቶታይፕ ዓላማዎች ብቻ ነው። ለትክክለኛ ጥቅም የታሰበ አይደለም.  እንጦጦ ፖሊ ቴክኒክ ኮሌጅ</li>
                       
                        <li>Register new user</li>
                        <li>Edit registered users</li>
                    </ul>
                </div>
                <div id="side">
                    <h3>Dashboard</h3>
                    <table style="border: 1px black solid;background-color: #607B8B;">
                        <tr>
                            <td><li><a href="#" onclick="getPage('Upload/Upload.php')">Add New file</a></li></td>
                        </tr>
                        <tr>
                            <td><li><a href="#" onclick="getPage('View/View.php')">View file</a></li></td>
                        </tr>
                        <tr>
                            <td><li><a href="#" onclick="getPage('User/Registration.php')">Add user</a></li></td>
                        </tr>
                        <tr>
                            <td><li><a href="#" onclick="getPage('User/ViewUser.php')">View Users</a></li></td>
                        </tr>
                    </table>
                </div>
                <div class="clear"></div>
            </div>
            <div id="footer">
                &copy;2023 tmptc.edu.et
            </div>
        </div>
