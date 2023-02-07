<?php
include_once './config/config.php';

if(isset($_GET['con'])){
    if($_GET['con']== 'delete'){
        $id_perjalanan = mysqli_real_escape_string($conn, $_GET['id_perjalanan']);
        $query = "DELETE FROM catatan_perjalanan WHERE id_perjalanan='{$id_perjalanan}'";
        $sql = mysqli_query($conn, $query);
        if(!$sql){
            echo "<script>alert(Error: ".mysqli_error($conn).")</script>";
        }else{
            echo "
                <script>
                    alert('Data berhasil dihapus !');
                    window.location='?p=perjalanan';
                </script>
            ";
        }
    }
}