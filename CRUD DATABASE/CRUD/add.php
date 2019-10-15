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
}

header('Location: ../index.php');