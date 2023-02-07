<?php

if (!empty($_GET)) {
    if (isset($_GET['p'])) {
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
                include_once './pages/' . $_GET['p'] . '/index.php';
                break;
            default:
                echo '<h2>Page Not Found</h2>';
        }
    }

    if (isset($_GET['con'])) {
        switch ($_GET['con']) {
            case 'delete':
                if (!isset($_COOKIE['user'])) {
                    include_once './pages/login/index.php';
                } else {
                    include_once './config/' . $_GET['con'] . '/index.php';
                }
                break;
            case 'logout':
                if (!isset($_COOKIE['user'])) {
                    include_once './pages/login/index.php';
                } else {
                    include_once './config/' . $_GET['con'] . '/index.php';
                }
                break;
        }
    }
} else {
    include_once './pages/login/index.php';
}
