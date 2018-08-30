<?php
session_start();
$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
$offset = ($page-1)*$rows;
$result = array();
include('../../koneksi/koneksi.php');
$id_trx=$_SESSION['id_trx_retur'];
$rs = mysql_query("SELECT COUNT(*) FROM temp_barang WHERE id_trx='$id_trx'");
$row = mysql_fetch_row($rs);
$result["total"] = $row[0];
$rs = mysql_query("SELECT * FROM barang,temp_barang WHERE barang.id_barang = temp_barang.id_barang AND temp_barang.id_trx='$id_trx' LIMIT $offset,$rows");
$items = array();
while($row = mysql_fetch_object($rs)){
	array_push($items, $row);
}
$result["rows"] = $items;
echo json_encode($result);
?>