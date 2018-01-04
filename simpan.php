<?php
include "koneksi.php";

$cnama=$_POST['xnama'];
$cemail=$_POST['xemail'];
$cpesan=$_POST['xpesan'];




$kuery = "insert into contactme (nama,email,pesan) values ('$cnama','$cemail','$cpesan')";
mysql_query($kuery,$konek);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script>
	window.alert("Pesan Terkirim");
	window.history.back();

</script>
</body>
</html>