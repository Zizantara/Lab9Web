<?php
require 'views/header.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

switch ($page) {

    // halaman default
    case 'dashboard':
        include 'views/dashboard.php';
        break;

    // auth
    case 'login':
        include 'modules/auth/login.php';
        break;

    case 'logout':
        include 'modules/auth/logout.php';
        break;

    // user modules
    case 'user/list':
        include 'modules/user/list.php';
        break;

    case 'user/add':
        include 'modules/user/add.php';
        break;

    case 'user/edit':
        include 'modules/user/edit.php';
        break;

    case 'user/hapus':
        include 'modules/user/hapus.php';
        break;

    default:
        echo "<h2>404 - Halaman Tidak Ditemukan</h2>";
        break;
}

require 'views/footer.php';
?>
