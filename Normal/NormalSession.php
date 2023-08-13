<?php
    session_start();
    if($_SESSION['type']!='Normal')
    {
        header('location:"../index.php"');
        exit();
    }
    include '../connection.php'
?>
