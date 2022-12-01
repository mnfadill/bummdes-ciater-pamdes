<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= APP_NAME ?> - <?= $judul ?></title>
    <link href="<?= base_url('sb-admin-2/') ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
        type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="<?= base_url('sb-admin-2/') ?>/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <?php partial('navbar', $aktif) ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php partial('topbar') ?>
                <div class="container-fluid">
                    <h1 class="h3 mb-4 text-gray-800">Profile Desa Ciater</h1>
                    <hr>
                    <div class="container">
                        <div class="row featurette">
                            <div class="col-md-5">
                                <img src="" class="featurette-image img-fluid mx-auto" width="500" height="500"
                                    alt="" />
                            </div>
                            <div class="col-sm order-md-1">
                                <h3 class="mt-3">Desa Ciater</h3>
                                <p class="lead" style="font-size: 20px">
                                    blavlavlalvalvalvlavlavlval

                                </p>
                            </div>
                        </div>

                    </div>
                </div>
                <?php partial('footer') ?>
            </div>
        </div>

        <script src="<?= base_url('sb-admin-2/') ?>/vendor/jquery/jquery.min.js"></script>
        <script src="<?= base_url('sb-admin-2/') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url('sb-admin-2/') ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="<?= base_url('sb-admin-2/') ?>/js/sb-admin-2.min.js"></script>
</body>

</html>