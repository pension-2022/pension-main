<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title><?= $title; ?></title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="telephone=no" name="format-detection" />
    <meta name="HandheldFriendly" content="true" />
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/master.css" />
    <!-- SWITCHER-->
    <link href="<?= base_url(); ?>/assets/plugins/switcher/css/switcher.css" rel="stylesheet" id="switcher-css"
        media="all" />
    <link href="<?= base_url(); ?>/assets/plugins/switcher/css/color1.css" rel="alternate stylesheet" title="color1"
        media="all" />
    <link href="<?= base_url(); ?>/assets/plugins/switcher/css/color2.css" rel="alternate stylesheet" title="color2"
        media="all" />
    <link href="<?= base_url(); ?>/assets/plugins/switcher/css/color3.css" rel="alternate stylesheet" title="color3"
        media="all" />
    <link href="<?= base_url(); ?>/assets/plugins/switcher/css/color4.css" rel="alternate stylesheet" title="color4"
        media="all" />
    <link href="<?= base_url(); ?>/assets/plugins/switcher/css/color5.css" rel="alternate stylesheet" title="color5"
        media="all" />
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>/dpbri.ico" />
    <script>
    (function(H) {
        H.className = H.className.replace(/\bno-js\b/, 'js')
    })(document.documentElement)
    </script>
</head>

<body>
    <!-- Loader-->
    <div id="page-preloader"><span class="spinner"></span></div>
    <!-- Loader end-->
    <div data-header="sticky" data-header-top="200" class="layout-theme animated-css">
        <?= $this->renderSection('root'); ?>
    </div>
    <?= $this->include('partials/side-nav'); ?>
    <?= $this->renderSection('script'); ?>
</body>

</html>