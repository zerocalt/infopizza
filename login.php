<?php
	session_start();
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

	$email = $_POST['email'] ?? '';
	$senha = $_POST['senha'] ?? '';
	
	$stmt = $conn->prepare("SELECT id, email, senha, nome FROM cliente WHERE email = ? LIMIT 1");
	$stmt->bind_param("s",$email);
	$stmt->execute();

	$cliente = $stmt->get_result()->fetch_assoc();

	if($cliente && password_verify($senha, $cliente['senha'])){
		$_SESSION['idcliente'] = $cliente['id'];
		$_SESSION['email'] = $cliente['email'];
		$_SESSION['nome'] = $cliente['nome'];
		echo "Login OK";
	}else{
		echo "Usuário inválido ou senha errada!";
	}
	$stmt->close();
	$conn->close();

?>