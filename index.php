<?php
include_once("config.php");
$result = mysqli_query($mysqli,"SELECT * FROM users ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <a href="add.php">Add new user</a>
    <table border=1>
        <tr>
            <th>Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Update</th>
        </tr>
        <?php
        while($user_data = mysqli_fetch_array($result)){
            echo "<tr>
                    <td>".$user_data['nama']."</td>
                    <td>".$user_data['mobile']."</td>
                    <td>".$user_data['email']."</td>
                    <td> 
                        <a href='edit.php?id=$user_data[id]'>Edit</a>
                        <a href='delete.php?id=$user_data[id]'>Delete</a>
                    </td>
                </tr>";
        }
        ?>

    </table>
</body>
</html>