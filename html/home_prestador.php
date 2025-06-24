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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DignCare - Prestador</title>
  <link rel="icon" type="image/png" href="/img/icon.png" />
  <link rel="stylesheet" href="/CSS/home_prestador.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../CSS/home_prestador.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

  <script src="/JS/transicao.js" defer></script>
</head>

<body class="fundo loaded">
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
    <div class="textcolor">
      <h3>Home</h3>
      <p>DignCare, Sua solução</p>
    </div>

    <div class="my-5 main-content">
      <h1 class="textcolor">Serviços Abertos</h1>
      <br>

      <!--Grupo de Cards 1-->
      <div class="row row-cols-1 row-cols-md-4 g-4 espaçamento" style="margin-bottom: 80px;">
          
        <!--Card 1 - Jardineiros -->
        <div class="col">
          <div class="card mexe h-100">
            <img src="/img/Jardinagem.png" class="card-img-top" alt="jardinagem">
            <div class="card-body">
              <h5 class="card-title">Jardinagem</h5>
              <p class="card-text">Serviços abertos para Jardinagem.</p>
              <a href="/html/servicos_abertos.php?filtro=1" class="btn btn-primary">Confira</a>
            </div>
          </div>
        </div>
          
          <!--Card 2 - Babás -->
        <div class="col">
          <div class="card mexe h-100">
            <img src="/img/babá.png" class="card-img-top" alt="babá">
            <div class="card-body">
              <h5 class="card-title">Babá</h5>
              <p class="card-text">Serviços abertos para Babás.</p>
              <a href="/html/servicos_abertos.php?filtro=2" class="btn btn-primary">Confira</a>
            </div>
          </div>
        </div>
        
        <!--Card 3 - Diaristas -->
        <div class="col">
          <div class="card mexe h-100">
            <img src="/img/Limpeza.png" class="card-img-top" alt="limpeza">
            <div class="card-body">
              <h5 class="card-title">Profissional de Limpeza</h5>
              <p class="card-text">Serviços abertos para Profissionais de Limpeza.</p>
              <a href="/html/servicos_abertos.php?filtro=3" class="btn btn-primary">Confira</a>
            </div>
          </div>
        </div>
        
        <!--Card 4 - Cozinheiros -->
        <div class="col">
          <div class="card mexe h-100">
            <img src="/img/cozinheiro.png" class="card-img-top" alt="cozinehiro">
            <div class="card-body">
              <h5 class="card-title">Profissional de Cozinha</h5>
              <p class="card-text">Serviços abertos para Profissionais de Cozinha.</p>
              <a href="/html/servicos_abertos.php?filtro=4" class="btn btn-primary">Confira</a>
            </div>
          </div>
        </div>

      </div>

      <!--Grupo de Cards 2-->
      <div class="row row-cols-1 row-cols-md-4 g-4 espaçamento" style="margin-bottom: 80px;"">
          
        <!--Card 5 - Cuidadores de idosos -->
        <div class=" col">
          <div class="card mexe h-100">
            <img src="/img/cuidadora.png" class="card-img-top" alt="cuidadora">
            <div class="card-body">
              <h5 class="card-title">Cuidador de Pessoa Idosa</h5>
              <p class="card-text">Serviços abertos para Cuidadores de Pessoa Idosa. </p>
              <a href="/html/servicos_abertos.php?filtro=5" class="btn btn-primary">Confira</a>
            </div>
          </div>
        </div>
          
        <!--Card 6 - Serviços Gerais -->
        <div class="col">
          <div class="card mexe h-100">
            <img src="/img/manutencao.png" class="card-img-top" alt="manutenção">
            <div class="card-body">
              <h5 class="card-title">Serviço Geral</h5>
              <p class="card-text">Serviços abertos para Manutenções Gerais.</p>
              <a href="/html/servicos_abertos.php?filtro=6" class="btn btn-primary">Confira</a>
            </div>
          </div>
        </div>
          
        <!--Card 7 - Cozinheiros -->
        <div class="col">
          <div class="card mexe h-100">
            <img src="/img/pets.png" class="card-img-top" alt="limpeza">
            <div class="card-body">
              <h5 class="card-title">Cuidador de Pet</h5>
              <p class="card-text">Serviços abertos para Cuidadores de Pet.</p>
              <a href="/html/servicos_abertos.php?filtro=7" class="btn btn-primary">Confira</a>
            </div>
          </div>
        </div>
          
        <!--Card 8 - Tutores -->
        <div class="col">
          <div class="card mexe h-100">
            <img src="/img/tutora.png" class="card-img-top" alt="jardinagem">
            <div class="card-body">
              <h5 class="card-title">Tutor Educacional</h5>
              <p class="card-text">Serviços abertos para Tutores Educacionais. </p>
              <a href="/html/servicos_abertos.php?filtro=8" class="btn btn-primary">Confira</a>
            </div>
          </div>
        </div>

      </div>
    </div>

  </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
    crossorigin="anonymous"></script>


  <footer class="texto">
    <p class="mexe">&copy; Direitos Autorais Reservados Por DignCare.</p>
    <p ><a class="mexe" href="https://maps.app.goo.gl/9GVxGAeCZJMZK6yYA" target="_blank">📍 Nossa sede</a></p>
    <p ><a class="mexe" href="/html/sobre.php">Sobre nós</a></p>
    <p ><a class="mexe" href="mailto:digncare@gmail.com">✉ Entre em contato conosco!</a></p>
  </footer>

</body>

</html>
