<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Login form Bukubukaka</title>



	<link rel="stylesheet" href="csslogin/style.css">


</head>

<body>
	<center>
		<img src="image/lg.png" width="200" height="100">
	</center>

	<body>
		<div class="container">
			<section id="content">
				<form action="proses.php?op=in" name="login" method="post" id="from-login">
					<h1>Login Admin</h1>
					<div>
						<input type="text" name="username" placeholder="Username" required="" id="username" />
					</div>
					<div>
						<input type="password" name="password" placeholder="Password" required="" id="password" />
					</div>
					<div>
						<input type="submit" value="Login" />
						<a href="menuuser.php">Back</a>
						<a href="regist.php">Buat akun admin</a>

					</div>
				</form><!-- form -->
				<div class="button">
					<a href="#">STMIK SUMEDANG</a>
				</div><!-- button -->
			</section><!-- content -->
		</div><!-- container -->
	</body>

	<script src="jslogin/index.js"></script>

</body>

</html>