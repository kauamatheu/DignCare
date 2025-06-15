<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $tipo_usuario = $_POST['tipo_usuario'];

    // Conexão com o banco de dados (exemplo com PDO)
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=seubanco", "usuario", "senha");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO usuarios (nome, tipo_usuario) VALUES (:nome, :tipo)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['nome' => $nome, 'tipo' => $tipo_usuario]);

        // Redireciona para a tela inicial (home.php)
        header("Location: home.php");
        exit; // MUITO IMPORTANTE! Encerra o script após o redirecionamento
    } catch (PDOException $e) {
        echo "Erro ao cadastrar: " . $e->getMessage();
    }
} else {
    echo "Acesso inválido.";
}
?>