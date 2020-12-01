<?php
$conn = new mysqli("localhost","root","","assessment2Lora");
if(isset($_POST["nama"])){
		$nama = $conn->real_escape_string($_POST["nama"]);
		$harga = $conn->real_escape_string($_POST["harga"]);

		$target_dir		= "foto/"; 
		$file_name		= basename($_FILES["foto"]["name"]); 
		$target_file	= $target_dir . $file_name; 
		$imageFileType	= strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); 
		if (move_uploaded_file($_FILES["foto"]["tmp_name"],$target_file)) {


		$conn->query("INSERT INTO menu SET nama_menu='$nama',harga_menu='$harga' ,foto='$target_file';");
		}
		
		echo "Berhasil Tambah Data ";
		echo "<a href=index.php>Halaman Login</a>";
		
	}
?>