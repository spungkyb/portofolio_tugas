<?php
/* //jika dilab 
$xhost="192.168.10.250";
$xuser="a111509163";
$xdb="a111509163";*/

$xhost="localhost";
$xuser="root";
$xdb="a111509163";
$xpass="";

$konek=mysql_connect($xhost,$xuser,$xpass);

if($konek)
{
	echo "<h2>Horeeeeeee ... Koneksi mysql berhasil</h2>";
}
$dbkon=mysql_select_db($xdb,$konek);
if($dbkon)
{
	echo "<h2>Database sudah aktif...</h2>";
}

?>