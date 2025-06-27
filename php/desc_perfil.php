<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once 'conecta_bd.php';

    $descricao = $_POST['descricao'];
    $usr_id = $_SESSION['usr_id'];

    try {
        $sql = "UPDATE usuario SET usr_descricao = :descricao WHERE usr_id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'descricao' => $descricao,
            'id' => $usr_id
        ]);

        $_SESSION['usr_descricao'] = $descricao;
        
        header("Location: /html/perfil.php");

    } catch (PDOException $e) {
        error_log($e->getMessage());
        echo "Erro ao atualizar a descrição.";
    }
} else {
    echo "Acesso inválido.";
}
?>
