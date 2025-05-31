<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "irsyad";

$conn = mysqli_connect ($hostname, $username, $password, $database_name);

if ($conn->connect_error){
    echo "Akun berhasil di bikin";
    die ("error!");
}

?>