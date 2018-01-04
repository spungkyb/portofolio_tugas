<style>
table {padding:10px; background-color:#00FFFF;  color:#666666;}
</style>

<?php
include("koneksi.php");


$kuery = "select * from dataku";
$hasil = mysql_query($kuery, $konek);
?>
<h2 align="center" >Laporan Data Temanku</h2>
<form action="form01.html">
    <input type="submit" value="Add" />
</form>
<form action="../../index.html">
    <input type="submit" value="Back to menu" />
</form>
<table border="1" width="900" align="center" cellpadding="10" cellspacing="0">
	<tr>
    	<td>NO.</td>
        <td>NIM</td>
        <td>NAMA</td>
        <td>TGL LHR</td>
        <td>L/P</td>
        <td>AGAMA</td>
        <td>JURUSAN</td>
        <td>ALAMAT</td>
        <td>KOTA</td>
        <td>AKSI</td>
    </tr>
<?php
$nomer = 1;
while ($isi = mysql_fetch_array($hasil))
{
	$nomer++;
?>
<tr><td><?php echo $nomer;?></td>
	<td><?php echo $isi[0];?></td>
	<td><?php echo $isi[1];?></td>
    <td><?php echo $isi[2];?></td>
    <td><?php echo $isi[3];?></td>
    <td><?php 
		echo $isi[4];?></td>
    <td><?php echo $isi[5];?></td>
    <td><?php echo $isi[6];?></td>
    <td><?php echo $isi[7];?></td>
    <td><?php echo "<a href=koreksi.php?knim=$isi[0]>Edit</a>";
	echo "<a href=hapus.php?knim=$isi[0]>-Del</a>";?>
	</td>
    <br>
<?php
}
?>
</table>
