<?php

    // Inicia a session caso ela não esteja setada
    include('../php/protecao_sessao.php');

    // Adição de uma proteção de acesso, caso o usuario seja um prestador tentando acessar essa página ele será redirecionado para a tela prestador.
    if ($_SESSION['usr_tipo'] == "Prestador"){
        header("Location: /html/home_prestador.php");
        exit;
    }

    // Verifica o metodo de requisição, aceita apenas se for tipo POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Integração com o Banco de Dados
        require_once 'conecta_bd.php';

        // Declaração de variaveis
        $titulo = $_POST['titulo'];
        $categoria = $_POST['categoria'];
        $valor = str_replace(['R$', '.', ','], ['', '', '.'], $_POST['valor']);
        $descricao = $_POST['descricao'];
        $dataCriado = date("Y-m-d");
        $dataRealizado = $_POST['data'];
        $user_id_contratante = $_SESSION['usr_id'];
        $status_servico = "Em aberto";

        // Try catch para conexão com o bando de dados
        try {

            // Prepara para inserir os dados dentro do banco de dados tomando cuidado com SQL Injection
            $sql = "INSERT INTO servico (user_id_contratante,tipoServico_id,servico_titulo,servico_descricao,servico_data_criado, servico_data_realizado,servico_valor, servico_status) VALUES (:user_id_contratante,:tipoServico_id,:titulo,:descricao,:data_criado,:data_realizado,:valor, :servico_status)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['user_id_contratante' => $user_id_contratante,'tipoServico_id' => $categoria,'titulo' => $titulo,'descricao' => $descricao,'data_criado' => $dataCriado, 'data_realizado' => $dataRealizado,'valor' => $valor, 'servico_status' => $status_servico]);

            header("Location: /html/cadastro_servicos.php?sucesso=1");
            exit;

        } catch (PDOException $e) {

            // Mostra erro diretamente na tela (modo desenvolvimento)
            echo "<h3>Erro ao cadastrar o serviço:</h3>";
            echo "<pre>" . $e->getMessage() . "</pre>";
            error_log("Erro ao cadastrar: " . $e->getMessage());

            // Mostra dados postados (opcional)
            echo "<h4>Dados recebidos:</h4>";
            echo "<pre>";
            print_r($_POST);
            echo "</pre>";
        }

    } else {
        // Caso metodo de requisição seja diferente 
        echo "Acesso inválido.";       
    }
?>