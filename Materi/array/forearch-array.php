<?php

$ruang = array(
    "kamar1" => "ahsan", "kamar2" => "umar", "kamar3" => "Kosong", "kamar4" => "ujang dan mamat"
);

foreach ($ruang as $a => $nama) :
    echo "Ruangan $a berisi customer $nama <br>";
endforeach;

// echo "Hotel Mandala memiliki 4 kamar hotel, kamar 1,2 dan 3 Sudah berisi dengan masing-masing " . $ruang["kamar1"] . ", " . $ruang["kamar2"] . " dan " . $ruang["kamar3"] . ". " . "Adapun kamar 4 atas nama " . $ruang["kamar4"] . " sudah di checkout tadi pagi";
