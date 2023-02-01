<?php
include_once "./config/config.php";

if ($_POST) {

    $nik = mysqli_real_escape_string($conn, $_POST['nik']);
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);

    $sql = mysqli_query($conn, "SELECT * FROM users WHERE NIK = '{$nik}' AND nama_lengkap = '{$nama}'");

    if (mysqli_num_rows($sql) > 0) {
        $dataUser = mysqli_fetch_assoc($sql);
        echo "<script>
            document.cookie = 'user=" . $dataUser['id_user'] . "'
            document.location.href = '?p=dashboard';
        </script>";
    } else {
        echo "<script>
            alert('User tidak ditemukan !');
            document.location.href = './';
        </script>";
    }
}
