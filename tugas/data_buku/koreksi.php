<?php
include('koneksi.php');

$ckode = $_GET['kkode'];

$cari = "select * from buku where kode='$ckode'";
$hasil = mysql_query($cari,$konek);
while ($kor= mysql_fetch_array($hasil)) {

?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Pendataan Buku</title>
    <link rel="stylesheet" type="text/css" href="style.css">	
</head>
<body>
	<form action="update.php" method="get" name="form2">	
		<table width="500" align="center">
			<tr style="background-color:#00CCFF;"><td colspan="3" align="center"><h2>Pendataan Buku</h2></td></tr>
			<tr><td><p>Kode Buku</p></td><td>:</td><td><input type="text" name="xkode" size="30" maxlength="20" value="<?php echo $kor[0];?>" readonly></td></tr>
			<tr><td><p>Judul Buku</p></td><td>:</td><td><input type="text" name="xjudul" size="30" maxlength="50" value="<?php echo $kor[1];?>"></td></tr>
			<tr><td><p>Penulis</p></td><td>:</td><td><input type="text" name="xpenulis" size="30" maxlength="30" value="<?php echo $kor[2];?>"></td></tr>
			<tr><td><p>Tahun Terbit</p></td><td>:</td><td><input type="text" name="xthnterbit" size="30" maxlength="30" value="<?php echo $kor[3];?>"></td></tr>
			<tr><td><p>Penerbit</p></td><td>:</td><td><input type="text" name="xpenerbit" size="30" maxlength="30" value="<?php echo $kor[4];?>"></td></tr>
			<tr>
			    <td colspan="3" align="center">
			    	<input type="submit" value="Simpan"/>
			    </td>
			</tr>
		</table>
	</form>


</body>
</html>
<?php
}
?>