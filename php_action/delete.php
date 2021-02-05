<?php

session_start();

require_once 'db_connect.php';

if(isset($_POST['btn-deletar'])):
	
	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "DELETE FROM usuario WHERE id = '$id'";

	if(mysqli_query($connect, $sql)):

		echo "Exclusão realizada com sucesso!";
		header('Location: ../pages/main/index.php');

	else:

		echo "Erro ao excluir o usuário.";
		header('Location: ../pages/main/index.php');

	endif;

endif;

if(isset($_POST['btn-deletarhistoria'])):
	
	$story = mysqli_escape_string($connect, $_POST['story']);

	$sql = "DELETE FROM historias WHERE story = '$story'";

	if(mysqli_query($connect, $sql)):

		echo "Exclusão realizada com sucesso!";
		header('Location: ../pages/main/historias.php');

	else:

		echo "Erro ao excluir a História.";
		header('Location: ../pages/main/historias.php');

	endif;

endif;