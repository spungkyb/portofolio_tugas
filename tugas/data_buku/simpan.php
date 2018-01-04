<?php
include "koneksi.php";

$ckode = $_POST['xkode'];
$cjudul = $_POST['xjudul'];
$cpenulis = $_POST['xpenulis'];
$cthn_terbit = $_POST['xthnterbit'];
$cpenerbit = $_POST['xpenerbit'];

echo "</br></br> Kode buku :  $ckode";
echo "</br> Judul buku : $cjudul";
echo "</br> Penulis : $cpenulis";
echo "</br>Tahun terbit : $cthn_terbit";
echo "</br>Penerbit : $cpenerbit";

$kuery = "insert into buku (kode,judul,penulis,thn_terbit,penerbit) values ('$ckode','$cjudul','$cpenulis','$cthn_terbit','$cpenerbit')";


echo "</br></br> <strong>Data berhasil disimpan</strong><a href=tampilkan_buku.php>Lihat data</a>";
mysql_query($kuery,$konek);
header('location:tampilkan_buku.php');

?>