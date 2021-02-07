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
		$sql = "SELECT * FROM histdetalhada WHERE id = '$id'";
		$resultado = mysqli_query($connect, $sql);
		$dados = mysqli_fetch_array($resultado);

	endif;

?>

<div class="container bg-light rounded" style="margin-top: 5%">
	<main>
		<div class="row g-3">
			<div class="col-md-7 col-lg-8" style="margin: 0 auto;">
				<h4 class="mb-3" style="margin-top: 3%;">Deseja realmente excluir esta história refinada?</h4>
				<form action="../../php_action/delete.php" method="POST">

					<input type="hidden" name="id" value="<?php echo $dados['id'] ?>">

					<div class="row g-3">

					<div class="col-sm-6">
							<label for="id" class="form-label">História</label>
							<input type="text" class="form-control" name="id" id="id" placeholder="id" value="<?php echo $dados['id'] ?>" required disabled>
						</div>

						<div class="col-6">
							<label for="responsavel" class="form-label" >Responsável</label>
							<input type="text" class="form-control" name="responsavel" id="responsavel" placeholder="Responsável" value="<?php echo $dados['responsavel'] ?>" required  disabled>
						</div>

						<div class="col-sm-12">
							<label for="poisquero" class="form-label">Quero:</label>
							<input type="text" class="form-control" name="poisquero" id="poisquero" placeholder="poisquero" value="<?php echo $dados['poisquero'] ?>" required disabled>
						</div>

						<div class="col-12">
							<label for="detalhamento" class="form-label">História Refinada</label>
							<input type="text" class="form-control" name="detalhamento" id="detalhamento" placeholder="" value="<?php echo $dados['detalhamento'] ?>" required  disabled>
						</div>

						

					</div>

					<hr class="my-4">

					<div class="row" style="margin-bottom: 3%;">

						<div class="col-6" style="margin-right: 0px;">
							<a href="histdetal.php" type="submit" class="w-100 btn btn-primary btn-lg">Voltar</a>
						</div>

						<div class="col-6" style="margin-left: 0px;">
							<button class="w-100 btn btn-success btn-lg" name="btn-deletarhistdetal" type="submit">Confirmar</button>
						</div>

					</div>

				</form>
			</div>
		</div>
	</main>
</div>

<?php include_once '../global/footer.php'; ?>