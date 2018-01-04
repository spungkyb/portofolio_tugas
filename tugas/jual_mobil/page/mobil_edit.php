<?php
$kodemobil = $_REQUEST['id'];
$querymobil = mysql_query("select * from mobil where Kodemobil = '$kodemobil'");
$tampilmobil = mysql_fetch_array($querymobil);
?>
<form name="editmobil" method="post" action="proses.php" enctype="multipart/form-data">
  <center><h1>Edit mobil </h1>
  <table width="397" height="186" border="0" class="editmobil" >
    <tr>
      <td width="103">Kode mobil</td>
      <td width="278"><label for="txtKodemobil"></label>
      <input name="txtKodemobil" type="text" id="txtKodemobil" value="<?php echo $tampilmobil['Kodemobil']; ?>" readonly="readonly"></td>
    </tr>
    <tr>
      <td>Merek</td>
      <td><input name="txtMerek" type="text" id="txtMerek" value="<?php echo $tampilmobil['Merk']; ?>"></td>
    </tr>
    <tr>
      <td>Warna</td>
      <td><input name="txtWarna" type="text" id="txtWarna" value="<?php echo $tampilmobil['Warna']; ?>"></td>
    </tr>
    <tr>
      <td>Gambar</td>
      <td><input name="gambar" type="file" id="Gambar"><input name="tmp_gambar" type="hidden" value="<?php echo $tampilmobil['gambar']; ?>"></td>
    </tr>
    <tr>
      <td>Harga</td>
      <td><input name="txtHarga" type="text" id="txtHarga" value="<?php echo $tampilmobil['Harga']; ?>"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input name="tipe" type="hidden" id="hiddenField" value="simpanmobil">        <input type="submit" name="btn_simpan" id="button" value="Simpan" class="btn_simpan"></td>
    </tr>
  </table>
  </center>  
</form>

