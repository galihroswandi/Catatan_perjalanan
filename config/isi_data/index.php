<?php
session_start();
include_once "./../config.php";

if ($_POST) {

    $tanggal = mysqli_real_escape_string($conn, $_POST['tanggal']);
    $jam = mysqli_real_escape_string($conn, $_POST['jam']);
    $lokasiDikunjungi = mysqli_real_escape_string($conn, $_POST['lokasi']);
    $suhu_tubuh = mysqli_real_escape_string($conn, $_POST['suhu-tubuh']);
    $id_user = mysqli_real_escape_string($conn, $_SESSION['user']);

    $query = "INSERT INTO catatan_perjalanan VALUES('', '{$id_user}', '{$tanggal}', '{$jam}', '{$lokasiDikunjungi}', '{$suhu_tubuh}')";

    $sql = mysqli_query($conn, $query);
    if ($sql) {
        echo "<script>
                alert('Data Berhasil Ditambahkan !');
                location.href = '../../container/pages/perjalanan/index.php';
            </script>";
    }
}
