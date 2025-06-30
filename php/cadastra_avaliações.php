<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require_once 'conecta_bd.php';

    // Validações básicas
    if (!isset($_POST['rating'], $_POST['avaliado_id']) || !is_numeric($_POST['rating']) || !is_numeric($_POST['avaliado_id'])) {
        echo "Dados inválidos.";
        exit;
    }

    $nota_nova = (int) $_POST['rating']; // converte para inteiro
    if ($nota_nova < 1 || $nota_nova > 5) {
        die("Avaliação inválida.");
    } 
    
    $avaliador = $_SESSION['usr_id'];
    $avaliado = (int) $_POST['avaliado_id'];
    $data = date('Y-m-d');
    
    try {
        $sql = "INSERT INTO avaliacao (avaliacao_nota, user_id_avaliando, user_id_avaliado, avaliacao_data)
                VALUES (:nota, :avaliador, :avaliado, :data)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':nota' => $nota_nova,
            ':avaliador' => $avaliador,
            ':avaliado' => $avaliado,
            ':data' => $data
        ]);

        header("Location: /html/perfil.php");
        exit;

    } catch (PDOException $e) {
        echo "Erro ao registrar avaliação: " . $e->getMessage();
        exit;
    }
} else {
    echo "Acesso inválido.";
    exit;
}
?>
