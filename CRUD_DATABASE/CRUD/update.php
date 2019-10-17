<?php
include_once "../Class/User.php";
include_once "../Class/StudentManager.php";
include_once "../Class/DBConnect.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $index = $_POST['id'];
    $image = $_FILES['image']['name'];
    $target = "../image/" . date('Y-m-d') . basename($image);
    $student = new User($_GET['name'], $_GET['phone'], $_GET['address'], $target);
    $studentManager = new StudentManager();
    $imageName = $studentManager->showStudentByIndex($index);
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    unlink('../image/'.$imageName->image);
    $studentManager->update($index, $student);
    header('Location: ../index.php');
}
?>