<?php
include_once "User.php";
include_once "StudentManager.php";
include_once "DBConnect.php";

$studentManager = new StudentManager();
$index = $_GET['id'];

$name = $_GET['name'];
$phone = $_GET['phone'];
$address = $_GET['address'];
$studentManager->update($index,$name,$phone,$address);

header('Location: index.php');
?>