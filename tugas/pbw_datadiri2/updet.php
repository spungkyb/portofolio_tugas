<?php
include "koneksi.php";

$cnim = $_GET['xnim'];
$cnama = $_GET['xnama'];
$ctgllhr=$_GET['tgllhr'];
$cjk=$_GET['jk'];
$cagama=$_GET['agama'];
$cjurus=$_GET['jurus'];
$calamat = $_GET['alamat'];
$ckota = $_GET['xkota'];



$ubah = "update dataku set nama='$cnama', tgl_lhr='$ctgllhr',jns_kel = '$cjk',agama='$cagama',jurus='$cjurus',alamat='$calamat',kota='$ckota' where nim='$cnim'";
if($ubah==TRUE){
echo "<h1>Data berhasil diupdate</h1>"; 
}
else{
 echo "<h1>Data gagal diupdate</h1>"; 
 }

mysql_query($ubah,$konek);
 header('location:tampil_dataku.php');

