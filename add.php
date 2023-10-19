<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>
<body>
    <a href="index.php">Home/View Users</a>
    <form action="add.php" method="post" name="form1">
        <table>
            <tr><td><input type="text" name="name" placeholder="Name"></td></tr>
            <tr><td><input type="text" name="email" placeholder="Email"></td></tr>
            <tr><td><input type="text" name="mobile" placeholder="Mobile"></td></tr>
            <tr><td><input type="submit" name="submit" ></td></tr>
        </table>
    </form>
    <?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        include_once("config.php");
        $result = mysqli_query($mysqli, "INSERT INTO users(nama,email,mobile) VALUES('$name','$email','$mobile')");
        header("Location:index.php");
    }
    ?>
</body>
</html>