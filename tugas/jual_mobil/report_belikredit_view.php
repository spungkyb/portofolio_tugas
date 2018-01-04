<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Laporan Transaksi Keredit Mobil</title>
</head>

<body>
<?php
ini_set("display_errors",1);
include("includes/defines.php");
include("includes/fungsi.php");
include("includes/connect.php");
?>
<center> <h2>LAPORAN BELI KREDIT </h2>
<?php
$sql = "select belikredit.KodeKredit, belikredit.TanggalKredit, pelanggan.Nama, mobil.Merk, belikredit.Harga, belikredit.UangMuka, belikredit.Bunga, belikredit.LamaCicilan, belikredit.AngsuranKe, belikredit.TelahBayar, belikredit.Sisa, Belikredit.Keterangan from belikredit inner join pelanggan using (KodeCust) inner join mobil using (Kodemobil)";
$query = mysql_query($sql);
?>
<center>
<table width="100%" border="0" bgcolor="#000000">
      <tr bgcolor="#FFFFFF"  height="40">
        <th width="5%" scope="col">No</th>
        <th width="11%" scope="col">Kode Kredit</th>
        <th width="12%" scope="col">Tanggal Kredit</th>
        <th width="15%" scope="col"> Nama Pelanggan </th>
        <th width="12%" scope="col">Merk mobil</th>
        <th width="9%" scope="col">Harga</th>
        <th width="10%" scope="col">Uang Muka</th>
        <th width="11%" scope="col">Bunga</th>
        <th width="11%" scope="col">Cicilan</th>
        <th width="11%" scope="col">AngsuranKe</th>
        <th width="11%" scope="col">Telah Bayar</th>
        <th width="11%" scope="col">Sisa</th>
        <th width="11%" scope="col">Keterangan</th>
      </tr>
      <?php
			   $i=1;
			  while ($data = mysql_fetch_array($query)){
			echo "<tr bgcolor=white>
              <td align=center>$i</td>
              <td align=center >$data[KodeKredit]</td>
              <td align=center>$data[TanggalKredit]</td>
              <td align=center>$data[Nama]</td>
              <td align=center>$data[Merk]</td>
			  <td align=center>Rp.$data[Harga]</td>
			  <td align=center>Rp.$data[UangMuka]</td>
			  <td align=center>$data[Bunga]</td>
			  <td align=center>$data[LamaCicilan]</td>
			  <td align=center>$data[AngsuranKe]</td>
			  <td align=center>$data[TelahBayar]</td>
			  <td align=center>$data[Sisa]</td>
			  <td align=center>$data[Keterangan]</td>
            </tr>";
			$i++;
			}
			?>
    </table></center>
    <center>
		<input type="submit" name="button" id="button" value="Print" onclick="print()" />
        <form method="get" action="includes/laporan_excel.php">
          <input name="tipeLaporan" type="hidden" id="tipeLaporan" value="beliKredit" />
          <input name="sql" type="hidden" id="sql" value="<?php echo $sql; ?>" />
         <input type="submit" name="button2" id="button2" value="Ekspor ke Ms. Excel" />
        </form>
	</center>
</body>
</html>

