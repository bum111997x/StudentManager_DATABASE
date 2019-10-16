<?php
include_once "../Class/StudentManager.php";
include_once "../Class/DBConnect.php";
include_once "../Class/User.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $student = new User($name, $phone, $address);
    $studentManager = new StudentManager();
    $studentManager->add($student);

    header('Location: ../index.php');

}


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
<body background="../image/giphy.gif" style="text-align: center">
<div style="display: inline-block">
    <form method="post">

        <table>
            <tr><h1>Quản lý sinh viên </h1></tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" style="border-radius: 10px"></td>
            </tr>
            <tr>
                <td>Phone:</td>
                <td><input type="text" name="phone" style="border-radius: 10px"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" name="address" style="border-radius: 10px"></td>
            </tr>
            <tr>
                <td colspan="2"><input class="btn " type="submit" value="submit" style="color: #CD214F"></td>
            </tr>
        </table>

    </form>
</div>
</body>
</html>
