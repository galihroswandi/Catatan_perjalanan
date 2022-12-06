<?php
include_once "./../config.php";

$nik = mysqli_real_escape_string($conn, $_POST['nik']);
$nama = mysqli_real_escape_string($conn, $_POST['nama']);

$sql = mysqli_query($conn, "INSERT INTO users VALUES ('', '{$nik}', '{$nama}')");
if ($sql) {
    echo "<script>
        alert('Data Berhasil Ditambahkan !');
        document.location.href = '../../container/pages/signup/index.php';
    </script>";
}
