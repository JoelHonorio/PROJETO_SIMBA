<?php 
    require_once '../../php_action/db_connect.php';
    require_once '../global/message.php';
    include_once '../global/header.php';
    include_once '../global/navbar.php'; 
?>

<div class="container-fluid bg-light rounded" style="margin-top: 5%;  text-align: left;">
  <div class="row">
    <main class="col-md-9 col-lg-10 px-md-4" style="margin: 0 auto;">
      <h2 style="margin-top: 3%;">Lista de Cadastros</h2></br>
      <div class="table-responsive">
        <table class="table table-striped table-sm" style="margin-bottom: 3%;">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Sobrenome</th>
              <th>E-mail</th>
			  <th>Idade</th>
			  <th style="text-align: center;">Opções</th>
            </tr>
		  </thead>
			<tbody>
				<?php
					$sql = "SELECT * FROM clientes";
					$resultado = mysqli_query($connect, $sql);

					if(mysqli_num_rows($resultado) > 0):

					while($dados = mysqli_fetch_array($resultado)):
				?>
				<tr>
					<td><?php echo $dados['nome']; ?></td>
					<td><?php echo $dados['sobrenome']; ?></td>
					<td><?php echo $dados['email']; ?></td>
					<td><?php echo $dados['idade']; ?></td>

					<td style="text-align: center;">
					
						<a href="edit.php?id=<?php echo $dados['id']; ?>">Editar</a>
						<a href="#modal<?php echo $dados['id']; ?>">Deletar</a>
				
					</td>
				
					<div id="modal<?php echo $dados['id']; ?>" class="modal">
						<div class="modal-content">
							<h4>Opa!</h4>
							<p>Tem certeza que deseja excluir este cliente?</p>
						</div>
						<div class="modal-footer">
							<form action="../../php_action/delete.php" method="POST">
								<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
								<button type="submit" name="btn-deletar" class="btn red">Sim quero deletar</button>
								<a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
							</form>
						</div>
					</div>
					
				</tr>
				<?php
					endwhile;
					else:
				?>
				<tr>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td style="text-align: center;">-</td>
				</tr>
				<?php
					endif;
				?>
			</tbody>
			
		</table>

		<div class="col-6" style="margin-bottom: 3%;">
			<a href="add.php" type="submit" class="w-100 btn btn-primary btn-lg">Adicionar Cliente</a>
		</div>

      </div>
    </main>
  </div>
</div>

<?php include_once '../global/footer.php'; ?>