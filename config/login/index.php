<?php
include_once "./../config.php";

if ($_POST) {

    $nik = mysqli_real_escape_string($conn, $_POST['nik']);
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);

    $query = mysqli_query($conn, "SELECT * FROM users WHERE NIK = '{$nik}' AND nama_lengkap = '{$nama}'");
}
