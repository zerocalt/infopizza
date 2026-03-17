<?php

	//dados do banco de dados
	$local = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "pizzaria";
	//criar a conexão
	$conn = new mysqli($local,$user,$pass,$dbname);
	//verificar a conexão
	if($conn->connect_error){
		die("Falha na conexão: " . $conn->connet_error);
	}

	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
	$datanascimento = $_POST['datanascimento'];
	$email = $_POST['email'];
	$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

	function brToMySqlDate($br) {
	  // espera dd/mm/aaaa
	  $p = explode('/', $br);
	  if (count($p) !== 3) return null;
	  return $p[2] . '-' . $p[1] . '-' . $p[0];
	}

	$stmt = $conn->prepare("INSERT INTO cliente (nome,telefone,datanascimento,email,senha) VALUES (?,?,?,?,?)");
	$stmt->bind_param("sssss",$nome,$telefone,brToMySqlDate($datanascimento),$email,$senha);
	if(!$stmt->execute()){
		die("Erro, tente novamente!");
	}
	echo "Cadastro realizado com sucesso!!!";
	$stmt->close();
	$conn->close();
	//jairoferraz.com.br/aulas/aula2.zip
?>