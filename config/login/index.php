<?php
include_once "./../config.php";
session_start();

if ($_POST) {

    $nik = mysqli_real_escape_string($conn, $_POST['nik']);
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);

    $sql = mysqli_query($conn, "SELECT * FROM users WHERE NIK = '{$nik}' AND nama_lengkap = '{$nama}'");

    // if (mysqli_num_rows($query) > 0) {
    //     $dataUser = mysqli_fetch_assoc($query);
    //     $_SESSION['id_user'] = $dataUser['id_user'];
    //     echo "<script>
    //         document.location.href = './../../container/pages/dashboard/index.php';
    //     </script>";
    // } else {
    //     echo "<script>
    //         document.location.href = './../../index.php';
    //     </script>";
    // }

    if ($sql->num_rows > 0) {
        $row = mysqli_fetch_assoc($sql);
        $result['status'] = '1';
        $result['message'] = "Login berhasil";
        $result['hash'] = hash('sha1', $row['id_user']);
    } else {
        $result['status'] = '0';
        $result['msg'] = "username / password salah";
    }

    echo $nik;
}
