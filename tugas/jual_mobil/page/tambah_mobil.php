<?php
//buat kode otomatis
	$query_oto = mysql_query("select max(Kodemobil) as maksi from mobil");
	$data_oto = mysql_fetch_array($query_oto);
	$data_potong = substr($data_oto['maksi'],3,5);
	$data_potong++;
	$kode="";
	for ($i=strlen($data_potong); $i<=4; $i++)
		$kode = $kode."0";
	   $data['Kodemobil'] = "MBL$kode$data_potong";
?><form name="Tambahmobil" method="post" action="proses.php" enctype="multipart/form-data">
	<br>
    <br>
    <br>
  <center>
    <h1>Tambah mobil </h1></center>
  <table width="397" height="186" border="0" class="editmobil" >
    <tr>
      <td width="103">Kode mobil</td>
      <td width="278"><label for="txtKodemobil"></label>
      <input name="txtKodemobil" type="text" id="txtKodemobil" value="<?php echo $data['Kodemobil']; ?>"></td>
    </tr>
    <tr>
      <td>Merek</td>
      <td><input name="txtMerek" type="text" id="txtMerek"></td>
    </tr>
    <tr>
      <td>Warna</td>
      <td><input name="txtWarna" type="text" id="txtWarna"></td>
    </tr>
    <tr>
      <td>Gambar</td>
      <td><input name="gambar" type="file" id="Gambar"></td>
    </tr>
    <tr>
      <td>Harga</td>
      <td><input name="txtHarga" type="text" id="txtHarga"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input name="tipe" type="hidden" id="hiddenField" value="tambahmobil">        <input type="submit" name="btn_simpan" id="button" value="Simpan" class="btn_simpan"></td>
    </tr>
  </table>
</form>

