<!-- home_prestador.php -->
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

  <script src="/JS/transicao.js" defer></script>
</head>

<body class="fundo loaded">
  <header>
    <nav class="navbar borda">
      <div class="nav justify-content-start">
        <a href="home_prestador.php">
          <img class="mexe" src="../img/logo_horizontal.png" alt="logo" width="225" />
        </a>
      </div>
      <div class="menu-icon" type="sidbar" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
        aria-controls="offcanvasRight"><i class="bi bi-list fs-3 iconscss"></i></div>

      <div class="offcanvas offcanvas-end fundo" tabindex="-1" id="offcanvasRight"
        aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title textcolor" id="offcanvasRightLabel">Daniel Rodrigues</h5>
          <div type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i
              class="bi bi-x-lg textcolor"></i></div>
        </div>

        <div class="offcanvas-body">
          <a class="azul" href="/html/perfil.php">Perfil</a><br>
          <a class="azul" href="/html/avaliacoes.php">Avaliações</a>
          <p>______________________________________________________</p>
          <a class="azul" href="/html/depoimentos.php">Depoimentos</a><br>
          <a class="azul" href="/html/sobre.php">Sobre Nós</a>
          <p>______________________________________________________</p>
          <a class="azul" href="/index.php">Sair da Conta</a>
        </div>
      </div>


    </nav>
  </header>

  <div style="margin: 50px;">
    <div class="textcolor" style="margin-bottom: 30px;">
      <h3>Bem-vindo, Prestador!</h3>
      <p>Aqui você pode gerenciar sua conta, ver solicitações e muito mais.</p>
    </div>

    <div class="row row-cols-1 row-cols-md-4 g-4 espaçamento" style="margin-bottom: 80px;">
      <!-- Card 1 -->
      <div class="col">
        <div class="card mexe h-100">
          <div class="card-body">
            <h5 class="card-title">Agenda</h5>
            <p class="card-text">Veja seus horários e agendamentos futuros.</p>
            <a href="#" class="btn btn-primary">Ver Agenda</a>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col">
        <div class="card mexe h-100">
          <div class="card-body">
            <h5 class="card-title">Avaliações</h5>
            <p class="card-text">Acompanhe o que os clientes estão dizendo sobre seu serviço.</p>
            <a href="#" class="btn btn-primary">Ver Avaliações</a>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col">
        <div class="card mexe h-100">
          <div class="card-body">
            <h5 class="card-title">Serviços</h5>
            <p class="card-text">Edite os serviços que você oferece e seus preços.</p>
            <a href="#" class="btn btn-primary">Editar</a>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col">
        <div class="card mexe h-10">
          <div class="card-body">
            <h5 class="card-title">Mensagens</h5>
            <p class="card-text">Converse com seus clientes de forma fácil e rápida.</p>
            <a href="#" class="btn btn-primary">Acessar</a>
          </div>
        </div>
      </div>
    </div>
  </div>

    <footer class="py-4 mt-auto texto">
        <div class="fs-6">
            <p class="mexe">&copy; Direitos Autorais Reservados Por DignCare.</p>
            <p ><a class="mexe" href="https://maps.app.goo.gl/9GVxGAeCZJMZK6yYA" target="_blank">📍 Nossa sede</a></p>
            <p ><a class="mexe" href="/html/sobre.php">Sobre nós</a></p>
            <p ><a class="mexe" href="mailto:digncare@gmail.com">✉ Entre em contato conosco!</a></p>
        </div>
    </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>