<?php
    require_once '../../php_action/db_connect.php';
    include_once '../global/header.php';
	include_once '../global/navbar.php'; 
	
	if(isset($_GET['story'])):

		$story = mysqli_escape_string($connect, $_GET['story']);
		$sql = "SELECT * FROM historias WHERE story = '$story'";
		$resultado = mysqli_query($connect, $sql);
		$dados = mysqli_fetch_array($resultado);

	endif;

?>

<div class="container bg-light rounded" style="margin-top: 5%">
	<main>
		<div class="row g-3">
			<div class="col-md-7 col-lg-8" style="margin: 0 auto;">
				<h4 class="mb-3" style="margin-top: 3%;">Deseja realmente excluir esta história?</h4>
				<form action="../../php_action/delete.php" method="POST">

					<input type="hidden" name="story" value="<?php echo $dados['story'] ?>">

					<div class="row g-3">

						<div class="col-sm-6">
							<label for="quem" class="form-label">Quem?:</label>
							<input type="text" class="form-control" name="quem" id="quem" placeholder="Quem?" value="<?php echo $dados['quem'] ?>" required disabled>
						</div>

						<div class="col-6">
							<label for="gostaria" class="form-label">Gostaria de:</label>
							<input type="text" class="form-control" name="gostaria" id="gostaria" placeholder="Gostaria de:" value="<?php echo $dados['gostaria'] ?>" required disabled>
						</div>

						<div class="col-12">
							<label for="poisquero" class="form-label" >Pois eu quero:</label>
							<input type="text" class="form-control" name="poisquero" id="poisquero" placeholder="Pois eu quero" value="<?php echo $dados['poisquero'] ?>" required disabled>
						</div>

					</div>

					<hr class="my-4">

					<div class="row" style="margin-bottom: 3%;">

						<div class="col-6" style="margin-right: 0px;">
							<a href="historias.php" type="submit" class="w-100 btn btn-primary btn-lg">Voltar</a>
						</div>

						<div class="col-6" style="margin-left: 0px;">
							<button class="w-100 btn btn-success btn-lg" name="btn-deletarhistoria" type="submit">Confirmar</button>
						</div>

					</div>

				</form>
			</div>
		</div>
	</main>
</div>

<?php include_once '../global/footer.php'; ?>