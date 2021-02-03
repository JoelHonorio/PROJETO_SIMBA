<?php

session_start();

require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):

	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$idade = mysqli_escape_string($connect, $_POST['idade']);
	
	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade' WHERE id = '$id'";

	if(mysqli_query($connect, $sql)):

		echo "Edição realizada com sucesso!";
		header('Location: ../pages/main/index.php');

	else:

		echo "Erro ao editar o usuário.";
		header('Location: ../pages/main/index.php');

	endif;

endif;