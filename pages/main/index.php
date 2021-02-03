<?php 
    require_once '../../php_action/db_connect.php';
    include_once '../global/header.php';
    include_once '../global/navbar.php';
?>

<div class="container-fluid bg-light rounded" style="margin-top: 5%; text-align: left;">
  <div class="row">
    <main class="col-md-9 col-lg-10 px-md-4" style="margin: 0 auto;">
      <h2 style="margin-top: 3%; text-align: center;">Usuários</h2></br>
      <div class="table-responsive">
        <table class="table table-striped table-sm" style="margin-bottom: 3%;">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Sobrenome</th>
              <th>E-mail</th>
			  <th style="text-align: center;">Opções</th>
            </tr>
		  </thead>
			<tbody>
				<?php
					$sql = "SELECT * FROM usuario";
					$resultado = mysqli_query($connect, $sql);

					if(mysqli_num_rows($resultado) > 0):

					while($dados = mysqli_fetch_array($resultado)):
				?>
				<tr>
					<td><?php echo $dados['nome']; ?></td>
					<td><?php echo $dados['sobrenome']; ?></td>
					<td><?php echo $dados['email']; ?></td>

					<td style="text-align: center;">
					
						<a href="edit.php?id=<?php echo $dados['id']; ?>"><i class="material-icons" style="color: primary;">create</i></a>
						<a href="del.php?id=<?php echo $dados['id']; ?>"><i class="material-icons" style="color: red;">delete_sweep</i></a>
				
					</td>
					
				</tr>
				<?php
					endwhile;
					else:
				?>
				<tr>
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

		<hr class="my-4">

		<div class="col-6" style="margin-bottom: 3%; margin-left: auto; margin-right: auto;">
			<a href="add.php" type="submit" class="w-100 btn btn-primary btn-lg">Novo Cadastro</a>
		</div>

      </div>
    </main>
  </div>
</div>

<?php include_once '../global/footer.php'; ?>