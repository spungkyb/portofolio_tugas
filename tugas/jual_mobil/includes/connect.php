<?php
/*$user="sinaga";
$database="sinaga";
$paswd="";
$host="192.168.10.250";
$koneksi = mysql_connect($host,$user,$paswd) or die("<h1>Koneksi ke Database Gagal</h1>");
$db = mysql_select_db($database,$koneksi) or die("<h1>Gagal Memilih database</h1>");*/
/*Jika dilab 
$xhost = "192.168.10.250";
$xuser = "a111509163";
$xdb = "a111509163";*/

//jika di laptop
$user="root";
$database="a111509163";
$host="localhost";
$paswd="";
$koneksi = mysql_connect($host,$user,$paswd) or die("<h1>Koneksi ke Database Gagal</h1>");
$db = mysql_select_db($database,$koneksi) or die("<h1>Gagal Memilih database</h1>");


?>