<?php
include_once './config/config.php';

$id_perjalanan = $_GET['id_perjalanan'];
$query = "SELECT * FROM catatan_perjalanan WHERE id_perjalanan='{$id_perjalanan}'";
$sql = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($sql);

if(isset($_POST)){
    $tanggal = mysqli_real_escape_string($conn, $_POST['tanggal']);
    $jam = mysqli_real_escape_string($conn, $_POST['jam']);
    $lokasi = mysqli_real_escape_string($conn, $_POST['lokasi']);
    $suhu_tubuh = mysqli_real_escape_string($conn, $_POST['suhu-tubuh']);
}