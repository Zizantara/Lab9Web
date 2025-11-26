<?php
require 'config/database.php';

$id       = $_POST['id'];
$nama     = $_POST['nama'];
$email    = $_POST['email'];

mysqli_query($koneksi,
    "UPDATE users SET 
        nama='$nama',
        email='$email'
    WHERE id='$id'"
);

header("Location: index.php?page=user/list");
exit;
?>
