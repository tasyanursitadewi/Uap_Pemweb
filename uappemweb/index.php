<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<br/>
	<br/>
	<center><h2>USER LOGIN</h2></center>	
	<br/>
	<div class="login">
	<br/>
		<form action="login.php" method="post" onSubmit="return validasi()">
			<div>
				<label>Username:</label>
				<input type="text" name="username" id="username" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" />
			</div>			
			<div>
				<input type="submit" value="login" class="tombol">
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
			alert('Username dan Password harus di isi!');
			return false;
		}
	}
	</script>
<?php
if(isset($_GET['pesan'])){
	if($_GET['pesan'] == "gagal"){
		echo "<center><h2><b>Login gagal! Username atau Password anda salah!</b></h2></center>";
	}
}
?>
</html>