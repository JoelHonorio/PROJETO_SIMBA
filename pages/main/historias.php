<?php 
    require_once '../../php_action/db_connect.php';
    include_once '../global/header.php';
    include_once '../global/navbar.php'; 
?>

<div class="container-fluid bg-light rounded" style="margin-top: 5%;  text-align: left;">
  <div class="row">
    <main class="col-md-12 col-lg-10 px-md-4" style="margin: 0 auto;">
      <h2 style="margin-top: 3%;">Histórias</h2></br>
      <div class="table-responsive">
        <table class="table table-striped table-sm" style="margin-bottom: 3%;">
          <thead>
            <tr>
              <th>Quem?</th>
              <th>Gostaria de</th>
			  <th>Pois eu quero</th>
			  <th style="text-align: center;">Opções</th>
            </tr>
		  </thead>
			<tbody>
				<?php
					$sql = "SELECT * FROM historias";
					$resultado = mysqli_query($connect, $sql);

					if(mysqli_num_rows($resultado) > 0):

					while($dados = mysqli_fetch_array($resultado)):
				?>
				<tr>
					<td><?php echo $dados['quem']; ?></td>
					<td><?php echo $dados['gostaria']; ?></td>
					<td><?php echo $dados['poisquero']; ?></td>

					<td style="text-align: center;">

						<a href="edithistorias.php?story=<?php echo $dados['story']; ?>"><i class="material-icons" style="color: primary;">create</i></a>
						<a href="delHis.php?story=<?php echo $dados['story']; ?>"><i class="material-icons" style="color: red;">delete_sweep</i></a>
					
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
			<a href="addhistorias.php" type="submit" class="w-100 btn btn-primary btn-lg">Adicionar nova história</a>
		</div>

      </div>
    </main>
  </div>
</div>

<?php include_once '../global/footer.php'; ?>