<?php 
$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
$offset = ($page-1)*$rows;
include('../../koneksi/koneksi.php');
$id_trx=$_REQUEST['id_trx'];
$tr=$_GET['tr'];
$items = array();
$result = array();
if($tr=="out"){
	$rs = mysql_query("SELECT COUNT(*) FROM detail_barang_keluar 
	WHERE id_keluar='$id_trx'");
	$row = mysql_fetch_row($rs);
	$result["total"] = $row[0];
	$rs = mysql_query("SELECT * FROM barang,detail_barang_keluar 
	WHERE barang.id_barang = detail_barang_keluar.id_barang 
	AND detail_barang_keluar.id_keluar='$id_trx' LIMIT $offset,$rows");
}
else if($tr=="in"){
	$id_trx=$_REQUEST['id_trx'];
	$rs = mysql_query("SELECT COUNT(*) FROM detail_barang_masuk 
	WHERE id_masuk='$id_trx'");
	$row = mysql_fetch_row($rs);
	$result["total"] = $row[0];
	$rs = mysql_query("SELECT * FROM barang,detail_barang_masuk 
	WHERE barang.id_barang = detail_barang_masuk.id_barang 
	AND detail_barang_masuk.id_masuk='$id_trx' LIMIT $offset,$rows");
}
while($row = mysql_fetch_object($rs)){
	array_push($items, $row);
}
$result["rows"] = $items;
echo json_encode($result);
?>