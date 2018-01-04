<?php
if($_GET['tambahPelanggan'] == true ){
 	include("page/beliKredit_input_pelanggan.php");
}
$kodemobil = $_REQUEST['Kodemobil'];
$pembeli = $_REQUEST['KodeCust'];
if($_GET['id'] != "") {
 	$value = "Edit";	//modus edit data lama
}else{
 	$value = "Simpan";	//modus input data baru
 	$data['TanggalCash']=date("Y-m-d");
	//buat kode otomatis
	$query_oto = mysql_query("select max(KodeKredit) as maksi from belikredit");
	$data_oto = mysql_fetch_array($query_oto);
	$data_potong = substr($data_oto['maksi'],3,5);
	$data_potong++;
	$kode="";
	for ($i=strlen($data_potong); $i<=4; $i++)
	$kode = $kode."0";
	$data['KodeCash'] = "KRD$kode$data_potong";
}
?>
<form name="EditPelanggan" method="post" action="proses.php">
  <center>
    <h1>INPUT BELI KREDIT</h1>
   
    <table width="450" height="300" border="0" class="inputBeliCash">
      <tr>
        <td width="134">Kode Kredit </td>
        <td colspan="2"><label>
          <input name="kodeKredit" type="text" id="kodeKredit" value="<?php echo $data['KodeCash']; ?>">
        </label></td>
      </tr>
      <tr>
        <td>Tanggal  </td>
        <td colspan="2"><input name="tanggalKredit" type="text" id="tanggalKredit" value="<?php echo $data['TanggalCash']; ?>"></td>
      </tr>
      <tr>
        <td>Pelanggan</td>
        <td width="166"><label>
          <select name="kodeCust" id="kodeCust">
		  <option value=""></option>
	<?php
	$query_pelanggan = mysql_query("select KodeCust,Nama from pelanggan");
	while ($data2=mysql_fetch_array($query_pelanggan)){
		if($pembeli==$data2[KodeCust])
	 		echo "<option value=$data2[KodeCust] selected>$data2[Nama]</option>";
		else 
	 		echo "<option value=$data2[KodeCust]>$data2[Nama]</option>";
	}
	?>
          </select>
        </label></td>
        <td width="136">
        <u><a href="index.php?page=beliKredit_input&tambahPelanggan=true">Tambah Pelanggan</a></u>
        </td>
      </tr>
      <tr>
        <td>Merek mobil </td>
		<td colspan="2">
		<select name="Kodemobil" id="Kodemobil" onChange="hargamobil()">
		<option value=""></option>
		  <?php
		  $query_mobil = mysql_query("select Kodemobil,
		  								         Merk
										   from mobil");
		  while($data3 = mysql_fetch_array($query_mobil)){
		  	if($kodemobil==$data3[Kodemobil]){
				echo "<option value=$data3[Kodemobil] selected>$data3[Merk]</option>";
				}
				else{
					echo"<option value=$data3[Kodemobil]>$data3[Merk]</option>";
				}
		  }
		  ?>
          </select></td>
      </tr>
      <tr>
        <td>Harga</td>
        <td colspan="2"><input name="Harga" type="text" id="Harga" value="" readonly="readonly"></td>
      </tr>
      <tr>
        <td>Uang Muka</td>
        <td colspan="2"><input name="uangMuka" type="text" id="uangMuka"></td>
      </tr>
      <tr>
        <td>Bunga</td>
        <td colspan="2"><input name="bunga" type="text" id="bunga"></td>
      </tr>
      <tr>
        <td>Lama Cicilan</td>
        <td colspan="2"><input name="lamaCicilan" type="text" id="lamaCicilan"></td>
      </tr>
      <tr>
        <td>Keterangan</td>
        <td colspan="2"><input name="keterangan" type="text" id="keterangan"></td>
      </tr>
      <tr>
        <td colspan="3" align="center"><label>
		  <input name="tipe" type="hidden" id="hiddenField" value="inputBeliKredit" />
		  <input name="btnSimpan" type="submit"  class="btn_simpan" value="Simpan" />
        </label></td>
      </tr>
    </table>
    <p>&nbsp;</p>
  </center>
  
</form>
