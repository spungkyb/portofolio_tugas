<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Laporan Transaksi Mobil</title>
</head>

<body>
<?php
ini_set("display_errors",1);
include("includes/defines.php");
include("includes/fungsi.php");
include("includes/connect.php");
?>
   
<center><h2>LAPORAN BELI CASH </h2></center>
<?php
$sql = "select a.KodeCash, a.TanggalCash, b.Nama, c.Merk, a.Harga, a.Bayar, a.Keterangan from belicash a inner join pelanggan b using(KodeCust) inner join mobil c using(Kodemobil)";
$query = mysql_query($sql);
?>
<center>
<table width="100%" border="0" bgcolor="#000000">
      <tr bgcolor="#FFFFFF"  height="40">
        <th width="5%" scope="col">No</th>
        <th width="11%" scope="col">KodeCash</th>
        <th width="12%" scope="col">TanggalCash</th>
        <th width="15%" scope="col"> Nama Pembeli </th>
        <th width="12%" scope="col">Merk mobil</th>
        <th width="9%" scope="col">Harga</th>
        <th width="10%" scope="col">Bayar</th>
        <th width="11%" scope="col">Keterangan</th>
      </tr>
      <?php
			   $i=1;
			  while ($data = mysql_fetch_array($query)){
			echo "<tr bgcolor=white>
              <td align=center>$i</td>
              <td align=center >$data[KodeCash]</td>
              <td align=center>$data[TanggalCash]</td>
              <td align=center>$data[Nama]</td>
              <td align=center>$data[Merk]</td>
			  <td align=center>Rp.$data[Harga]</td>
			  <td align=center>Rp.$data[Bayar]</td>
			  <td align=center>$data[Keterangan]
			  </td>
            </tr>";
			$i++;
			}
			?>
    </table></center>
    <center>
		<input type="submit" name="button" id="button" value="Print" onclick="print()" />
        <form method="get" action="includes/laporan_excel.php">
          <input name="tipeLaporan" type="hidden" id="tipeLaporan" value="belicash" />
          <input name="sql" type="hidden" id="sql" value="<?php echo $sql; ?>" />
         <input type="submit" name="button2" id="button2" value="Ekspor ke Ms. Excel" />
        </form>
	</center>
</body>
</html>

