<?php 
include_once ("config.php");
$key = $_POST['cari'];
// echo "Keyword pencarian = $key";
echo "<br>";
$result =mysqli_query($mysqli, "SELECT * FROM piala_presiden WHERE klub LIKE '%$key%' ");
	// $SQL = mysqli_query($connect,$QueryString); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pencarian</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
  <h1>football ticket league indonesia</h1>
  <p></p>
</div>

<div class="topnav">
  <a href="#">Home</a>
  <a href="tampil.php">jadwal piala presiden</a>
  <a href="#">pembelian tiket</a>
  <a href="#">cara pembelian</a><br>
    <form method="post" action="pencarian.php" align="right">
		<input type="text" name="cari">
		<input type="submit" name="kirim" value="cari">
    </form> 
</div><br><br>

<table border="5" align="center">
		<tr>
            <th>klub yang bertanding</th> 
            <th>tanggal pertandingan</th> 
            <th>jam bermain</th> 
            <th>stadion</th>
		</tr>
		<?php
		while($user = mysqli_fetch_array($result)) {
				echo("<tr>");
				//echo "<td>".$user['id']."</td>";
				echo "<td>".$user['klub']."</td>";
				echo "<td>".$user['jam_main']."</td>";
                echo "<td>".$user['tanggal']."</td>";
                echo "<td>".$user['stadion']."</td>";
				echo "</tr>";
			}
		?>	
	</table>
    
</body>
</html>