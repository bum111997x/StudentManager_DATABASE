<?php
include_once "../Class/User.php";
include_once "../Class/StudentManager.php";
include_once "../Class/DBConnect.php";

$index = $_GET['id'];
$studentManager = new StudentManager();
$infoStudent = $studentManager->showStudentByIndex($index);

$name = $infoStudent['name'];
$phone = $infoStudent['phone'];
$address = $infoStudent['address'];
$image = $infoStudent['image'];
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="update.php" enctype="multipart/form-data">
    <table>
        <tr><td><input type="text" name="id" value="<?php echo $index ?>"></td></tr>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name" value="<?php echo $name ?>"></td>
        </tr>
        <tr>
            <td>Phone:</td>
            <td><input type="text" name="phone" value="<?php echo $name ?>"></td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><input type="text" name="address" value="<?php echo $name ?>"></td>
        </tr>
        <tr>
            <td>Image:</td>
            <td><img src="<?php echo $image ?>"></td>
            <td><input type="file" name="image"></td>
        </tr>
        <tr>
            <td><input type="submit" value="update"></td>
        </tr>
    </table>

</form>

</body>
</html>
