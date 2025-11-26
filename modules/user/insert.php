<?php
require 'config/database.php';

$nama     = $_POST['nama'];
$email    = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

mysqli_query($koneksi, "INSERT INTO users (nama, email, username, password)
VALUES ('$nama', '$email', '$username', '$password')");

header("Location: index.php?page=user/list");
exit;
?>
