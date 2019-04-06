<?php 
include_once ("config.php"); 
$result = mysqli_query($mysqli, "SELECT * FROM piala_presiden ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form pencarian piala presiden</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
  <h1>football ticket league indonesia</h1>
  <p></p>
</div>

<div class="topnav">
  <a href="#">Home</a>
  <a href="tampil.php">piala presiden</a>
  <a href="#">liga 1</a>
  <a href="#">liga 2</a>
  <!-- <a href="#">pembelian tiket</a> -->
  <!-- <a href="#">cara pembelian</a><br> -->
    <form method="post" action="pencarian.php" align="right">
		<br><input type="text" name="cari">
		<input type="submit" name="kirim" value="cari">
    </form> 
</div><br>
 <h2 align="center">PIALA PRESIDEN</h2> 
<table border="5" align="center">
 <thead>
     <tr>
        <th>klub yang bertanding</th> 
        <th>tanggal pertandingan</th> 
        <th>jam bermain</th> 
        <th>stadion</th>
    </tr>
 </thead>
 <tbody>
 <?php  
while($user_data = mysqli_fetch_array($result)) {         
 echo "<tr>";
 echo "<td>".$user_data['klub']."</td>";
 echo "<td>".$user_data['jam_main']."</td>";
 echo "<td>".$user_data['tanggal']."</td>";
 echo "<td>".$user_data['stadion']."</td>";    
 echo "</tr>";
 //echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
}
?>
 </tbody>
</table>

</body>
</html>