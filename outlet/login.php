<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Penjualan</title>
<link rel="stylesheet" type="text/css" href="../mycss/login.css" />
<script type="text/javascript" src="../jquery_easyui/jquery.min.js"></script>
<script type="text/javascript" src="../libs_js/login.js"></script>
</head>

<body>
<div class="lg-container">
		<h2>LOGIN</h2>
		<div><td width="26%" > <div align="center"> 
        <object classid="clsid:166B1BCA-3F9C-11CF-8075-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/director/sw.cab#version=8,5,0,0" width="150" height="150">
          <param name="src" value="../mycss/images/jam_analog.swf">
          <embed src="../mycss/images/jam_analog.swf" pluginspage="http://www.macromedia.com/shockwave/download/" width="150" height="150"></embed></object>
      </div></td>
		<form action="../akses/p_login_outlet.php" id="lg-form" name="lg-form" method="post">
			
		  <div>
			<label for="username"></label>
			 <b>Username:</b> <input type="text" name="username" id="username" placeholder=""/>
		  </div>
			
			<div>
				<label for="password"></label>
				<b>Password:</b> <input type="password" name="password" id="password" placeholder="" />
			</div>
			
			<div>				
				<button type="submit" id="login">Login</button>
			</div>
			
		</form>
		<div id="footer">
Copyright &copy; <?php echo date("Y"); ?>  <a href="" target="_blank"><span class="cls_hdt"></span>  </a>
</div>
		<div id="message"></div>
</div>
</body>
</html>