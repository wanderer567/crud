<?php
include "service/database.php";
session_start();

if(isset($_SESSION["is_login"])){
     header("location: dashboard.php");  
}
   


if (isset($_POST['login'])){
    $username = $_POST ['username']; 
    $password = $_POST ['password'];

    $conn = "SELECT * FROM user WHERE username='$username' AND password MD5='$password'";

    $result = $db->query($sql) ;

    if($result->num_rows > 0) {
      $data = $result->fetch_assoc();   
      $_SESSION ["username"] = $data ["username"];
      $_SESSION ["is_login"] = true ;

     header("location: dashboard.php");
    }else {
        echo "akun tidak di temukan";
    }
 }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "layout/header.html" ?>
    <form action="login.php" method="POST">
        <input type="text" placeholder="username" name ="username">
         <input type="password" placeholder="password" name ="password">
         <button  type="submit" name="login">masuk sekarang</button>
    </form>
     <?php include "layout/footer.html" ?>
 
</body>
</html>