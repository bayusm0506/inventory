<?php
session_start();
$id_trx = $_SESSION['id_trx_retur'];
$id_barang = $_REQUEST['id_barang'];
$jml_retur = $_REQUEST['jml_retur'];
$hrg_beli = $_REQUEST['hrg_beli'];
$sub_total = $jml_retur * $hrg_beli;
include('../../koneksi/koneksi.php');
$sql = "INSERT INTO temp_barang VALUES('','$id_trx','$id_barang','$jml_retur','$hrg_beli','$sub_total',NULL)";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('msg'=>'Some errors occured.'));
}
?>