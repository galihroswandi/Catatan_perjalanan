<?php
include_once './config/config.php';

$id_user = mysqli_real_escape_string($conn, $_COOKIE['user']);
$query = "SELECT * FROM catatan_perjalanan WHERE id_user='{$id_user}'";
$sql = mysqli_query($conn, $query);
$data = [];
while ($result = mysqli_fetch_assoc($sql)) {
    $data[] = $result;
}
