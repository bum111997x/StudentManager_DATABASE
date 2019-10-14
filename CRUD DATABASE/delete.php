<?php
include_once "StudentManager.php";
include_once "DBConnect.php";
include_once "User.php";

$index = $_GET['id'];

$studentManager = new StudentManager();
$studentManager->delete($index);

header('Location: index.php');

?>