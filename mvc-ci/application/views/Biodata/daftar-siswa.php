<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <h3 class="mb-3"><?= $judul ?></h3>
        <table class="table table-dark table-striped-columns">
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