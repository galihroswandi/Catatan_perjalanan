<?php
if(isset($_GET['id_perjalanan'])){
    include "./config/getSingleData/index.php";
}else{
    include_once './config/isi_data/index.php';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peduli Diri | Perjalanan</title>

    <!-- My Css -->
    <link rel="stylesheet" href="./pages/isi_data/isi_data.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

<section>
    <nav class="navbar">
        <div class="container">
            <div class="navbar-brand d-flex align-items-center">
                <img src="./assets/img/profile-dummy.svg" alt="Peduli Diri">
                <p class="d-flex flex-column fs-4 fw-bold ms-3">
                    Peduli Diri
                    <span class="fs-6 fw-light">Catatan Perjalanan</span>
                </p>
            </div>
            <div class="nav-link">
                <ul class="d-flex gap-5 me-3">
                    <li>
                        <a href="?p=dashboard" class="text-decoration-none">Beranda</a>
                    </li>
                    <li>
                        <a href="?p=perjalanan" class="text-decoration-none">Perjalanan</a>
                    </li>
                    <li>
                        <a href="?p=isi_data" class="text-decoration-none">Isi Data</a>
                        <div></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="container">
            <div class="form-wrapper mt-5 pb-4">
                <div class="header px-auto">
                    <h1 class="text-center"><?=!isset($_GET['id_perjalanan']) ? 'Isi' : 'Ubah';?> Catatan Perjalanan</h1>
                </div>
                <div class="main">
                    <form action="#" method="POST">
                        <div class="d-flex flex-column align-items-center d-grid gap-3">
                            <div class="form-input">
                                <input type="date" name="tanggal" id="tanggal" placeholder="Tanggal" class="py-3 px-4" autocomplete="off" value="<?=!isset($_GET['id_perjalanan']) ? null : $result['tanggal']?>">
                            </div>
                            <div class="form-input">
                                <input type="time" name="jam" id="jam" placeholder="Jam" class="py-3 px-4"  value="<?=!isset($_GET['id_perjalanan']) ? null : $result['waktu']?>">
                            </div>
                            <div class="form-input">
                                <input type="text" name="lokasi" id="lokasi" placeholder="Lokasi Yang Dikunjungi" class="py-3 px-4" autocomplete="off"  value="<?=!isset($_GET['id_perjalanan']) ? null : $result['lokasi']?>">
                            </div>
                            <div class="form-input">
                                <input type="text" name="suhu-tubuh" id="suhu-tubuh" placeholder="Suhu Tubuh" class="py-3 px-4" autocomplete="off"  value="<?=!isset($_GET['id_perjalanan']) ? null : $result['suhu_tubuh']?>">
                            </div>
                            <div class="form-input mt-4 d-flex d-grid gap-3">
                                <button type="submit" class="btn text-white py-2 px-4"><?=!isset($_GET['id_perjalanan']) ? 'Simpan' : 'Ubah'?></button>
                                <a href="?p=perjalanan" class="btn py-2 px-4 text-white">Batal</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</section>

</html>