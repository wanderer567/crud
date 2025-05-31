<?php
include '../service/database.php';
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM user WHERE id = $id");
$user = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    $query = "UPDATE user SET username='$username', email='$email', role='$role' WHERE id=$id";
    mysqli_query($conn, $query);
    header('Location: index.php');
}
?>

<h2>Edit User</h2>
<form method="post">
    Username: <input type="text" name="username" value="<?= $user['username'] ?>"><br>
    Email: <input type="email" name="email" value="<?= $user['email'] ?>"><br>
    Role: 
    <select name="role">
        <option value="user" <?= $user['role']=='user'?'selected':'' ?>>User</option>
        <option value="admin" <?= $user['role']=='admin'?'selected':'' ?>>Admin</option>
    </select><br>
    <button type="submit">Update</button>
</form>
