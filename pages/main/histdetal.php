<?php 
require_once '../../php_action/db_connect.php';
session_start();

if(!isset($_SESSION['logado'])):
	header('Location: ../login/login.php');
endif;

include_once '../global/header.php';
include_once '../global/navbar.php'; 
?>

<div class="container-fluid bg-light rounded" style="margin-top: 5%;  text-align: left;">
  <div class="row">
    <main class="col-md-12 col-lg-10 px-md-4" style="margin: 0 auto;">
      <h2 style="margin-top: 3%; text-align: center;">História Refinada</h2></br>
      <div class="table-responsive">
        <table class="table table-striped table-sm" style="margin-bottom: 3%;">
          <thead>
            <tr>
			  <th>ID da História</th>
              <th>O que?</th>
              <th>História Refinada</th>
			  <th>Responsável</th>
			  <th style="text-align: center;">Opções</th>
            </tr>
		  </thead>
			<tbody>
				<?php
					$sql = "SELECT * FROM histdetalhada";
					$resultado = mysqli_query($connect, $sql);

					if(mysqli_num_rows($resultado) > 0):

					while($dados = mysqli_fetch_array($resultado)):
				?>
				<tr>
					<td><?php echo $dados['id']; ?></td>
					<td><?php echo $dados['poisquero']; ?></td>
					<td><?php echo $dados['detalhamento']; ?></td>
					<td><?php echo $dados['responsavel']; ?></td>

					<td style="text-align: center;">

						<a href="edithistdetal.php?id=<?php echo $dados['id']; ?>"><i class="material-icons" style="color: primary;">create</i></a>
						<a href="delHistdetal.php?id=<?php echo $dados['id']; ?>"><i class="material-icons" style="color: red;">delete_sweep</i></a>
					
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
			<a href="addhistdetal.php" type="submit" class="w-100 btn btn-primary btn-lg">Adicionar nova história refinada</a>
		</div>

      </div>
    </main>
  </div>
</div>

<?php include_once '../global/footer.php'; ?>