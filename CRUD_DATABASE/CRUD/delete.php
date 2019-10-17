<?php
include_once "../Class/StudentManager.php";
include_once "../Class/DBConnect.php";
include_once "../Class/User.php";

$index = $_GET['id'];

$studentManager = new StudentManager();
$imageName = $studentManager->showStudentByIndex($index);

unlink('../image/'.$imageName->image);
$studentManager->delete($index);

header('Location: ../index.php');

?>