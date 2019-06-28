<?php

include("koneksi.php");

if( !isset($_GET['id']) ){
    header('Location: halamam_admin.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM pemesanan WHERE id='$id' ";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>admin</title>
</head>

<body>
    <header>
        <h3>edit data costumer</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama" value="<?php echo $data['nama'] ?>" />
        </p>
        <p>
            <label for="klub_b">klub: </label>
            <input type="text" name="klub_b" placeholder="klub" value="<?php echo $data['klub_b'] ?>" />
        </p>
        <p>
            <label for="tanggal">tanngal: </label>
            <input type="text" name="tanggal" placeholder="tanggal" value="<?php echo $data['tanggal'] ?>" />
        </p>
        <p>
            <label for="stadion">stadion: </label>
            <input type="text" name="stadion" placeholder="stadion" value="<?php echo $data['stadion'] ?>" />
        </p>
        <p>
            <label for="kelas">kelas: </label>
            <input type="text" name="kelas" placeholder="kelas" value="<?php echo $data['kelas'] ?>" />
        </p>
        <p>
            <label for="total">total: </label>
            <input type="text" name="total" placeholder="total" value="<?php echo $data['total'] ?>" />
        </p>
        <p>
            <label for="pembayaran">pembayaran: </label>
            <input type="text" name="pembayaran" placeholder="pembayaran" value="<?php echo $data['pembayaran'] ?>" />
        </p>
        <p>
            <input type="hidden" name="liga" placeholder="liga" value="<?php echo $data['liga'] ?>" />
        </p>
        <p>
            <label for="pembayaran">mode pembayaran: </label>
            <?php $pembayaran = $data['pembayaran']; ?>
            <select name="pembayaran">
                <option <?php echo ($pembayaran == 'bca') ? "selected": "" ?>>bca</option>
                <option <?php echo ($pembayaran == 'bri') ? "selected": "" ?>>bri</option>
                <option <?php echo ($pembayaran == 'mandiri') ? "selected": "" ?>>mandiri</option>
            </select>
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>