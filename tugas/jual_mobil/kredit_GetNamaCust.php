<?php
//file yang dipanggil kredit_GetNamaCust.js
//untuk Mengambil harga mobil pada saat Combo Box mobil terpilih
include("includes/defines.php");
include("includes/connect.php");
$kodeKredit = $_GET['kodeKredit'];
$sql = mysql_query("select KodeCust from belikredit where KodeKredit = '$kodeKredit'");
$kodkred = mysql_fetch_array($sql);
$kodeCust = $kodkred['KodeCust'];
//ambil nama pelanggan
$sql2 = mysql_query("select Nama from pelanggan where KodeCust = '$kodeCust'");
$pelanggan = mysql_fetch_array($sql2);
echo $pelanggan['Nama'];
?>