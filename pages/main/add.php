<?php
    include_once '../global/header.php';
    include_once '../global/navbar.php'; 
?>

<div class="container bg-light rounded" style="margin-top: 5%">
	<main>
		<div class="row g-3">
			<div class="col-md-7 col-lg-8" style="margin: 0 auto;">
				<h4 class="mb-3" style="margin-top: 3%;">Novo Cadastro</h4>
				<form action="../../php_action/create.php" method="POST">

					<div class="row g-3">

						<div class="col-sm-6">
							<label for="nome" class="form-label">Nome</label>
							<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required>
						</div>

						<div class="col-sm-6">
							<label for="sobrenome" class="form-label">Sobrenome</label>
							<input type="text" class="form-control" name="sobrenome" id="sobrenome" placeholder="Sobrenome" required>
						</div>

						<div class="col-12">
							<label for="email" class="form-label">E-mail</label>
							<input type="email" class="form-control" name="email" id="email" placeholder="email@email.com" required>
						</div>

						<div class="col-sm-6">
							<label for="senha" class="form-label">Senha</label>
							<input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" required>
						</div>

						<div class="col-sm-6">
							<label for="senha_c" class="form-label">Repita a senha</label>
							<input type="password" class="form-control" name="senha_c" id="senha_c" placeholder="Repita a senha" required>
						</div>

					</div>

					<hr class="my-4">

					<div class="row" style="margin-bottom: 3%;">

						<div class="col-6" style="margin-right: 0px;">
							<a href="index.php" type="submit" class="w-100 btn btn-primary btn-lg">Voltar</a>
						</div>

						<div class="col-6" style="margin-left: 0px;">
							<button class="w-100 btn btn-success btn-lg" name="btn-cadastrar" type="submit">Cadastrar</button>
						</div>

					</div>

				</form>
			</div>
		</div>
	</main>
</div>

<?php include_once '../global/footer.php'; ?>