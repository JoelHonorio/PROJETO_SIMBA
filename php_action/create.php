<?php

session_start();

require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):

	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$senha = mysqli_escape_string($connect, $_POST['senha']);
	$senha_c = mysqli_escape_string($connect, $_POST['senha_c']);

	$sql = "INSERT INTO usuario (nome, sobrenome, email, senha, senha_c) VALUES ('$nome', '$sobrenome', '$email', '$senha', '$senha_c')";
	
	if(mysqli_query($connect, $sql)):

		echo "Cadastro realizado com sucesso!";
		header('Location: ../pages/main/index.php');

	else:

		echo "Erro ao cadastrar o usuário.";
		header('Location: ../pages/main/index.php');

	endif;

endif;