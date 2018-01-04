<?php
$myObj->name = "John";
$myObj->age = 30;
$myObj->city = "New York";
$myObj->alamat = "Jl. Buntu banyak begal";

$myJSON = json_encode($myObj);

echo $myJSON;
?>
