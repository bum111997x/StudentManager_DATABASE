<?php
include_once "Class/StudentManager.php";
include_once "Class/DBConnect.php";
include_once "Class/User.php";

$studentManager = new StudentManager();
$list = $studentManager->getAll();

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
<body background="image/giphy.gif" style="text-align: center">
<div style="display: inline-block">
    <form action="CRUD/add.php" method="post">

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
<h2 style="text-align: center">Danh sách sinh viên </h2>

<br>

<table class="table table-bordered">
    <tr class="bg-primary">
        <th scope="col" style="text-align: center">STT</th>
        <th scope="col" style="text-align: center">Name</th>
        <th scope="col" style="text-align: center">Phone</th>
        <th scope="col" style="text-align: center">Address</th>
        <th scope="col" style="text-align: center">Delete</th>
        <th scope="col" style="text-align: center">Edit</th>
    </tr>
    <tbody>
    <?php
    foreach ($list as $key => $item) {
        ?>
        <tr>
            <td class="table-primary" style="text-align: center"><?php echo ++$key ?></td>
            <td class="table-secondary" style="text-align: center"><?php echo $item->name ?></td>
            <td class="table-success" style="text-align: center"><?php echo $item->phone ?></td>
            <td class="table-danger" style="text-align: center"><?php echo $item->address ?></td>
            <td class="table-warning" style="text-align: center"><a href="CRUD/delete.php?id=<?php echo $item->id ?>"
                                                                    onclick="return confirm('Are you sure??????')">Delete</a>
            </td>
            <td class="table-info"><a href="CRUD/edit.php?id=
            <?php echo $item->id ?>" onclick="return confirm('Are you sure??????')">Edit</a>
            </td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
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
