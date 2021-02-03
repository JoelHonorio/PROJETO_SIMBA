<?php

session_start();

require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):

	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$idade = mysqli_escape_string($connect, $_POST['idade']);

	$sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";
	
	if(mysqli_query($connect, $sql)):

		echo "Cadastro realizado com sucesso!";
		header('Location: ../pages/main/index.php');

	else:

		echo "Erro ao cadastrar o usuário.";
		header('Location: ../pages/main/index.php');

	endif;

endif;