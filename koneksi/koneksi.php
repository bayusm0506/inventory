<?php
$user_db="root";
$pass_db="bsm";
$server_db="localhost";
$nama_db="mypro_inventory";
$koneksi=mysql_connect($server_db,$user_db,$pass_db) or die(mysql_error());
$pilih_db=mysql_select_db($nama_db);
?>