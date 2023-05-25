<div class="card">
    <div class="card-header">
        <h3>Data siswa</h3>
    </div>
    <div class="card-body">
        <a href="module/siswa/siswa-tambah.php" class="btn btn-purple" data-toggle="modal" data-target="#siswa-modal">Tambah data</a>
        <table class="table table-striped mt-3">
            <thead>
                <th>No.</th>
                <th>NISN</th>
                <th>Nama siswa</th>
                <th>Jurusan</th>
                <th>Jenis Kelamin</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                <?php
                // query select data siswa
                $query = "SELECT * FROM siswa_muda";
                $conn = mysqli_query($connection, $query);
                while ($data = mysqli_fetch_array($conn)) {

                ?>
                    <!-- fetch data siswa -->
                    <tr>
                        <td>1</td>
                        <td><?= $data["$nisn"]; ?></td>
                        <td><?= $data["$nama_siswa"]; ?></td>
                        <td><?= $data["$jurusan"]; ?></td>
                        <td><?= $data["$jenis_kelamin"]; ?></td>
                        <td>
                            <a href="" class="btn btn-success">Edit</a>
                            <a href="" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="siswa-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="aksi/aksi-tambah-siswa.php" method="post">
                    <div class="mb-3">
                        <label for="nisn" class="form-table">NISN</label>
                        <input type="text" name="nisn" class="form-control" placeholder="NISN Siswa">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-table">Nama Siswa</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Siswa">
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-table">Jurusan</label>
                        <input type="text" name="jurusan" class="form-control" placeholder="Jurusan Siswa">
                    </div>
                    <div class="mb-3">
                        <label for="kelamin" class="form-table">Jenis Kelamin</label>
                        <input type="text" name="kelamin" class="form-control" placeholder="L / P">
                    </div>
                    <div class="mb-3">
                        <label for="kelamin" class="form-table">Nomor Handphone</label>
                        <input type="text" name="nohp" class="form-control" placeholder="08123456789">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-table">Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat Siswa">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="input" class="btn btn-purple" value="Simpan Data">
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>