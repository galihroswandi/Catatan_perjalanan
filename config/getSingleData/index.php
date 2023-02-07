<?php
include_once './config/config.php';

$id_perjalanan = $_GET['id_perjalanan'];
$query = "SELECT * FROM catatan_perjalanan WHERE id_perjalanan='{$id_perjalanan}'";
$sql = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($sql);

if(isset($_POST)){
    var_dump(($_POST));
}