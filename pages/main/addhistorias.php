<?php
	session_start();

	if(!isset($_SESSION['logado'])):
		header('Location: ../login/login.php');
	endif;

    include_once '../global/header.php';
    include_once '../global/navbar.php'; 
?>

<div class="container bg-light rounded" style="margin-top: 5%">
	<main>
		<div class="row g-3">
			<div class="col-md-7 col-lg-8" style="margin: 0 auto;">
				<h4 class="mb-3" style="margin-top: 3%;">Adicionar histórias</h4>
				<form action="../../php_action/create.php" method="POST">

					<div class="row g-3">

						<div class="col-sm-6">
							<label for="quem" class="form-label">Quem?</label>
							<input type="text" class="form-control" name="quem" id="quem" placeholder="Quem?" required>
						</div>

						<div class="col-6">
							<label for="gostaria" class="form-label">Gostaria de:</label>
							<input type="text" class="form-control" name="gostaria" id="gostaria" placeholder="Gostaria de:">
						</div>

						<div class="col-12">
							<label for="poisquero" class="form-label" >Pois eu quero:</label>
							<input type="text" class="form-control" name="poisquero" id="poisquero" placeholder="Pois eu quero" required>
						</div>

					</div>

					<hr class="my-4">

					<div class="row" style="margin-bottom: 3%;">

						<div class="col-6" style="margin-right: 0px;">
							<a href="historias.php" type="submit" class="w-100 btn btn-primary btn-lg">Voltar</a>
						</div>

						<div class="col-6" style="margin-left: 0px;">
							<button class="w-100 btn btn-success btn-lg" name="btn-adicionarhistoria" type="submit">Adicionar</button>
						</div>

					</div>

				</form>
			</div>
		</div>
	</main>
</div>

<?php include_once '../global/footer.php'; ?>