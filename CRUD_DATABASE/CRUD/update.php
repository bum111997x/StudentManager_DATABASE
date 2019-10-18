<?php
include_once "../Class/User.php";
include_once "../Class/StudentManager.php";
include_once "../Class/DBConnect.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $index = $_POST['id'];
    $studentManager = new StudentManager();
    $imageName = $studentManager->showStudentByIndex($index);
    $image = $imageName->image;
    if ($_FILES['image']['error'] === 4) {
        $student = new User($_POST['name'], $_POST['phone'], $_POST['address'], $image);
        $studentManager->update($index, $student);
    } else if ($_FILES['image']['error'] === 0) {
        unlink('../image/' . $imageName->image);
        $image = $_FILES['image']['name'];
        $target = "../image/" . date('Y-m-d') . basename($image);
        $student = new User($_POST['name'], $_POST['phone'], $_POST['address'], $target);
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
        $studentManager->update($index, $student);
    }
    header('Location: ../index.php');
}
?>