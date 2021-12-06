<!DOCTYPE html>
<html lang="<?= $locale ?>">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= lang('Blog.title') ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo base_url() ?>/assets/img/favicon.png" rel="icon">
    <link href="<?php echo base_url() ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url() ?>/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url() ?>/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Arsha - v4.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <header class="text-center mt-4">
        <h1><?= lang('Blog.title') ?></h1>
<?php foreach ($supportedLocales as $supLocale): ?>
        <?= anchor($supLocale, lang("Blog.languageName_{$supLocale}"), ['class' => 'mx-3'])?>
<?php endforeach; ?>
    </header>

    <?= $this->renderSection('content'); ?>

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url() ?>/assets/vendor/aos/aos.js"></script>
    <script src="<?php echo base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/vendor/php-email-form/validate.js"></script>
    <script src="<?php echo base_url() ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/vendor/waypoints/noframework.waypoints.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url() ?>/assets/js/main.js"></script>

</body>

</html>