<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Head -->
    <?php include 'app/view/layout/head.php' ?>
    <!-- \Head -->
</head>

<body class="bg-info">
    <!-- Controller -->
    <?php include 'app/controller/auth/login.php' ?>
    <!-- \Controller -->

    <!-- Main -->
    <div class="container-fluid p-0">
        <!-- Row start -->
        <div class="row g-0">
            <!-- Row start -->
            <div class="row align-items-center justify-content-center">
                <div class="col-md-4">
                    <form method="post" class="my-5 needs-validation" novalidate>
                        <div class="bg-white py-3 px-4 rounded-4 shadow">
                            <div class="login-form">
                                <a href="./" class="mb-3 d-flex">
                                    <img src="assets/imgs/logo smann.png" class="mt-3 mx-auto login-logo" width="100" height="200" alt="Logo" />
                                </a>
                                <h3 class="mt-2 text-center fw-bolder text-uppercase"><?= $dataProject['project'] ?></h3>
                                <h5 class="text-center mb-4 text-muted">Masukan Username dan Password</h5>
                                <div class="mb-3">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control" placeholder="Masukan Username" name="username" required />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" placeholder="Masukan Password" name="password" required />
                                    </div>
                                </div>
                                <div class="d-grid py-3 mt-3 mb-2 gap-3">
                                    <button type="submit" name="login" class="btn btn-lg btn-primary fw-bolder">
                                        LOGIN
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Row end -->
        </div>
    </div>
    <!-- Row end -->
    </div>
    <!-- Container end -->
    <!-- \Main -->

    <!-- Script -->
    <?php include 'app/view/layout/script.php' ?>
    <!-- \Script -->

</body>

</html>