<?php
include_once "../Class/User.php";
include_once "../Class/StudentManager.php";
include_once "../Class/DBConnect.php";

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $index = $_GET['id'];
    $image = $_FILES['image']['name'];
    var_dump($image);
    die();
    $target = "../image/" . date('Y-m-d') . basename($image);
    $student = new User($_GET['name'], $_GET['phone'], $_GET['address'], $target);
    $studentManager = new StudentManager();
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    $studentManager->update($index, $student);
    header('Location: ../index.php');
}
?>