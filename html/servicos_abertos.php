<?php

  include('../php/protecao_sessao.php');
  
  if ($_SESSION["usr_tipo"] == "Contratante") {
      header("Location: home.php");
      exit;
  }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviços em Aberto - DignCare</title>
    <link rel="icon" type="imagem/png" href="/img/icon.png">
    <link rel="stylesheet" href="/CSS/serviços_abertos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="/JS/transicao.js" defer></script>
    <script src="/JS/mudar_imagem.js" defer></script>
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
          echo '<h5 class="offcanvas-title textcolor" id="offcanvasRightLabel">' . $_SESSION["usr_nome"] . '</h5>';
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

    <section style="margin: 50px;">
    <div class="textcolor" style="margin-bottom: 30px;">
        <h3>Serviços em Aberto!</h3>
        <p>DignCare, Sua solução</p>
        <a href="/html/home_prestador.php" class="btn btn-primary">Voltar</a>
    </div>

    <?php
    require_once '../php/conecta_bd.php';

    $filtro = isset($_GET['filtro']) ? intval($_GET['filtro']) : 0;
    try {
        if ($filtro === 0) {
            echo '<p class="textcolor">Nenhum serviço encontrado para esse filtro.</p>';
        } else {
            $sql = "SELECT s.*, u.usr_nome 
                    FROM servico s 
                    JOIN usuario u ON s.user_id_contratante = u.usr_id 
                    WHERE s.tipoServico_id = :filtro AND s.user_id_contratado IS NULL";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['filtro' => $filtro]);
            $servicos = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (count($servicos) > 0) {
                $imagens = [
                    1 => '../img/jardinagem.png',
                    2 => '../img/baba.png',
                    3 => '../img/Limpeza.png',
                    4 => '../img/cozinheiro.png',
                    5 => '../img/cuidadora.png',
                    6 => '../img/manutencao.png',
                    7 => '../img/pets.png',
                    8 => '../img/tutora.png'
                ];

                echo '<div class="row g-4 mb-5 justify-content-center">'; // primeira row aberta
                $contador = 0;

                foreach ($servicos as $servico) {
                    $imagemServico = $imagens[$servico['tipoServico_id']] ?? 'default.jpg';

                    echo '
                        <div class="col-md-2">
                            <div class="card h-100" style="height: 100%; max-height: 500px; min-height: 500px; display: flex; flex-direction: column;">
                                <img id="imagemCategoria" src="' . $imagemServico . '" alt="Imagem da Categoria" class="card-img-top" style="height: 200px; object-fit: cover;">

                                <div class="card-body d-flex flex-column" style="overflow: hidden;">
                                    <h5 class="card-title text-truncate" title="' . htmlspecialchars($servico["servico_titulo"]) . '">
                                        ' . htmlspecialchars($servico["servico_titulo"]) . '
                                    </h5>

                                    <p class="card-text" style="flex: 1; overflow: hidden; text-overflow: ellipsis;">
                                        ' . htmlspecialchars($servico["servico_descricao"]) . '
                                    </p>

                                    <h6><i class="bi bi-person-circle"></i> ' . htmlspecialchars($servico["usr_nome"]) . '</h6>
                                    <p>R$' . htmlspecialchars($servico["servico_valor"]) . '</p>

                                    <a href="/php/aceitar_servico.php?servico_id=' . $servico["servico_id"] . '" class="btn btn-primary mt-auto">Confira</a>
                                </div>
                            </div>
                        </div>
                    ';

                    $contador++;

                    // A cada 5 cards, fecha a row atual e inicia uma nova
                    if ($contador % 5 === 0 && $contador < count($servicos)) {
                        echo '</div><div class="row g-4 mb-5 justify-content-center">';
                    }
                }

                echo '</div>'; // fecha a última row
            } else {
                echo '<p class="textcolor">Nenhum serviço encontrado para esse filtro.</p>';
            }
        }
    } catch (PDOException $e) {
        echo "Erro ao buscar serviços: " . $e->getMessage();
    }
    ?>
</section>
    
    <footer class="texto">
        <p class="mexe">&copy; Direitos Autorais Reservados Por DignCare.</p>
        <p ><a class="mexe" href="https://maps.app.goo.gl/9GVxGAeCZJMZK6yYA" target="_blank">📍 Nossa sede</a></p>
        <p ><a class="mexe" href="/html/sobre.php">Sobre nós</a></p>
        <p ><a class="mexe" href="mailto:digncare@gmail.com">✉ Entre em contato conosco!</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
    crossorigin="anonymous"></script>


</body>

</html>