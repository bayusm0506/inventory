<?php
include('../../koneksi/koneksi.php');
session_start();
$id_trx=$_POST['id_trx'];
$id_keluar=$_POST['id_keluar'];
$tgl=date('Ymd');
$id_user=$_SESSION['id_user'];
$query_ambil_item="SELECT *, SUM(jml) as total_retur FROM temp_barang WHERE id_trx='$id_trx' GROUP BY id_barang";
$sql_ambil_item=mysql_query($query_ambil_item);
while($rows_ambil_item=mysql_fetch_array($sql_ambil_item)){
	$id_barang=$rows_ambil_item['id_barang'];
	$jml_retur=$rows_ambil_item['total_retur'];
	$hrg_beli=$rows_ambil_item['hrg'];
	$sub_total=$rows_ambil_item['sub_total'];
	$time=$rows_ambil_item['time'];

	$query_ambil_stok="SELECT * FROM barang WHERE id_barang='$id_barang'";
	$sql_ambil_stok=mysql_query($query_ambil_stok);
	$rows_ambil_stok=mysql_fetch_array($sql_ambil_stok);
	$stok_awal=$rows_ambil_stok['stok'];
	$stok_akhir=$stok_awal+$jml_retur;

	$query_update_stok="UPDATE barang SET stok='$stok_akhir' WHERE id_barang='$id_barang'";
	$sql_update_stok=mysql_query($query_update_stok);
	if($sql_update_stok){

	$query_detail_retur="INSERT INTO detail_retur VALUES('','$id_trx','$id_barang','$stok_awal','$jml_retur','$hrg_beli','$sub_total','$time')";
	$sql_detail_retur=mysql_query($query_detail_retur);
	}
	$stt="ok";
}
if("ok"){
$query_retur="INSERT INTO retur_barang VALUES('$id_trx','$id_keluar','$id_user','$tgl','Retur Barang Keluar')";
$sql_retur=mysql_query($query_retur);

$empty_temp=mysql_query("DELETE FROM temp_barang WHERE id_trx='$id_trx'");

$_SESSION['id_trx_retur']="";
unset($_SESSION['id_trx_retur']);
echo "<script type='text/javascript'> 
	alert('Retur Barang berhasil diproses..'); window.location='../../retur_keluar.php'; </script> ";
}
else{
echo "<script type='text/javascript'> 
	alert('Gagal memproses Retur!!!..'); window.location='../../retur_keluar.php'; </script> ";
}
?>