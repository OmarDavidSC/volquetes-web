<?php
// poner rutas
$page = $_GET['page'] ?? 'home';
$isProducts = $page === 'productos';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Maquinas Peru</title>

    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css">

    <!-- CSS General -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- CSS de cada componente -->
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/hero.css">
    <link rel="stylesheet" href="assets/css/brands.css">
    <link rel="stylesheet" href="assets/css/featured.css">
    <link rel="stylesheet" href="assets/css/services.css">
    <link rel="stylesheet" href="assets/css/events.css">
    <link rel="stylesheet" href="assets/css/branches.css">
    <link rel="stylesheet" href="assets/css/why-us.css">
    <link rel="stylesheet" href="assets/css/quote.css">
    <link rel="stylesheet" href="assets/css/whatsapp-float.css">
    <link rel="stylesheet" href="assets/css/partials/login-modal.css">
    <link rel="stylesheet" href="assets/css/partials/productos-page.css">
    <link rel="stylesheet" href="assets/css/about.css">
    <link rel="stylesheet" href="assets/css/shared-alerts.css">
    <link rel="stylesheet" href="assets/css/widzard.css">

</head>

<body>

    <?php require 'components/shared/alerts/alert-toast.php'; ?>
    <?php require 'components/navbar.php'; ?>

    <?php if ($isProducts): ?>
        <?php require 'components/partials/products-page.php'; ?>
    <?php else: ?>
        <?php require 'components/hero.php'; ?>
        <?php require 'components/brands.php'; ?>
        <?php require 'components/featured.php'; ?>
        <?php require 'components/services.php'; ?>
        <?php require 'components/events.php'; ?>
        <?php require 'components/branches.php'; ?>
        <?php require 'components/about.php'; ?>
        <?php require 'components/why-us.php'; ?>
        <?php require 'components/quote.php'; ?>
    <?php endif; ?>

    <?php require 'components/partials/product-detail-modal.php'; ?>
    <?php require 'components/footer.php'; ?>
    <?php require 'components/whatsapp-float.php'; ?>

    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/widzard.js"></script>

</body>

</html>