<?php

session_start();

require_once 'db_connect.php';

if(isset($_POST['btn-deletar'])):
	
	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "DELETE FROM clientes WHERE id = '$id'";

	if(mysqli_query($connect, $sql)):

		echo "Exclusão realizada com sucesso!";
		header('Location: ../pages/main/index.php');

	else:

		echo "Erro ao excluir o usuário.";
		header('Location: ../pages/main/index.php');

	endif;

endif;