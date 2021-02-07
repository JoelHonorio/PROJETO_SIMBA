<?php

	require_once '../../php_action/db_connect.php';
	session_start();

	if(!isset($_SESSION['logado'])):
		header('Location: ../login/login.php');
	endif;
	
    include_once '../global/header.php';
	include_once '../global/navbar.php'; 
	
	if(isset($_GET['id'])):

		$id = mysqli_escape_string($connect, $_GET['id']);
		$sql = "SELECT * FROM usuario WHERE id = '$id'";
		$resultado = mysqli_query($connect, $sql);
		$dados = mysqli_fetch_array($resultado);

	endif;

?>

<div class="container bg-light rounded" style="margin-top: 5%">
	<main>
		<div class="row g-3">
			<div class="col-md-7 col-lg-8" style="margin: 0 auto;">
				<h4 class="mb-3" style="margin-top: 3%;">Deseja realmente excluir este usuário?</h4>
				<form action="../../php_action/delete.php" method="POST">

					<input type="hidden" name="id" value="<?php echo $dados['id'] ?>">

					<div class="row g-3">

						<div class="col-sm-6">
							<label for="nome" class="form-label">Nome</label>
							<input type="text" class="form-control" name="nome" id="nome" value="<?php echo $dados['nome'] ?>" placeholder="Nome" required disabled>
						</div>

						<div class="col-sm-6">
							<label for="sobrenome" class="form-label">Sobrenome</label>
							<input type="text" class="form-control" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome'] ?>" placeholder="Sobrenome" required disabled>
						</div>

						<div class="col-12">
							<label for="email" class="form-label">E-mail</label>
							<input type="email" class="form-control" name="email" id="email" value="<?php echo $dados['email'] ?>" placeholder="email@email.com" required disabled>
						</div>

					</div>

					<hr class="my-4">

					<div class="row" style="margin-bottom: 3%;">

						<div class="col-6" style="margin-right: 0px;">
							<a href="index.php" type="submit" class="w-100 btn btn-primary btn-lg">Cancelar</a>
						</div>

						<div class="col-6" style="margin-left: 0px;">
							<button class="w-100 btn btn-success btn-lg" name="btn-deletar" type="submit">Confirmar</button>
						</div>

					</div>

				</form>
			</div>
		</div>
	</main>
</div>

<?php include_once '../global/footer.php'; ?>