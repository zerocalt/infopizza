<?php
	require_once("admin/app/config/database.php");
	
	$email = $_POST['email'] ?? '';
	$senha = $_POST['senha'] ?? '';
	
	$stmt = $conn->prepare("SELECT id, email, senha, nome FROM pizzaria WHERE email = ? LIMIT 1");
	$stmt->bind_param("s",$email);
	$stmt->execute();

	$usuario = $stmt->get_result()->fetch_assoc();

	if($usuario && password_verify($senha, $usuario['senha'])){
		$_SESSION['idcliente'] = $usuario['id'];
		$_SESSION['email'] = $usuario['email'];
		$_SESSION['nome'] = $usuario['nome'];
		//echo "Login OK";
		header("Location: admin/");
    	exit;
	}else{
		echo "Usuário inválido ou senha errada!";
	}
	$stmt->close();
	$conn->close();

?>