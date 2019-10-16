<?php
include_once "../Class/User.php";
include_once "../Class/StudentManager.php";
include_once "../Class/DBConnect.php";

$index = $_GET['id'];
$studentManager = new StudentManager();
$displayInfo = $studentManager->showStudentByIndex($index);

$name = $displayInfo['name'];
$phone = $displayInfo['phone'];
$address = $displayInfo['address'];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body background="../image/giphy.gif">
<form action="update.php" method="get">
    <center>
        <table>
            <tr><h1>Quản lý sinh viên</h1></tr>
            <tr style="display: none">
                <td><input type="text" name="id" value="<?php echo $index ?>"></td>
            </tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" style="border-radius: 10px" value="<?php echo $name ?>"></td>
            </tr>
            <tr>
                <td>Phone:</td>
                <td><input type="text" name="phone" style="border-radius: 10px" value="<?php echo $phone ?>"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" name="address" style="border-radius: 10px" value="<?php echo $address ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input class="btn " type="submit" value="update" style="color: #CD214F"></td>
            </tr>
        </table>
    </center>
</form>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</html>
