<?php
include('koneksi.php');
$cnim=$_GET['knim'];
$cari="select * from dataku where nim='$cnim'";
$hasil=mysql_query($cari,$konek);
while($isi=mysql_fetch_array($hasil))
{
?>
<?php

$cnim=$_GET['knim'];
$hapus= mysql_query("delete from dataku where nim='$cnim'");
if($hapus==TRUE){
echo "<h1>Data dihapus</h1><a href=tampil_dataku.php>kembali</a>"; 
}
else{
 echo "<h1>Data gagal dihapus</h1><a href=tampil_dataku.php>kembali</a>"; 
 }
?>
<?php 	
}
?>


