<?php
include "koneksi.php";
$ckode = $_GET['xkode'];
$cjudul = $_GET['xjudul'];
$cpenulis = $_GET['xpenulis'];
$cthn_terbit = $_GET['xthnterbit'];
$cpenerbit = $_GET['xpenerbit'];

$ubah = "update buku set judul='$cjudul', penulis='$cpenulis', thn_terbit='$cthn_terbit', penerbit='$cpenerbit' where kode='$ckode'";
if ($ubah==TRUE) {
	echo "<h1>Data berhasil diubah</h1><a href=tampilkan_buku.php>Lihat data</a>";	
}
else
{
	echo "<h1>Data gagal diubah</h1><a href=tampilkan_buku.php>Lihat data</a>";		
}
mysql_query($ubah,$konek);
 header('location:tampilkan_buku.php');

?>