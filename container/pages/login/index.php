<?php
include "./container/pages/templates/header.php";
?>
<div class="login-wrapper">
    <div class="wrapper py-2 px-3">
        <div class="header mt-1">
            <h1 class="text-center fs-1 my-4 fw-semibold">Login</h1>
        </div>
        <div class="body mt-4">
            <div class="container">
                <form action="./config/login/index.php" method="POST">
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
                                    <a type="submit" class="btn btn-primary py-2 px-3 fw-normal">Saya Pengguna Baru</a>
                                </div>
                                <div class="col-3">
                                    <button type="submit" class="btn btn-primary py-2 px-5 fw-normal">Login</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include "./container/pages/templates/footer.php";
?>