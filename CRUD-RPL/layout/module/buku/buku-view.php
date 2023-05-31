<div class="card">
    <div class="card-header">
        <h3>Data buku</h3>
    </div>
    <div class="card-body">
        <?php
        session_start();
        if (!empty($_SESSION['alert'])) :
            echo $_SESSION["alert"];
        endif;
        session_destroy();
        ?>
        <button type="button" class="btn btn-purple" data-toggle="modal" data-target="#buku-modal">Tambah data</button>
        <table class="table table-striped mt-3">
            <thead>
                <th>No.</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Stok</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                <?php
                // query select data buku
                $no = 1;
                $query = "SELECT * FROM siswa_buku";
                $conn = mysqli_query($connection, $query);
                while ($data = mysqli_fetch_array($conn)) {

                ?>
                    <!-- fetch data buku -->
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $data["judul_buku"]; ?></td>
                        <td><?= $data["pengarang"]; ?></td>
                        <td><?= $data["penerbit"]; ?></td>
                        <td><?= $data["stok"]; ?></td>
                        <td>
                            <a href="?module=buku-edit&id=<?= $data['isbn']; ?>" class="btn btn-warning">Edit</a>
                            <a href="module/buku/aksi.php?module=buku&act=delete&id=<?= $data['isbn']; ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="buku-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah buku</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="module/buku/aksi.php?module=buku&act=insert" method="post">
                    <div class="mb-3">
                        <label for="nisn" class="form-table">ISBN</label>
                        <input type="text" name="isbn" class="form-control" placeholder="ISBN buku" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-table">Judul buku</label>
                        <input type="text" name="judul" class="form-control" placeholder="Judul buku" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-table">Pengarang</label>
                        <input type="text" name="ngarang" class="form-control" placeholder="Pengarang buku" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-table">Penerbit</label>
                        <input type="text" name="nerbit" class="form-control" placeholder="Penerbit buku" required>
                    </div>
                    <div class="mb-3">
                        <label for="kelamin" class="form-table">Tahun terbit</label>
                        <input type="text" name="tater" class="form-control" placeholder="Tahun terbit" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-table">Jenis buku</label>
                        <input type="text" name="jenis" class="form-control" placeholder="Jenis buku" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-table">Stok</label>
                        <input type="number" name="stok" class="form-control" placeholder="Stok buku" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-purple" value="Simpan Data">
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>