<?php
ini_set("display_errors",0);

// Definisi database
include("includes/defines.php");

// Kumpulan fungsi
include("includes/fungsi.php");

// Koneksi ke database
include("includes/connect.php");

// Membuat session login
cekSession();
?>

<html>
	<head>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
		<title>Mobil</title>
				
		<!-- CSS untuk menu -->
		<link type="text/css" rel="stylesheet" href="css/menu.css" />
		
		<?php
			// Memanggil jquery AJAX
			getAjax();
		?>
	</head>
	<body>
		<center>
			<div>
				<div style="float:right">
				
					<!-- Form pencarian mobil -->
					<form method="get" action="index.php">
						<input name="page" type="hidden" value="view_mobil" />
						<input name="txtCari" type="text" />
						<input type="submit" name="btnCari" value="Cari" />
					</form>
				</div>
				<div class="navigasi">
				
					<!-- Menampilkan menu -->
					<?php getMenu(); ?>
				</div>
				<div>
				
					<!-- Menampilkan page/halaman dinamis -->
					<?php getPage($_REQUEST['page']); ?>
				</div>					
			</div>
		</center>
	</body>
</html>