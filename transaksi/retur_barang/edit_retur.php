<?php
$id_trx = $_REQUEST['id_trx'];
$id_barang = $_REQUEST['id_barang'];
$jml_retur = $_REQUEST['jml'];
$hrg_beli = $_REQUEST['hrg_beli'];
$sub_total = $jml_retur * $hrg_beli;
include('../../koneksi/koneksi.php');
$sql = "UPDATE temp_barang SET jml='$jml_retur', sub_total='$sub_total' WHERE id_barang='$id_barang' AND id_trx='$id_trx'";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('msg'=>'Some errors occured.'));
}
?>