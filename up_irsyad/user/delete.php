<?php
include '../service/database.php';
$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM user WHERE id = $id");
header('Location: index.php');
?>
