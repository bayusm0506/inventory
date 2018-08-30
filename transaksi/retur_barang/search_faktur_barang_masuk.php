<?php
include('../../koneksi/koneksi.php');
if(isset($_POST['button_cari'])){
$cari=$_POST['cari_id_faktur'];
$query_faktur="SELECT * FROM barang_masuk WHERE id_masuk='$cari'";
$sql_faktur=mysql_query($query_faktur);
$count=mysql_num_rows($sql_faktur);
if($count>0) {
	$row = mysql_fetch_assoc($sql_faktur);
	$pesan = 1;
	} 
else {
	$pesan = 0;
	$row="";
	}
	$response = array('pesan'=>$pesan,'data'=>$row);
	echo json_encode($response);
}
?>