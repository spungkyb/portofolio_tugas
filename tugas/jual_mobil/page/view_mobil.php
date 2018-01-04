<?php
	//pembagian data per halaman 10 baris.
	$halaman = get_Halaman("mobil");
	$hal = get_NomorHalaman($_GET['hal']);
	//shorting
	$short = $_GET['short'];
	if($short == ""){
		$short = "ASC";
	}
	$cari = $_REQUEST['txtCari'];
	$sql = "select * from mobil ORDER BY `mobil`.`Kodemobil` $short LIMIT $hal , 10";
	if ($cari != ""){
		$sql = "select * from mobil where Merk like '%$cari%' ORDER BY `mobil`.`Kodemobil` ASC";
	}
if($_GET['short'] && $_GET['by'] != ""){
		$sql = "SELECT * FROM mobil ORDER BY mobil.$_GET[by] $short LIMIT $hal , 10";
}
	switch($short){
		case 'ASC':
		$short = "DESC";
		break;
		case 'DESC':
		$short = "ASC";
		break;
}
	
$query = mysql_query($sql);
if($_GET['edit']=="true"){
	include("page/mobil_edit.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		h2{
font-family:Geneva, Arial, Helvetica, sans-serif;

}
table{
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

 td,  th {
    border: 1px solid #ddd;
    padding: 8px;
}
 tr:nth-child(even){background-color: #f2f2f2;}
 tr:hover {background-color: #ddd;}

 th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color:#00CCFF;
    color: white;
}
	</style>
</head>
<body>

<center><h1>Data mobil</h1></center>
<table border='0' width='1100px'>
	<tr class="tr_grid" align="center" height="40">
	<td><a href='index.php?page=view_mobil&by=kodemobil&short=<?php echo $short; ?>'><u>Kode mobil</u></a></td>
    <td><a href='index.php?page=view_mobil&by=Merk&short=<?php echo $short; ?>'><u>Merek</u></a></td>
    <td><a href='index.php?page=view_mobil&by=Warna&short=<?php echo $short; ?>'><u>Warna</u></a></td>
    <td><u>Gambar</u></td>
    <td><a href='index.php?page=view_mobil&by=Harga&short=<?php echo $short; ?>'><u>Harga</u></a></td>
	<td>Action</td>
    </tr>
<?php
$i=1;
while($data = mysql_fetch_array($query)){
  echo "<tr bgcolor='#CCCCCC' align='center' height='30'  id='tabel'>
  		<td>$data[Kodemobil]</td>
		<td>$data[Merk]</td>
		<td>$data[Warna]</td>
		<td><img src='gambar/$data[gambar]' width='80'/></td>
		<td>Rp. $data[Harga]</td>
		<td><a href='?page=view_mobil&edit=true&id=$data[Kodemobil]'>
			[Edit]</a>
			<a href=proses.php?tipe=hapusmobil&id='$data[Kodemobil]' onclick='return confirm(\"Hapus $data[Merk] dengan Kode mobil $data[Kodemobil] ?\")'>[Hapus]</a></td>
</tr>";
$i++;
}
?><tr>
<td colspan="9" class="tr_grid">
<?php
for($i=1; $i <= $halaman; $i++){
	echo "<a href='?page=view_mobil&hal=$i'>Page $i |</a> &nbsp;";
}
?>
</td>
</tr>
</table>


</body>
</html>
