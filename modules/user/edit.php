<?php
require 'config/database.php';

$id = $_GET['id'];

$find = mysqli_query($koneksi, "SELECT * FROM users WHERE id='$id'");
$data = mysqli_fetch_assoc($find);
?>

<h2>Edit User</h2>

<form action="index.php?page=user/update" method="POST">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">

    Nama: <br>
    <input type="text" name="nama" value="<?= $data['nama'] ?>"><br><br>

    Email: <br>
    <input type="text" name="email" value="<?= $data['email'] ?>"><br><br>

    <button type="submit">Update</button>
</form>
