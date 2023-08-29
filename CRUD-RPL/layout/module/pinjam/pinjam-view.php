<div class="card">
    <div class="card-header">
        <h3>Data Peminjaman Buku</h3>
    </div>
    <div class="card-body">
        <?php
        if (!empty($_SESSION['alert'])) :
            echo $_SESSION["alert"];
        endif;
        unset($_SESSION['alert']);
        ?>
        <button type="button" class="btn btn-purple" data-toggle="modal" data-target="#peminjaman-modal">Tambah data</button>
        <table class="table table-striped mt-3">
            <thead>
                <th>No.</th>
                <th>Tanggal Pinjam</th>
                <th>Nama Siswa</th>
                <th>Judul Buku</th>
                <th>Tanggal Kembali</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                <?php
                // query select data buku
                $no = 1;
                $query = "SELECT * FROM ((siswa_peminjaman as pinjam 
                INNER JOIN siswa_muda ON pinjam.nisn = siswa_muda.nisn)
                INNER JOIN siswa_buku ON pinjam.isbn = siswa_buku.isbn)";

                $conn = mysqli_query($connection, $query);
                while ($data = mysqli_fetch_array($conn)) {

                ?>
                    <!-- fetch data buku -->
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= date('d-m-Y', strtotime($data['tgl_pinjam'])); ?></td>
                        <td><?= $data["nama_siswa"]; ?></td>
                        <td><?= $data["judul_buku"]; ?></td>
                        <td><?= date('d-m-Y', strtotime($data['tgl_kembali'])); ?></td>
                        <td class="flex-col">
                            <a href="?module=peminjaman-edit&id=<?= $data['isbn']; ?>" class="btn btn-warning">Edit</a>
                            <a href="module/pinjam/aksi.php?module=pinjam&act=delete&id=<?= $data['id_peminjaman']; ?>&isbn=<?=$data['isbn'] ?>" class="btn btn-danger">Hapus</a>
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
<div class="modal fade" id="peminjaman-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Peminjaman</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="module/pinjam/aksi.php?module=pinjam&act=insert" method="post">
                    <div class="mb-3">
                        <label class="form-label">Nama Siswa</label>
                        <select class="form-control" name="nama" required>
                            <option selected disabled>Choose..</option>
                            <?php
                            $query = "SELECT * FROM siswa_muda";
                            $conn = mysqli_query($connection, $query);
                            while ($data = mysqli_fetch_array($conn)) {
                            ?>
                                <option value="<?= $data['nisn'] ?>">
                                    <?= $data['nama_siswa'] ?>
                                </option>

                            <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Judul Buku</label>
                        <select class="form-control" name="judul" required>
                            <option selected disabled>Choose..</option>
                            <?php
                            $query = "SELECT isbn,judul_buku,stok FROM siswa_buku";
                            $conn = mysqli_query($connection, $query);
                            while ($data = mysqli_fetch_array($conn)) {
                                if ($data['stok'] == 0) {
                                    $a = "disabled";
                                    $b = "<b>(Stok Buku Habis)</b>";
                                } else {
                                    $a = " ";
                                    $b = " ";
                                }
                            ?>
                                <option <?= $a ?> value="<?= $data['isbn'] ?>">
                                    <?= $data['judul_buku'] ?> <?= $b ?>
                                </option>

                            <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-table">Tanggal Pengembalian</label>
                        <input type="date" name="tgl_balik" class="form-control" placeholder="Tanggal Pengembalian" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-table">Status</label>
                        <select class="form-control" name="status">
                            <option selected disabled>Choose..</option>
                            <option value="pinjam">Masih Dipinjam</option>
                            <option value="selesai">Selesai Dipinjam</option>
                        </select>
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