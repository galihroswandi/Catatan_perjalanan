<?php

if (!empty($_GET)) {
    switch ($_GET['p']) {
        case 'dashboard':
            if (!isset($_COOKIE['user'])) {
                include_once './pages/login/index.php';
            } else {
                include_once './pages/' . $_GET['p'] . '/index.php';
            }
            break;
        case 'isi_data':
            if (!isset($_COOKIE['user'])) {
                include_once './pages/login/index.php';
            } else {
                include_once './pages/' . $_GET['p'] . '/index.php';
            }
            break;
        case 'perjalanan':
            if (!isset($_COOKIE['user'])) {
                include_once './pages/login/index.php';
            } else {
                include_once './pages/' . $_GET['p'] . '/index.php';
            }
            break;
        case 'signup':
            if (!isset($_COOKIE['user'])) {
                include_once './pages/login/index.php';
            } else {
                include_once './pages/' . $_GET['p'] . '/index.php';
            }
            break;
        default:
            echo '<h2>Page Not Found</h2>';
    }
} else {
    include_once './pages/login/index.php';
}
