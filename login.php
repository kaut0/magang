<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>
<body>
	<br/>
	<br/>
	<center><h2>LOGIN LP3I</h2></center>	
	<br/>
	<div class="login">
	<br/>
		<form action="proses/Plogin.php" method="post" onSubmit="return validasi()">
			<div>
				<label>Username:</label>
				<input type="text" name="username" id="username" placeholder="Masukkan Username Anda"/>
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" placeholder="Masukkan Password Anda"/>
			</div>			
			<div>
				<input type="submit" value="Login" class="tombol">
			</div>
		</form>
	</div>
</body>

<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
</script>
</html>