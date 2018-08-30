<?php 
session_start();
if(empty($_SESSION['id_user'])&&empty($_SESSION['nm_level'])){
header("location:login.php");
}
else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistem Stok</title>
<link rel="stylesheet" type="text/css" href="mycss/index.css">
<link rel="stylesheet" type="text/css" href="jquery_easyui/themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="jquery_easyui/themes/icon.css">
<link rel="stylesheet" type="text/css" href="jquery_easyui/themes/panel.css" />
<script type="text/javascript" src="jquery_easyui/jquery.min.js"></script>
<script type="text/javascript" src="jquery_easyui/jquery.easyui.min.js"></script>
<script>
function addTab(title, url){
			if ($('#tt').tabs('exists', title)){
				$('#tt').tabs('select', title);
			} else {
				var content = '<iframe scrolling="auto" frameborder="0"  src="'+url+'" style="width:100%;height:100%;"></iframe>';
				$('#tt').tabs('add',{
					title:title,
					content:content,
					closable:true
				});
			}
		}
	</script>
</head>

<body>
<div id="header">
</div>
<div id="navigasi">
<div style="width:200px;height:auto;padding:5px;float:left; margin-right:10px;background:#7190E0; ">
<div class="easyui-panel" title="DATA MASTER" collapsed="true" collapsible="true" style="width:200px;height:auto;padding:10px;">
<a href="#" class="easyui-linkbutton" iconCls="icon-user" plain="true" onClick="addTab('Data User','user.php')">Data User</a><br />
<a href="#" class="easyui-linkbutton" iconCls="icon-shop" plain="true" onClick="addTab('Data Outlet','outlet.php')">Data Outlet</a><br />
<a href="#" class="easyui-linkbutton" iconCls="icon-supplier" plain="true" onClick="addTab('Data Supplier','supplier.php')">Data Supplier</a><br />
<a href="#" class="easyui-linkbutton" iconCls="icon-box" plain="true" onClick="addTab('Jenis Barang','jenis_barang.php')">Jenis Barang</a><br />
<a href="#" class="easyui-linkbutton" iconCls="icon-box-fill" plain="true" onClick="addTab('Data Barang','barang.php')">Data Barang</a><br />
</div>
<br/>
<div class="easyui-panel" title="TRANSAKSI" collapsible="true" style="width:200px;height:auto;padding:10px;">
<a href="#" class="easyui-linkbutton" iconCls="icon-trolly" plain="true" onClick="addTab('Barang Masuk','barang_masuk.php')">Barang Masuk</a><br />
<a href="#" class="easyui-linkbutton" iconCls="icon-truck" plain="true" onClick="addTab('Barang Keluar','barang_keluar.php')">Barang Keluar</a><br />
<a href="#" class="easyui-linkbutton" iconCls="icon-stack-f" plain="true" onClick="addTab('Retur Barang Masuk','retur_masuk.php')">Retur Barang Masuk</a><br />
<a href="#" class="easyui-linkbutton" iconCls="icon-stack-e" plain="true" onClick="addTab('Retur Barang Keluar','retur_keluar.php')">Retur Barang Keluar</a>
</div><br />
<div class="easyui-panel" title="LAPORAN" collapsible="true"  style="width:200px;height:auto;padding:10px;">
<a href="#" class="easyui-linkbutton" iconCls="icon-report1" plain="true" onClick="addTab('Laporan Penjualan','laporan/penjualan/pilih_lap.php')">Penjualan</a><br />
<a href="#" class="easyui-linkbutton" iconCls="icon-report2" plain="true" onClick="addTab('Laporan Barang Masuk','laporan/barang_masuk/pilih_lap.php')">Barang Masuk</a><br />
<a href="#" class="easyui-linkbutton" iconCls="icon-report3" plain="true" onClick="addTab('Laporan Barang Keluar','laporan/barang_keluar/pilih_lap.php')">Barang Keluar</a><br />
<a href="#" class="easyui-linkbutton" iconCls="icon-report4" plain="true" onClick="addTab('Laporan Stok Barang','laporan/stok_barang/pilih_lap.php')">Stok Barang</a>
</div>
<div class="easyui-panel" title="AKSES" collapsible="true"  style="width:200px;height:auto;padding:10px;">
<a href="akses/logout.php" class="easyui-linkbutton" iconCls="icon-logout" plain="true">Logout</a>
</div>
</div>
</div>
<div id="isi">
<div id="tt" class="easyui-tabs" style="height:500px;">
<div title="Home" style="padding-top:;  text-align:left; background-image:url(mycss/images/.png);  background-repeat:no-repeat; " >

<?php
include 'koneksi/fungsi_tanggal.php';
include 'koneksi/library.php';
 
 echo "<h2>Selamat Datang</h2>";
 echo " <b>$_SESSION[nm_user] </b>, di Aplikasi Inventory.";
 
 echo"<p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p>
          <b><p align=right>Login : $hari_ini, ";
  echo (date("d-M-Y")); 
  echo " | "; 
  echo date("H:i:s");
  echo " WIB</p></b>";
  ?>
</div>

</div>

</div>
<div id="footer">
Copyright &copy; - KP STTQ <?php echo date("Y"); ?> - <a href="" target="_blank"><span class="cls_hdt"></span>  <?php echo $_SESSION["nm_user"]; ?></a>
</div>
</body>
</html>
<?php } ?>