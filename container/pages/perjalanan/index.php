<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peduli Diri | Perjalanan</title>

    <!-- My Css -->
    <link rel="stylesheet" href="perjalanan.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>
    <section>
        <nav class="navbar">
            <div class="container">
                <div class="navbar-brand d-flex align-items-center">
                    <img src="../../../assets/img/profile-dummy.svg" alt="Peduli Diri">
                    <p class="d-flex flex-column fs-4 fw-bold ms-3">
                        Peduli Diri
                        <span class="fs-6 fw-light">Catatan Perjalanan</span>
                    </p>
                </div>
                <div class="nav-link">
                    <ul class="d-flex gap-5 me-3">
                        <li>
                            <a href="./../dashboard/" class="text-decoration-none">Beranda</a>
                        </li>
                        <li>
                            <a href="./index.php" class="text-decoration-none">Perjalanan</a>
                            <div></div>
                        </li>
                        <li>
                            <a href="./../isi_data/" class="text-decoration-none">Isi Data</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            <div class="container">
                <div class="table-wrapper mt-5">
                    <div class="header px-auto">
                        <h1 class="text-center">Catatan Perjalanan</h1>
                    </div>
                    <div class="main mt-5 pb-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-6 d-flex justify-content-start align-items-center">
                                    <form action="#">
                                        <select name="urutkan" id="urutkan" class="ms-5 py-2 px-3 text-white">
                                            <option value="null">Urut Berdasarkan</option>
                                            <option value="null">Tanggal</option>
                                            <option value="null">Waktu</option>
                                            <option value="null">Suhu Tubuh</option>
                                        </select>
                                    </form>
                                </div>
                                <div class="col-6 d-flex align-items-center justify-content-end">
                                    <a href="../isi_data/" class="me-5 btn text-white py-2 px-4 d-grid gap-2 d-flex">
                                        <img src="../../../assets/img/tambah.svg" alt="">
                                        <span>Isi Catatan Perjalanan</span>
                                    </a>
                                </div>
                            </div>
                            <div class="table mt-5">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="px-5 py-2">No</th>
                                            <th class="px-5 py-2">Tanggal</th>
                                            <th class="px-5 py-2">Waktu</th>
                                            <th class="px-5 py-2">Suhu Tubuh</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="px-5 py-2">1</td>
                                            <td class="px-5 py-2">20/90/2022</td>
                                            <td class="px-5 py-2">8.29</td>
                                            <td class="px-5 py-2">35</td>
                                        </tr>
                                        <tr>
                                            <td class="px-5 py-2">1</td>
                                            <td class="px-5 py-2">20/90/2022</td>
                                            <td class="px-5 py-2">8.29</td>
                                            <td class="px-5 py-2">35</td>
                                        </tr>
                                        <tr>
                                            <td class="px-5 py-2">1</td>
                                            <td class="px-5 py-2">20/90/2022</td>
                                            <td class="px-5 py-2">8.29</td>
                                            <td class="px-5 py-2">35</td>
                                        </tr>
                                        <tr>
                                            <td class="px-5 py-2">1</td>
                                            <td class="px-5 py-2">20/90/2022</td>
                                            <td class="px-5 py-2">8.29</td>
                                            <td class="px-5 py-2">35</td>
                                        </tr>
                                        <tr>
                                            <td class="px-5 py-2">1</td>
                                            <td class="px-5 py-2">20/90/2022</td>
                                            <td class="px-5 py-2">8.29</td>
                                            <td class="px-5 py-2">35</td>
                                        </tr>
                                        <tr>
                                            <td class="px-5 py-2">1</td>
                                            <td class="px-5 py-2">20/90/2022</td>
                                            <td class="px-5 py-2">8.29</td>
                                            <td class="px-5 py-2">35</td>
                                        </tr>
                                        <tr>
                                            <td class="px-5 py-2">1</td>
                                            <td class="px-5 py-2">20/90/2022</td>
                                            <td class="px-5 py-2">8.29</td>
                                            <td class="px-5 py-2">35</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>