<?php
 session_start();

  if(isset($_POST['logout'])){
    session_unset();
    session_destroy();
    header('location:index.php');
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
     
     <h3>Selamat Datang <?php echo  $_SESSION ["username"] ?></h3>
     <form action="dashboard.php" method="POST">
        <button type="submit" name="logout">Logout</button>
     </form>
</body>
</html>