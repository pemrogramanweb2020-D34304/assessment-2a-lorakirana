<?php

$nama  = $_POST['nama'];

if($nama == "admin"){
    header("location:adm.php");
} else{
    header("location:masuk.php");
}



?>