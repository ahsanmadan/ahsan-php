<?php include "config/koneksi.php";
// cek session aktif user
session_start();
if (empty($_SESSION['username'])) {
    $_SESSION["alert"] =
        "<div class='alert alert-danger' role='alert'>Silahkan Login terlebih dahulu</div>";
    header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Muda Pustaka</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" />
    <link rel="stylesheet" href="assets/style.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="assets/img/favicon.svg" type="image/x-icon">
</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="dashboard">

        <!-- navbar -->
        <?php include "templates/templates-navbar.php" ?>
        <!-- end navbar -->

        <div class="dashboard-app">
            <header class="dashboard-toolbar">
                <a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a>
            </header>
            <div class="dashboard-content">
                <div class="container">
                    <!-- content -->
                    <?php include "content.php" ?>
                    <!-- end content -->
                </div>
            </div>
        </div>
        <!-- partial -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="assets/script.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>