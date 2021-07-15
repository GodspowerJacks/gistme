<?php
session_start();
include 'db.php';

$msg = $_POST['msg'];
$name =$_SESSION['name'];

$sql = "INSERT into post(msg,name)value('$msg','$name')";
$result = $conn->query($sql);

header("Location: home.php");


?>