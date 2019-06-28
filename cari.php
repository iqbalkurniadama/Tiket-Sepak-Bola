<?php 
include_once ("koneksi.php");
$key = $_POST['cari'];
echo "Keyword pencarian = $key";
echo "<br>";
$result =mysqli_query($koneksi, "SELECT * FROM pemesanan WHERE nama LIKE '%$key%' ");
	// $SQL = mysqli_query($connect,$QueryString); 
?>

<table border="1">
		<tr>
		<th>id</th>
        <th>nama</th>
        <th>klub yang bertanding</th>
        <th>tanggal & waktu</th>
        <th>stadion</th>
        <th>kelas</th>
        <th>total harga</th>
        <th>mode pembayaran</th>
        <th>liga</th>
        <th>opsi</th>
			
		</tr>
		<?php
		while($data = mysqli_fetch_array($result)) {
				echo "<tr>";
            echo "<td>".$data['id']."</td>";
            echo "<td>".$data['nama']."</td>";
            echo "<td>".$data['klub_b']."</td>";
            echo "<td>".$data['tanggal']."</td>";
            echo "<td>".$data['stadion']."</td>";
            echo "<td>".$data['kelas']."</td>";
            echo "<td>".$data['total']."</td>";
            echo "<td>".$data['pembayaran']."</td>";
            echo "<td>".$data['liga']."</td>";

            echo "<td>";
            echo "<a href='edit_admin.php?id=".$data['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$data['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
			}
		?>	
	</table>
	<a href="halaman_admin.php">kembali</a>