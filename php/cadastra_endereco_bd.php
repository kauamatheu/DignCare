<?php
include('../php/protecao_sessao.php');

// Verifica o metodo de requisição, aceita apenas se for tipo POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Integração com o Banco de Dados
    require_once 'conecta_bd.php';

    // Declaração de variaveis
    $usr_id = $_SESSION['usr_id'];
    $cep = $_POST['cep'];
    $numero = $_POST['numero'];
    $referencia = $_POST['referencia'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    try {

        // Prepara para inserir os dados na tabela 'localizacao', evitando SQL Injection
        $sql = "INSERT INTO localizacao (local_cep, local_numero, local_referencia, local_cidade, local_estado) VALUES (:cep, :numero, :referencia, :cidade, :estado)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['cep' => $cep, 'numero' => $numero, 'referencia' => $referencia, 'cidade' => $cidade, 'estado' => $estado]);

        // Busca o ID da localização recém-inserida
        $stmt = $pdo->prepare("SELECT * FROM localizacao WHERE local_cep = :cep AND local_numero = :numero AND local_referencia = :referencia");
        $stmt->execute(['cep' => $cep, 'numero' => $numero, 'referencia' => $referencia]);
        $local = $stmt->fetch();

        //Atualiza o usuario para inserir o id do endereço que ele cadastrou
        $stmt = $pdo->prepare("UPDATE usuario SET local_id = :local_id WHERE usr_id = :usr_id");
        $stmt->execute(['local_id' => $local['local_id'],'usr_id' => $usr_id]);

        //Separação de qual home o usuario vai acessar com base no seu tipo
        if ($_SESSION['usr_tipo'] == "Contratante") {
            header("Location: /html/home.php");
        } else {
            header("Location: /html/home_prestador.php");
        }
        exit;

    } catch (PDOException $e) {

        // Mostra erro diretamente na tela (modo desenvolvimento)
        echo "<h3>Erro ao cadastrar usuário:</h3>";
        echo "<pre>" . $e->getMessage() . "</pre>";
        error_log("Erro ao cadastrar: " . $e->getMessage());
        
        // Mostra dados postados (opcional)
        echo "<h4>Dados recebidos:</h4>";
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
    }

} else {
    echo "Acesso inválido.";
}
?>
