<?php
require_once '../php/conecta_bd.php';

$usuario_id = $_SESSION['usr_id'];

try {
    $stmt = $pdo->prepare("SELECT AVG(avaliacao_nota) AS media FROM avaliacao WHERE user_id_avaliado = :id");
    $stmt->execute(['id' => $usuario_id]);
    $media = $stmt->fetchColumn();

    if ($media !== null) {
        $media_inteira = floor($media); // já é inteira, mas por segurança
        $estrelas = str_repeat('⭐', $media_inteira);
        echo "<h3>$estrelas</h3>";
    } else {
        echo "<h3>Sem avaliações ainda</h3>";
    }
} catch (PDOException $e) {
    echo "Erro ao buscar avaliações: " . $e->getMessage();
}
?>