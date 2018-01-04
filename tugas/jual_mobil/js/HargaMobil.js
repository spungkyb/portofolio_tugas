// JavaScript Document

function hargamobil(){
	var KodeMBL = document.getElementById('Kodemobil');
	var Kodemobil = KodeMBL.value;
    var url = "hargaMobil.php?Kodemobil=" + Kodemobil;
    //ambilData(url, "formHarga");
	ambilData(url, "Harga");
	}