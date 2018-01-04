<?php
include "koneksi.php";
$ckode = $_GET['kkode'];
$cari = "select * from buku where kode='$ckode'";
$hasil = mysql_query($cari, $konek);
while($isi=mysql_fetch_array($hasil)){

}

$ckode = $_GET['kkode'];
$hapus = mysql_query("delete from buku where kode ='$ckode'");
if($hapus==TRUE){
	echo "<h1>data berhasil dihapus</h1><a href=tampilkan_buku.php>kembali</a>";
}
else{
		echo "<h1>data  tidak berhasil dihapus</h1><a href=tampilkan_buku.php>kembali</a>";
}
 header('location:tampilkan_buku.php');


?>