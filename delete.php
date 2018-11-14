<?php
include 'conn.php';

$id = $_GET['id'];


$q = " UPDATE `users` SET is_active=0 WHERE id=$id";

mysqli_query($conn,$q);
header('location:display.php');
?>