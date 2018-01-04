<?php
include('koneksi.php');


$cnim=$_GET['knim'];

echo "<h1>$cnim</h1>";

$cari= "select * from dataku where nim='$cnim'";
$hasil = mysql_query($cari,$konek);

while ($kor=mysql_fetch_array($hasil)){

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FormKu</title>
<link rel="stylesheet" type="text/css"  href="styleform.css">
</head>

<body bgcolor="#CCCCCC">
<div class="gambar">
    <img src="Penguins.jpg" width="180" height="210" id="gmbr"/>
</div> 
<form action="updet.php" method="get" name="form1">
<table  width="800" align="center">
<tr>
	<td colspan="3" align="center"><h2>Entry Data Pribadiku</h2></td>
</tr>
<tr>
	<td>Nim</td><td>:</td>
    <td>
    	<input type="text" name="xnim" size="20" maxlength="20" value="<?php echo $kor[0]?>"/>
    </td>
    
</tr>
<tr>
	<td>Nama</td><td>:</td>
    <td>
    	<input type="text" name="xnama" size="20" maxlength="20" value="<?php echo $kor[1]?>"/>
    </td>
</tr>
<tr>
	<td>Tgl Lahir</td><td>:</td>
    <td>
    	<input type="date" name="tgllhr" value="<?php echo $kor[2]?>"/>
    </td>
</tr>
<tr>
	<td>Jenis Kelamin</td><td>:</td>
    <td>
    	<input type="radio" name="jk" value="L" <?php if($kor[3]=="L"){echo "checked";}?>/>Laki-laki
 		<input type="radio" name="jk" value="P" <?php if($kor[3]=="P"){echo "checked";}?>/>Perempuan
    </td>
</tr>
<tr>
	<td>Agama</td><td>:</td>
    <td>
    	<select name="agama">
			<option value="Islam" <?php if ($kor[4]=="Islam"){echo "selected";}?>>Islam</option>
            <option value="Hindu" <?php if ($kor[4]=="Hindu"){echo "selected";}?>>Hindu</option>
            <option value="Budha" <?php if ($kor[4]=="Budha"){echo "selected";}?>>Budha</option>
            <option value="Katolik" <?php if ($kor[4]=="Katolik"){echo "selected";}?>>Katolik</option>
            <option value="Kristen" <?php if ($kor[4]=="Kristen"){echo "selected";}?>>Kristen</option>
            </select>
    </td>
</tr>
<tr>
	<td>Jurusan</td><td>:</td>
    <td>
    	 <select name="jurus">
			<option value="">--pilih--</option>
            <option value="ti" <?php if ($kor[5]=="ti"){echo "selected";}?>>Teknik Informatika</option>
            <option value="si" <?php if ($kor[5]=="si"){echo "selected";}?>>Sistem Informasi</option>
            <option value="bb" <?php if ($kor[5]=="bb"){echo "selected";}?>>Bahasa dan budaya</option>
            <option value="eb" <?php if ($kor[5]=="eb"){echo "selected";}?>>Ekonomi dan Bisnis</option>
        </select>
    </td>
</tr>
<tr>
	<td>Alamat</td><td>:</td>
    <td>
    	<textarea rows="5" cols="50" name="alamat" value="<?php echo $kor[6]?>" ></textarea> 
    </td>
</tr>
<tr>
	<td>Kota</td><td>:</td>
    <td>
    	<input type="text" name="xkota" size="20" maxlength="20" value="<?php echo $kor[7]?>"/>
    </td>
</tr>
<tr>
    <td colspan="3" align="center">
    	<input type="submit" value="Simpan" class="tombol"/>
        <input type="submit" value="Cancel" class="tombol"/>
    </td>
</tr>
</table>
</form>
</body>
</html>
<?php
}
?>