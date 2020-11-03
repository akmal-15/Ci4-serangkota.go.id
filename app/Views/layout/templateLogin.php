<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title ?> | CMS Serang</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <link href="<?= IMAGE_DIR ?>favicon.png" rel="icon">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= ADMIN_PLUGINS; ?>fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= ADMIN_PLUGINS; ?>icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="/index2.html"><b>Serang </b>CMS</a>
        </div>
        <!-- /.login-logo -->
        <?= $this->renderSection('content'); ?>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= ADMIN_PLUGINS; ?>jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= ADMIN_PLUGINS; ?>bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/dist/js/adminlte.min.js"></script>

</body>

</html>