<?php
/**
 * using mysqli_connect for database connection
 */

$databaseHost = 'localhost';
$databaseName = 'db_crud';
$databaseUsername = 'moth';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

//TIMEZONE
date_default_timezone_set("Asia/Jakarta");
$date= date("Y-m-d");

//Nomor Urut Input Kode_Buku
$result = mysqli_query($mysqli, "SELECT max(no_buku) as maxKode From list_buku");
$user_data = mysqli_fetch_array($result);
$noKode = $user_data['maxKode'];
$no = (int) substr($noKode, 9, 3);
$no++;
$tahun=substr($date, 0, 4);
$bulan=substr($date, 5, 2);
$id_no = $tahun .$bulan . sprintf("%03s", $no);

?>
