<?php
require_once __DIR__ . '/../classes/Conexao.php';

$db = new Conexao();
$conn = $db->conectar();

if ($conn) {
    echo "✅ Conexão bem sucedida!";
} else {
    echo "❌ Falha na conexão!";
}

$db->fechar();
?>