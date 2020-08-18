<?php 

$notificacoes = 1;

// Variáveis dos Menus

$item1 = 'home';
$item2 = 'medicos';
$item3 = 'func';
$item4 = 'notificacoes';

// Verificar qual o Menu clicado e passar a classe ativo

if(@$_GET['acao'] == $item1) {

	$item1ativo = 'active';

} elseif (@$_GET['acao'] == $item2 or isset($_GET[$item2])) {

	$item2ativo = 'active';

} elseif (@$_GET['acao'] == $item3) {

	$item3ativo = 'active';

} elseif (@$_GET['acao'] == $item4) {

	$item4ativo = 'active';

} else {

	$item1ativo = 'active';
}


?>


<!-- Html5 - Bootstrap -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Painel Administrativo</title>

	<!-- utf-8 -->
	<meta charset="utf-8">
	<!-- Responsivo em Despositivos moveis -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSS bootstrap 4.5 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<!-- CSS local -->
	<link rel="stylesheet" href="../css/painel.css">

	<!-- favicon -->
	<link rel="shortcut icon" href="../img/favicon/favicon.ico" type="image/x-icon">
	<link rel="icon" href="../img/favicon/favicon.ico" type="image/x-icon">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

	<!-- jquery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>

	<!--Navbar Administrativo -->

	<nav class="navbar navbar-light bg-light">
		<div class="col-md-12">
			<img class="float-left" src="../img/logo-painel.png">
			<li class="float-right nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administrador - Johnny</a>

				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="#">Sair</a>
				</div>

			</li>


		</div>
	</nav>

	<!-- Menu Nav -->
	<div class="container-fluid mt-4">
		<div class="row">
			<div class="col-md-3 col-sm-12 mb-4">
				<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					
					<a class="nav-link <?php echo $item1ativo ?>" id="v-pills-home-tab" href="index.php?acao=<?php echo $item1 ?>" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fas fa-home mr-1"></i>Home</a>
					
					<a class="nav-link <?php echo $item2ativo ?>" id="link-medicos" href="index.php?acao=<?php echo $item2 ?>" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-user-md mr-1"></i>Cadastro de Médicos</a>
					
					<a class="nav-link <?php echo $item3ativo ?>" id="v-pills-messages-tab" href="index.php?acao=<?php echo $item3 ?>" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fas fa-user mr-1"></i>Cadastro de Funcionários</a>
					

					<!-- Condição de Notificações Modificar-->
					<?php if ($notificacoes > 0) { ?>

						<a class="nav-link <?php echo $item4ativo ?>" id="v-pills-messages-tab" href="index.php?acao=<?php echo $item4 ?>" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fas fa-user mr-1"></i>Notificações</a>

					<?php } ?>

				</div>
			</div>
			<div class="col-md-9 col-sm-12">
				<div class="tab-content" id="v-pills-tabContent">
					
					

					<div class="tab-pane fade show active" role="tabpanel">

						<?php if(@$_GET['acao'] == $item1) {

							include_once($item1.".php");

						} elseif (@$_GET['acao'] == $item2 or isset($_GET[$item2])) {
							
							include_once($item2.".php");

						} elseif (@$_GET['acao'] == $item3) {
							
							include_once($item3.".php");

						} elseif (@$_GET['acao'] == $item4) {

							include_once($item4.".php");

						} else {

							include_once($item1.".php");

						}

						?>

					</div>	
				</div>
			</div>
		</div>

	</div>


</body>
</html>