<?php
include_once("config.php");

if(isset($_POST['update'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $result = mysqli_query($mysqli,"UPDATE users SET nama='$name',email='$email',mobile='$mobile' WHERE id='$id'");
    header("Location:index.php");
}
$id = $_GET['id'];
$result=mysqli_fetch_array(mysqli_query($mysqli,"SELECT * FROM users WHERE id='$id'"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Data</title>
</head>
<body>
        <a href="index.php">Home/View Users</a>
        <form action="edit.php" method="post">
            <table>
            <?php
            echo
            "<tr>
                <td>
                    <label>nama</label>
                    <input type='text' name='name' value=".$result['nama'].">
                </td>
            </tr>
            <tr>
                <td>
                    <label>email</label>
                    <input type='text' name='email' value=".$result['email'].">
                </td>
            </tr>
            <tr>
                <td>
                    <label>mobile</label>
                    <input type='text' name='mobile' value=".$result['mobile'].">
                </td>
            </tr>
            <tr>
                <td>
                    <input type='hidden' name='id' value=".$result['id'].">
                </td>
            </tr>
            <tr>
                <td>
                    <input type='submit' name='update' value='update'>
                </td>
            </tr>";
            ?>
            </table>
        </form>
</body>
</html>