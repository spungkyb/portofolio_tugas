<?php
include "koneksi.php";

$cnim=$_POST['xnim'];
$cnama=$_POST['xnama'];
$ctgllhr=$_POST['tgllhr'];
$cjk=$_POST['jk'];
$cagama=$_POST['agama'];
$cjurus=$_POST['jurus'];
$calamat = $_POST['alamat'];
$ckota = $_POST['xkota'];



echo $cnim;
echo "---->";
echo $cnama;
echo "---->";
echo $ctgllhr;
echo "---->";
echo $cjk;
echo "---->";
echo $cagama;
echo "---->";
echo $cjurus;
echo "---->";
echo $calamat;
echo "---->";
echo $ckota;


$kuery = "insert into dataku (nim,nama,tgl_lhr,jns_kel,agama,jurus,alamat,kota) values ('$cnim','$cnama','$ctgllhr','$cjk','$cagama','$cjurus','$calamat','$ckota')";
mysql_query($kuery,$konek);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<br>
<a href="tampil_dataku.php">Lihat Data</a>
</body>
</html>