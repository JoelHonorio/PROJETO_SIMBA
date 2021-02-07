<?php

session_start();

require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):

	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$senha = mysqli_escape_string($connect, $_POST['senha']);
	$senha_c = mysqli_escape_string($connect, $_POST['senha_c']);
	
	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "UPDATE usuario SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', senha = '$senha', senha_c = '$senha_c' WHERE id = '$id'";

	if(mysqli_query($connect, $sql)):

		echo "Edição realizada com sucesso!";
		header('Location: ../pages/main/index.php');

	else:

		echo "Erro ao editar o usuário.";
		header('Location: ../pages/main/index.php');

	endif;

endif;

if(isset($_POST['btn-editarhistoria'])):

	$quem = mysqli_escape_string($connect, $_POST['quem']);
	$gostaria = mysqli_escape_string($connect, $_POST['gostaria']);
	$poisquero = mysqli_escape_string($connect, $_POST['poisquero']);

	$story = mysqli_escape_string($connect, $_POST['story']);

	$sql = "UPDATE historias SET quem = '$quem', gostaria = '$gostaria', poisquero = '$poisquero' WHERE story = '$story'";

	if(mysqli_query($connect, $sql)):

		echo "Edição realizada com sucesso!";
		header('Location: ../pages/main/historias.php');

	else:

		echo "Erro ao editar o usuário.";
		header('Location: ../pages/main/historias.php');

	endif;

endif;

if(isset($_POST['btn-editarhistdetal'])):

	$poisquero = mysqli_escape_string($connect, $_POST['poisquero']);
	$detalhamento = mysqli_escape_string($connect, $_POST['detalhamento']);
	$responsavel = mysqli_escape_string($connect, $_POST['responsavel']);

	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "UPDATE histdetalhada SET id = '$id', poisquero = '$poisquero', detalhamento = '$detalhamento', responsavel = '$responsavel' WHERE id = '$id'";

	if(mysqli_query($connect, $sql)):

		echo "Edição realizada com sucesso!";
		header('Location: ../pages/main/histdetal.php');

	else:

		echo "Erro ao editar o usuário.";
		header('Location: ../pages/main/histdetal.php');

	endif;

endif;