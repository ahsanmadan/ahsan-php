<?php $module = !empty($_GET["module"]) ? $_GET["module"] : "" ?>

<?php
if ($module == "" or $module == "home") : ?>
    <div class="card">
        <div class="card-header">
            <h1>Selamat Datang di Muda Pustaka</h1>
        </div>
        <div class="card-body">
            <p>Your account type is: Administrator</p>
            <p>Silahkan akses menu untuk menggunakan aplikasi</p>
        </div>
    </div>
<?php

elseif ($module == "user") :
    include "module/user/user-view.php";

elseif ($module == "siswa") :
    include "module/siswa/siswa-view.php";

elseif ($module == "siswa-edit") :
    include "module/siswa/siswa-edit.php";

// bagian buku
elseif ($module == "buku") :
    include "module/buku/buku-view.php";

elseif ($module == "buku-edit") :
    include "module/buku/buku-edit.php";
elseif ($module == "pinjam") :
    include "module/pinjam/pinjam-view.php";
endif;
?>