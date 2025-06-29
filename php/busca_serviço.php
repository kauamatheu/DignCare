<?php
require_once '../php/conecta_bd.php';

$servico_id = isset($_GET['servico_id']) ? intval($_GET['servico_id']) : 0;

if ($servico_id === 0) {
    echo "Serviço inválido.";
    exit;
}

$stmt = $pdo->prepare("
    SELECT s.*, u.usr_nome, u.usr_id 
    FROM servico s 
    JOIN usuario u ON u.usr_id = s.user_id_contratado
    WHERE s.servico_id = :id
");
$stmt->execute(['id' => $servico_id]);
$dados = $stmt->fetch();

if (!$dados) {
    echo "Serviço não encontrado.";
    exit;
}

$nomeAvaliado = $dados['usr_nome'];
$idAvaliado = $dados['usr_id'];
?>
