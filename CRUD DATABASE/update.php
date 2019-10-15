<?php
include_once "User.php";
include_once "StudentManager.php";
include_once "DBConnect.php";

$studentManager = new StudentManager();

$index = $_GET['id'];

$name = $_GET['name'];
$phone = $_GET['phone'];
$address = $_GET['address'];

$studentInfo = new User($name,$phone,$address);
$studentManager->update($index,$studentInfo);

header('Location: index.php');
?>