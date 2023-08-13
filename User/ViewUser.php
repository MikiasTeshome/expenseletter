
<?php
include_once '../connection.php';
$sql="SELECT * FROM user";
$res=mysqli_query($con,$sql) or die(mysqli_error($con));
?>
<html>
<head>
<style type="text/css">
  #viewdata table {
    border: 1px solid #aaa;
    border-collapse: collapse;
    width: 100%;
  }

  #viewdata th {
    background: #aaa;
    padding: 8px;
    text-align: left;
  }

  #viewdata td {
    background: #efefef;
    padding: 8px;
    text-align: left;
  }

  #viewdata th,
  #viewdata td {
    padding: 8px;
    text-align: left;
  }

  #viewdata th:first-child,
  #viewdata td:first-child {
    padding-left: 16px;
  }

  #viewdata th:last-child,
  #viewdata td:last-child {
    padding-right: 16px;
  }

  #viewdata tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  #viewdata tr:hover {
    background-color: #ddd;
  }
</style>
<style type="text/css">
#viewdata table{
    border:1px solid #aaa;
}
#viewdata th{background:#aaa;}
#viewdata td{background:#efefef;}
#viewdata th,td{padding:5px;text-align:left;}
</style>
<table id="viewdata">
<tr>
<th>#</th>
<th>First name</th>
<th>Last name</th>
<th>Phone number</th>
<th>Email Address</th>
<th>User Type</th>
<th colspan=2>Action</th>
</tr>
<?php
while($row=mysqli_fetch_assoc($res))
{

echo "<tr><td>";
echo $row['id'];
echo "</td><td>";
echo $row['fname'];
echo "</td><td>";
echo $row['lname'];
echo "</td><td>";
echo $row['phone'];
echo "</td><td>";
echo $row['email'];
echo "</td><td>";
echo $row['type'];
echo "
<td><a href=\"User/delete.php?data=".$row['id']."\">delete</a></td>
<td><a href=\"#\" onclick=\"getPage('User/Edit.php?data=".$row['id']."')\">edit</a></td></tr>";
}
mysqli_close($con);
?>
</table>
