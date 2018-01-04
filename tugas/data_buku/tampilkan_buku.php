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

<?php
include ("koneksi.php");

$kuery = "select * from buku";
$hasil = mysql_query($kuery, $konek);
?>
<h2 align="center">Laporan Pendataan Buku</h2>
<form action="form.html">
    <input type="submit" value="Add" />
</form>
<form action="../../index.html">
    <input type="submit" value="Back to menu" />
</form>
<table  border="1" width="900" align="center" cellpadding="10" cellspacing="0">
	<tr>
		<th><strong>NO</strong></th>
		<th><strong>KODE</strong></th>
		<th><strong>JUDUL</strong></th>
		<th><strong>PENULIS</strong></th>
		<th><strong>TAHUN TERBIT</strong></th>
		<th><strong>PENERBIT</strong></th>
		<th><strong>AKSI</strong></th>
	</tr>
<?php
$nomer = 0;
while ($isi = mysql_fetch_array($hasil))
{
	$nomer++;
?>
<tr>
	<td><?php echo $nomer;?></td>
	<td><?php echo $isi[0];?></td>
	<td><?php echo $isi[1];?></td>
    <td><?php echo $isi[2];?></td>
    <td><?php echo $isi[3];?></td>
	<td><?php echo $isi[4];?></td>
	<td><?php echo "<a href=koreksi.php?kkode=$isi[0]>Edit</a>"; echo "<a href=hapus.php?kkode=$isi[0]>-Hapus</a>"; ?></td>
    

</tr>
<?php
}
?>
</table>

<br>


