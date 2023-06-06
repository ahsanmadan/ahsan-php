<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/style.css" />
    <link rel="stylesheet" href="assets/login.css" />
    <title>Masuk ke Muda Pustaka</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <meta name="theme-color" content="#443ea2">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .forgot>label>a {
            font-size: 12px;
        }

        .forgot>label>a:hover {
            text-decoration: none;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">

    <form method="post" action="cek-login.php" class="form-signin">
        <i style="font-size: 72px; color:#443ea2;" class="bi bi-book-fill"></i>
        <h3 class="h3 mb-3 font-weight-normal">Masuk ke Muda Pustaka</h3>
        <?php
        if (!empty($_SESSION['alert'])) :
            echo $_SESSION["alert"];
        endif;
        unset($_SESSION['alert']);
        ?>
        <label for="inputEmail" class="sr-only">Nama pengguna</label>
        <input type="text" name="username" class="form-control mb-3" placeholder="Nama Pengguna" required autofocus>
        <label for="inputPassword" class="sr-only">Kata sandi</label>
        <input type="password" name="password" class="form-control" placeholder="Kata sandi" required>
        <div class="forgot mb-3">
            <label>
                <a href="#">Lupa Kata sandi?</a>
            </label>
        </div>
        <button class="btn btn-lg btn-purple btn-block" type="submit">Masuk</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2022</p>
    </form>



</body>

</html>