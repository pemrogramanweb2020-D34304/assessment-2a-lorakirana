<html>
<head><title>Tambah</title></head>
<body>
<label>Silahkan Pilih Makanan</label>
<br>
	<form method="POST" action="pros.php" enctype="multipart/form-data">
		<br>
		<label>Nama Makanan</label>
		<br>
		<input type="text" name="nama"/>
		<br>
		<label>Harga Makanan</label>
		<br>
		<input type="text" name="harga"/>
		<br>
		<label>Upload Foto</label>
		<br>
		<input type="file" name="foto">
		<br><br>
		<input type="reset" name="reset">
		<input type="submit" name="submit">
	</form>
	<br>
</body>
