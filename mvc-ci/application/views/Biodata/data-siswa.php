<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="<?= base_url('assets/css') ?>bootstrap.css">
</head>
<style>
    .gas>li>a {
        color: gray;
        font-weight: bold;
    }
</style>

<body>
    <div class="shadow sticky-top bg-light">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                <span class="fs-4"><?= $judul ?></span>
            </a>

            <ul class="nav nav-pills gas">
                <li class="nav-item"><a href="#" class="nav-link" aria-current="page">Beranda</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Siswa</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Guru</a></li>
            </ul>
        </header>
    </div>
    <div class="container my-5">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No wa</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($siswa as $d) { ?>
                    <tr>
                        <td><?= $d['no'] ?></td>
                        <td><?= $d['nama'] ?></td>
                        <td><?= $d['jk'] ?></td>
                        <td><?= $d['alamat'] ?></td>
                        <td><?= $d['wa'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>