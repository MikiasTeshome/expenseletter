<?php
    include '../connection.php';
    if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
    {
        $fileName = $_FILES['userfile']['name'];
        $tmpName  = $_FILES['userfile']['tmp_name'];
        $fileSize = $_FILES['userfile']['size'];
        $fileType = $_FILES['userfile']['type'];
        $fileType = mysqli_real_escape_string($con, stripslashes($fileType));
        $fp       = fopen($tmpName, 'r');
        $content  = fread($fp, filesize($tmpName));
        $content  = addslashes($content);
        fclose($fp);
        $fileName = addslashes($fileName);
        
        // Get the current date
        $uploadDate = date('Y-m-d'); // Example: Outputs '2023-08-12' for August 12, 2023
        
        if($con){
            $query = "INSERT INTO upload (name, size, type, content, upload_date) ".
                     "VALUES ('$fileName', '$fileSize', '$fileType', '$content', '$uploadDate')";
            mysqli_query($con, $query) or die('Error, query failed'); 
            
            header('location:Success.php');
        }
        else { 
            header('location:../View/View.php');   
        }
    } 
?>