<?php
require 'config/database.php';

$query = mysqli_query($koneksi, "SELECT * FROM users");
?>
<h2>Daftar User</h2>

<a href="index.php?page=user/tambah" class="btn">Tambah User</a>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($query)) : ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['email']; ?></td>
            <td>
                <a href="index.php?page=user/edit&id=<?= $row['id']; ?>">Edit</a>
                |
                <a href="index.php?page=user/hapus&id=<?= $row['id']; ?>" onclick="return confirm('Hapus data?')">Hapus</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>
