<?php 
    $conn = new mysqli("localhost", "root", "", "assessment2Lora");
    $sql = "SELECT * FROM menu WHERE id = '$id'";
    $result = $conn->query($sql);
    while ($row=$result->fetch_assoc()) {
        $harga = $row['harga_menu'];
    }

 ?>