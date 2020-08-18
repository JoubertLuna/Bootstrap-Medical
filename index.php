<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>SM MEDICAL</title>

	<!-- utf-8 -->
	<meta charset="utf-8">
	<!-- Responsivo em Despositivos moveis -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- CSS bootstrap 4.5 -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

		<!-- CSS local -->
		<link rel="stylesheet" href="css/login.css">

		<!-- favicon -->
		<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
		<link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">
</head>
<body>

	<div class="login-form">
		<form action="" method="post">
			<div class="logo">
				<img src="img/logo.jpg" alt="SM MEDICAL">
			</div>

			<!-- Texto acessar sistema -->	
			<h2 class="text-center">
				ACESSAR SISTEMA
			</h2>

			<!-- Insira seu email -->
			<div class="form-group">
				<input class="form-control" type="email" name="usuario" placeholder="Insira seu email" required>
			</div>

			<!-- Insira sua senha -->
			<div class="form-group">
				<input class="form-control" type="password" name="senha" placeholder="Insira sua senha" required>
			</div>

			<!-- Botão login -->
			<div class="form-group">
				<button class="btn btn-primary btn-lg btn-block" type="submit" name="btn-login">LOGIN</button>
			</div>

			<!-- checkbox e recuperar senha -->
			<div class="clearfix">
				<label class="float-left checkbox-inlene">
					<input type="checkbox">Lembrar
				</label>
				<a href="#" class="float-right">Recuperar senha</a>
				
			</div>

		</form>
		
	</div>

</body>
</html>