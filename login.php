<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link rel="stylesheet" type="text/css" href="mycss/login.css" />
<script type="text/javascript" src="jquery_easyui/jquery.min.js"></script>
<script type="text/javascript" src="libs_js/login.js"></script>
</head>

<body>
<div class="lg-container">
		<h2>LOGIN</h2>
		<div>
          <center><embed src="mycss/images/BNE.png" ></embed></object></center>
      </div></td>
		<form action="akses/p_login_gudang.php" id="lg-form" name="lg-form" method="post">
		
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
Copyright &copy;  KP STTQ - <?php echo date("Y"); ?>  <a href="" target="_blank"><span class="cls_hdt"></span>  </a>
</div>
		<div id="message"></div>
</div>
</body>
</html>