<?php
session_start();
$path = ($_SESSION['type'] == 'Admin') ? "./" : "../";
?>
<form action= "<?php echo $path ?>Upload/UploadProcess.php" method="post" enctype="multipart/form-data">
<table width="350" border="0" cellpadding="1"
cellspacing="1" class="box">
<tr>
  
<td> እባክዎ መጀመሪያ እዚህ ጋር ፋይል ይምረጡ !!! </br> Please Select a file</td>
</tr>
<tr><td></td></tr>
<tr>
<td>
<input type="hidden" name="MAX_FILE_SIZE"value="16000000">
<input name="userfile" type="file" id="userfile"> 
</td>

<td><input name="upload"type="submit" class="box" id="upload" value=" Upload "></td>
<td width="400"> ከመረጡ በኃላ እዚህ ጋር ይጫኑ !</td>
</tr>
</table>
</form>
