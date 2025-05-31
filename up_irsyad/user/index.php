<?php
include '../service/database.php';
$result = mysqli_query($conn, "SELECT * FROM user");
?>

<h2>Daftar User</h2>
<a href="add.php">Tambah User</a>
<table border="1">
    <tr>
        <th>ID</th><th>Username</th><th>Email</th><th>Role</th><th>Aksi</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)): ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['username'] ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['role'] ?></td>
        <td>
            <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> | 
            <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin?')">Hapus</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
