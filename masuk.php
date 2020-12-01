<?php
    include 'koneksi.php';
    $sql = 'SELECT * 
            FROM menu';
            
    $query = mysqli_query($conn, $sql);
    
    if (!$query) {
        die ('SQL Error: ' . mysqli_error($conn));
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SELAMAT DATANG</title>
</head>
<body> <center> <h2>
        </h2>

        <table border=1px;>
		<p>SILAHKAN PILIH MENU DIBAWAH INI</p>
		<thead>
			<tr>
				<th>Nama Makanan</th>
				<th>Harga</th>
				<th>Gambar</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
		<?php
	
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td>'.$row['nama_menu'].'</td>
					<td>'.$row['harga_menu'].'</td>
					<td><img width="300" height="400" src="'.$row['foto'].'"></td>
					<td><a href=bel.php?id='.$row['id'].'>beli</a></td>
				</tr>';
		}
		
		?>
		</tbody>
	</table>
    <a href="index.php">Kembali Kehalaman Awal</a>
    </center>
</body>
</html>