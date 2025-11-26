<?php
require 'views/header.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

switch ($page) {

    /** VIEW HALAMAN */
    case 'dashboard':
    case 'home':
        include 'views/dashboard.php';
        break;

    case 'about':
        include 'views/about.php';
        break;

    /** MODUL USER */
    case 'user/list':
        include 'modules/user/list.php';
        break;

    case 'user/add':
        include 'modules/user/add.php';
        break;

    case 'user/insert':   // <--- PROSES TAMBAH USER
        include 'modules/user/insert.php';
        break;

    case 'user/edit':
        include 'modules/user/edit.php';
        break;

    case 'user/update':   // <--- PROSES UPDATE USER
        include 'modules/user/update.php';
        break;

    case 'user/delete':
        include 'modules/user/delete.php';
        break;

    default:
        echo "<h2>404 - Halaman Tidak Ditemukan</h2>";
        break;
}

require 'views/footer.php';
?>
