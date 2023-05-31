<div class="card">
    <div class="card-header">
        <h3>Data user</h3>
    </div>
    <div class="card-body">
        <button type="button" class="btn btn-purple" data-toggle="modal" data-target="#user-modal">Tambah data</button>
        <table class="table table-striped mt-3">
            <thead>
                <th>No.</th>
                <th>Nama user</th>
                <th>Username</th>
                <th>Level</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                <?php
                // query select data buku
                $no = 1;
                $query = "SELECT * FROM siswa_user";
                $conn = mysqli_query($connection, $query);
                while ($data = mysqli_fetch_array($conn)) {

                ?>
                    <!-- fetch data buku -->
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $data["nama_user"]; ?></td>
                        <td><?= $data["username"]; ?></td>
                        <td><?= $data["level"]; ?></td>
                        <td>
                            <a href="?module=user-edit&id=<?= $data['id']; ?>" class="btn btn-warning">Edit</a>
                            <a href="module/user/aksi.php?module=user&act=delete&id=<?= $data['id']; ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<!-- modal -->
<!-- Modal -->
<div class="modal fade" id="user-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="module/user/aksi.php?module=user&act=insert" method="post">
                    <div class="mb-3">
                        <label for="nisn" class="form-table">Nama User</label>
                        <input type="text" name="namaUser" class="form-control" placeholder="Nama user" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-table">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-table">Password</label>
                        <input type="password" name="pass" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="mb-3">
                        <label for="kelamin" class="form-table">Level</label>
                        <select name="level" class="custom-select" required>
                            <option selected disabled>Choose..</option>
                            <option value="admin">Administrator</option>
                            <option value="user">User</option>
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