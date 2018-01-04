<?php
//file yang dipanggil Hargamobil.js
//untuk Mengambil harga mobil pada saat Combo Box mobil terpilih
include("includes/defines.php");
include("includes/connect.php");
$kodemobil = $_GET['Kodemobil'];
$sql = mysql_query("select Harga from mobil where Kodemobil = '$kodemobil'");
$i = 1;
$harga = mysql_fetch_array($sql);
echo $harga['Harga'];
?>