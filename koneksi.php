<?php

$conn = sqli_connect('localhost','root','','shopping_cart');

if (!$conn) {
	die ("Koneksi gagal." . mysql_connect_error()); // close koneksi
}
?>