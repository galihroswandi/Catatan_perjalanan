<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peduli Diri | Dashboard</title>

    <!-- My Css -->
    <link rel="stylesheet" href="./pages/dashboard/dashboard.css">

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
                            <div></div>
                        </li>
                        <li>
                            <a href="?p=perjalanan" class="text-decoration-none">Perjalanan</a>
                        </li>
                        <li>
                            <a href="?p=isi_data" class="text-decoration-none">Isi Data</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            <div class="container">
                <div class="row">
                    <div class="col-6 my-auto">
                        <h1 class="d-flex flex-column flex-start fw-bold">Peduli Diri <span class="fw-normal">Catatan Perjalanan</span></h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus expedita saepe in veniam, velit nostrum labore aspernatur voluptatibus enim deleniti at libero quam mollitia! Quos dignissimos cupiditate incidunt inventore cumque sed ratione, doloremque nobis veritatis neque est earum cum aliquam obcaecati. Molestiae quas vel recusandae corporis quibusdam doloribus cupiditate? Sunt!</p>
                        <a href="./../perjalanan/" class="btn text-white py-2 px-4 fs-6">Explore</a>
                    </div>
                    <div class="col-6">
                        <img src="./assets/img/flat-design.svg" alt="">
                    </div>
                </div>
            </div>
        </main>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>