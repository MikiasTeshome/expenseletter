<?php
session_start();
include_once '../connection.php';
$sql = "SELECT * FROM upload";
$res = mysqli_query($con, $sql) or die(mysqli_error($con));
?>

<!DOCTYPE html>
<html>
<head>
    <title>ወጪ ደብዳቤዎች</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #333;
            font-size: 24px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #aaa;
            color: #fff;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .action-links {
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 3px;
            color: #fff;
        }

        .delete-link {
            background-color: #e74c3c;
        }

        .download-link {
            background-color: #3498db;
        }
    </style>
</head>
<body>
    <h1>ወጪ ደብዳቤዎች</h1>
    <table>
        <tr>
            <!-- <th>Id</th> -->
            <th>Name</th>
            <th>Size</th>
            <th>Date</th>
			
            <th colspan="2">Action</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($res)) {
            echo "<tr>";
            // echo "<td>{$row['id']}</td>";
            echo "<td>{$row['name']}</td>";
            echo "<td>" . number_format(($row['size'] / 1024), 2) . " Kb</td>";
            
            $uploadDate = ($row['upload_date'] == "0000-00-00") ? "N/A" : date('F j, Y', strtotime($row['upload_date']));
            echo "<td>{$uploadDate}</td>"; // Display "N/A" if the date is "0000-00-00"
            
            $path = ($_SESSION['type'] == 'Admin') ? "./" : "../";
            echo "<td><a href='{$path}View/delete.php?data={$row['id']}' class='action-links delete-link'>Delete</a></td>";
            echo "<td><a href='{$path}View/download.php?id={$row['id']}' class='action-links download-link'>Download</a></td>";
            echo "</tr>";
        }
        mysqli_close($con);
        ?>
    </table>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.delete-link').click(function(e) {
                e.preventDefault();
                var loc = $(this).attr('href');
                
                // Display confirmation dialog
                if (confirm("Are you sure you want to delete this file?")) {
                    $.ajax({
                        url: loc,
                        error: function(err) {
                            alert("An error occurred");
                            console.log(err);
                        },
                        success: function(resp) {
                            if (resp == 1) {
                                alert("File successfully deleted");
                                location.reload();
                            }
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>