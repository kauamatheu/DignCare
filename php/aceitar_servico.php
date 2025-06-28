<?php
    require_once '../php/conecta_bd.php';

    include('../php/protecao_sessao.php');

    $prestador_id = $_SESSION['usr_id'];
    $servico_id = isset($_GET['servico_id']) ? intval($_GET['servico_id']) : 0;

    if ($servico_id === 0) {
        echo "Serviço inválido.";
        exit;
    }

    if ($_SESSION["usr_tipo"] == "Contratante") {
        header("Location: home.php");
        exit;
    }
    try{
        // Verifica se o serviço já foi aceito
        $stmt = $pdo->prepare("SELECT user_id_contratado FROM servico WHERE servico_id = :id");
        $stmt->execute(['id' => $servico_id]);
        $servico = $stmt->fetch();

        if ($servico['user_id_contratado'] !== null) {
            echo "Este serviço já foi aceito por outro prestador.";
            exit;
        }

        // Atualiza o serviço com o ID do prestador
        $stmt = $pdo->prepare("UPDATE servico SET user_id_contratado = :prestador_id WHERE servico_id = :servico_id");
        $stmt->execute(['prestador_id' => $prestador_id, 'servico_id' => $servico_id]);


        header('Location: /html/contratos.php');
        exit;
    }catch(PDOException $e){
        echo "Erro: " . $e->getMessage();
        exit;
    }
    
?>