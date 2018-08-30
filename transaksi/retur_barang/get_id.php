<?php
session_start();
include('../../koneksi/koneksi.php');
$query_id_max="SELECT MAX(id_retur) as max_id FROM retur_barang";
$sql_id_max=mysql_query($query_id_max);
$rows_id_max=mysql_fetch_array($sql_id_max);
$max_id=$rows_id_max['max_id']; 
$kode_req="RET".date('mdY'); 
$no_urut=substr($max_id,-5); 
$new_urut=$no_urut+1; 
$id_trx=$kode_req.sprintf("%05s",$new_urut); 
$_SESSION['id_trx_retur']=$id_trx;
$data=array("id_trx"=>$id_trx);
echo json_encode($data);
?>