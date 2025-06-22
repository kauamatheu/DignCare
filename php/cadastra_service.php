<?php

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
        $valor = $_POST['valor'];
        $descricao = $_POST['descricao'];


        // CRIAR INTEGRAÇÃO COM O BANCO DE DADOS PENDENTE"

        // Try catch para conexão com o bando de dados
        try {

            // Prepara para inserir os dados dentro do banco de dados tomando cuidado com SQL Injection
            $sql = "INSERT INTO servico (, usr_cpf, usr_idade, usr_tipo, usr_email, usr_senha) VALUES (:nome, :cpf, :idade, :tipo, :email, :senha)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['nome' => $nome,'cpf' => $cpf,'idade' => $idade,'tipo' => $tipo,'email' => $email,'senha' => $senha]);

            header("Location: /html/cadastro.php?sucesso=1");
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
        }}

    } else {

        // Caso metodo de requisição seja diferente 
        echo "Acesso inválido.";

    }
?>