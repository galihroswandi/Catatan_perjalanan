<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peduli Diri | Signup</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="login-wrapper">
        <div class="wrapper py-2 px-3">
            <div class="header mt-1">
                <h1 class="text-center fs-1 my-4 fw-semibold">Daftar Pengguna</h1>
            </div>
            <div class="body mt-4">
                <div class="container">
                    <form action="./../../../config/signup/index.php" method="POST">
                        <div class="mb-4 d-flex flex-column  align-items-center">
                            <input class="px-4 py-3" id="inputNik" type="text" placeholder="NIK" name="nik" autocomplete="off" />
                        </div>
                        <div class="mb-4 d-flex flex-column  align-items-center">
                            <input class="px-4 py-3" id="inputNik" type="text" placeholder="Nama Lengkap" name="nama" autocomplete="off" />
                        </div>
                        <div class="mb-4 d-flex flex-column  align-items-center justify-content-between mt-5">
                            <div class="container-fluid">
                                <div class="row mx-1">
                                    <div class="col-8">
                                        <a href="../../../index.php" type="submit" class="btn btn-primary py-2 px-5 fw-normal">Login</a>
                                    </div>
                                    <div class="col-3">
                                        <button type="submit" class="btn btn-primary py-2 px-5 fw-normal">Daftar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>