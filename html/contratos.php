<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once '../php/conecta_bd.php';

    include('../php/protecao_sessao.php');
    
    // Suponha que o ID do serviço venha pela URL
    $servico_id = isset($_GET['servico_id']) ? intval($_GET['servico_id']) : 0;

    $sql = "SELECT 
            s.servico_titulo,
            s.servico_valor,
            s.servico_descricao,
            s.servico_data_criado,
            s.servico_data_realizado,
            tS.tipoServico_nome AS tipoServico_nome,
            u1.usr_nome AS contratante_nome,
            u1.usr_cpf AS contratante_cpf,
            u2.usr_nome AS contratado_nome,
            u2.usr_cpf AS contratado_cpf
            FROM servico s
            JOIN tipoServico tS ON s.tipoServico_id = tS.tipoServico_id
            JOIN usuario u1 ON s.user_id_contratante = u1.usr_id
            JOIN usuario u2 ON s.user_id_contratado = u2.usr_id
            WHERE s.servico_id = :id";

    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $servico_id]);
    $dados = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contratos - DignCare</title>
    <link rel="icon" type="imagem/png" href="/img/icon.png">
    <link rel="stylesheet" href="/CSS/contratos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="/JS/contrato.js"></script>
    <script src="/JS/transicao.js" defer></script>
</head>

<body class="fundo">
    <header>
        <nav class="navbar borda">
            <div class="nav justify-content-start">
                <a href="/html/home.php"><img class="mexe" src="/img/logo_horizontal.png" alt="logo" width="225"></a>
            </div>
            
            <div class="menu-icon" type="sidbar" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="bi bi-list fs-3 iconscss"></i></div>
            
            <div class="offcanvas offcanvas-end fundo" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <?php
                        echo '<h5 class="offcanvas-title texto" id="offcanvasRightLabel">' . $_SESSION["usr_nome"] . '</h5>';
                    ?>
                    <div type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></div>
                </div>
                <div class="offcanvas-body">
                    <a class="azul" href="/html/perfil.php">Perfil</a><br>
                    <a class="azul" href="/html/avaliacoes.php">Avaliações</a>
                    <p>______________________________________________________</p>
                    <a class="azul" href="/html/depoimentos.php">Depoimentos</a><br>
                    <a class="azul" href="/html/sobre.php">Sobre Nós</a>
                    <p>______________________________________________________</p>
                    <a class="azul" href="/php/logout.php">Sair da Conta</a>
                </div>
            </div>
        </nav>
    </header>

    <div class="textcolorPDF margem fundodiv">

        <div id="page">
            <h1 class="titulo">Contrato</h1><br>
            <p class="centro"><b>CONTRATO DE PRESTAÇÃO DE SERVIÇOS</b></p><br>

            <p><b>Contratante: <?= htmlspecialchars($dados['contratante_nome']) ?></b>, CPF/CNPJ: <b><?= htmlspecialchars($dados['contratante_cpf']) ?></b></p>
            <p><b>Prestador: <?= htmlspecialchars($dados['contratado_nome']) ?></b>, CPF/CNPJ: <b><?= htmlspecialchars($dados['contratado_cpf']) ?></b></p>

            <p><b>Objeto:</b> Prestação de serviços de <b><?= htmlspecialchars($dados['tipoServico_nome']) ?></b>.</p>
            <p><b>Prazo:</b><b> <?= date('d/m/Y', strtotime($dados['servico_data_realizado'])) ?></b></p>
            <p><b>Valor:</b><b> <?= 'R$' . number_format($dados['servico_valor'], 2, ',', '.') ?></b>.</p><br>

            <p><b>Obrigações do prestador:</b></p>
            <p>Executar os serviços com qualidade e no prazo.</p>
            <p>Manter sigilo sobre informações recebidas.</p>
            <p>Seguir normas técnicas e legais.</p><br>

            <p><b>Obrigações do Contratante:</b></p>
            <p>Fornecer as informações e recursos necessários.</p>
            <p>Realizar os pagamentos conforme acordado.</p>
            <p><b>Foro: [Cidade/Estado]</b>.</p>
            <br>
            <p><b>Assinatura do Contratante: __________________________________________________________ </b></p>
            <p><b>Assinatura do Contratado: ___________________________________________________________ </b></p><br>
        </div>

        <div class="centro">

            <button id="btn" class="btn btn-primary">
                <i class="bi bi-file-earmark-arrow-down"></i> Baixar PDF
            </button>

        </div>
    </div>

    <script>
        const btn = document.getElementById('btn');
        const page = document.getElementById('page');

        btn.addEventListener('click', function () {
            html2PDF(page, {
                jsPDF: {
                    format: 'a4'
                },
                imageType: 'image/jpeg',
                margin: {
                    top: 20,
                    right: 20,
                    bottom: 20,
                    left: 20,
                },
                output: 'Contrato.pdf'
            });
        });
    </script>

    <script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jspdf-html2canvas@latest/dist/jspdf-html2canvas.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>

    <footer class="py-4 mt-auto texto">
        <div class="fs-6">
            <p class="mexe">&copy; Direitos Autorais Reservados Por DignCare.</p>
            <p><a class="mexe" href="https://maps.app.goo.gl/9GVxGAeCZJMZK6yYA" target="_blank">📍 Nossa sede</a></p>
            <p><a class="mexe" href="/html/sobre.php">Sobre nós</a></p>
            <p><a class="mexe" href="mailto:digncare@gmail.com">✉ Entre em contato conosco!</a></p>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous">
    </script>

</body>

</html>