<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oleh-oleh Melayu</title>
</head>

<body>
    <h2>Makanan khas Melayu</h2>
    <p>Pilih menu makanan dibawah ini</p>
    <ol>
        <li>Durian - DRN</li>
        <li>Jala - JL</li>
        <li>Kemojo - KMJ</li>
        <li>Laksa - LKS</li>
    </ol>
    <form action="" method="post">
        Kode Makanan : <input type="text" name="kode">
        <input name="send" type="submit" value="Pilih">
    </form>

    <?php
    if (isset($_POST["send"])) {
        $kode = $_POST["kode"];

        switch ($kode) {
            case "DRN":
                $namaMakanan = "Lempuk Durian";
                break;

            case "JL":
                $namaMakanan = "Roti Jala";
                break;

            case "KMJ":
                $namaMakanan = "Bolu Kemojo";
                break;

            case "LKS":
                $namaMakanan = "Laksa";
                break;
            default:
                $namaMakanan = "Tidak Tersedia!";
                break;
        }
    }
    echo "<p>Makanan yang anda pilih <b>$namaMakanan</b></p>"
    ?>
</body>

</html>