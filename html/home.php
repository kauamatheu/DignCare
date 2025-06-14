<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DignCare</title>
  <link rel="icon" type="imagem/png" href="/img/icon.png">
  <link rel="stylesheet" href="/CSS/home.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <script src="/JS/transicao.js" defer></script>
  <script src="/JS/altera_conteudo.js" defer></script>

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
          <h5 class="offcanvas-title textcolor" id="offcanvasRightLabel">Daniel Rodrigues</h5>
          <div type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i class="bi bi-x-lg textcolor"></i></div>
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
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo_usuario = $_POST['tipo_usuario']; // 0 para prestador, 1 para contratante
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $nascimento = $_POST['nascimento'];
    $senha = $_POST['senha'];
    

  
    echo "<h2>Dados recebidos:</h2>";
    echo "Nome: " . htmlspecialchars($nome) . "<br>";
    echo "Tipo de usuário: " . ($tipo_usuario == "0" ? "Prestador" : "Contratante") . "<br>";
    echo "CPF: ".$cpf. "<br>";
    echo "Email: ".$email. "<br>";
    echo "Data de Nascimento: ".$nascimento. "<br>";
    echo "Senha: ".$senha. "<br>";

} else {
    echo "Acesso inválido.";
}
?>

  <section style="margin: 50px;">
    <div class="textcolor" style="margin-bottom: 30px;">
      <h3>Home</h3>
      <p>DignCare, Sua solução</p>
      <select id="seletor" class="form-select form-select-lg mb-3" aria-label="Large select example" onchange="mudarConteudo()">
            <option value="0">Cliente</option>
            <option value="1">Prestador</option>
        </select>
    </div>

    <div id="0" class="conteudo ativo">

      <!--Cards-->
      <div class="row row-cols-1 row-cols-md-4 g-4 espaçamento" style="margin-bottom: 80px;">
        
        <!--Card 1-->
        <div class="col">
          <div class="card mexe h-100">
            <img src="/img/Jardinagem.png" class="card-img-top" alt="jardinagem">
            <div class="card-body">
              <h5 class="card-title">Jardinagem</h5>
              <p class="card-text">Aqui você vai encontrar as pessoas mais qualificadas para cuidar do seu jardim.</p>
              <p></p>
              <a href="/html/busca_profissionais.php" class="btn btn-primary">Confira</a>
            </div>
          </div>
        </div>
        
        <!--Card 2-->
        <div class="col">
          <div class="card mexe h-100">
            <img src="/img/babá.png" class="card-img-top" alt="babá">
            <div class="card-body">
              <h5 class="card-title">Babá</h5>
              <p class="card-text">Ache uma pessoa responsável e qualificada, e deixe seu filho em boas mãos.</p>
              <a href="/html/busca_profissionais.php" class="btn btn-primary">Confira</a>
            </div>
          </div>
        </div>
        
        <!--Card 3-->
        <div class="col">
          <div class="card mexe h-100">
            <img src="/img/Limpeza.png" class="card-img-top" alt="limpeza">
            <div class="card-body">
              <h5 class="card-title">Diáristas</h5>
              <p class="card-text">Encontre o profissionais qualificados para deixar sua casa um brinco.</p>
              <a href="/html/busca_profissionais.php" class="btn btn-primary">Confira</a>
            </div>
          </div>
      </div>

      <div class="col">
        <div class="card mexe h-100">
          <img src="/img/cozinheiro.png" class="card-img-top" alt="cozinehiro">
          <div class="card-body">
            <h5 class="card-title">Cozinha</h5>
            <p class="card-text">Os melhores cozinheiros da região você encontra aqui, próximo de você, com DignCare.</p>
            <p></p>
            <a href="/html/busca_profissionais.php" class="btn btn-primary">Confira</a>
          </div>
        </div>
      </div>
    </div>

    
    
    <!--Cards Group 2-->
    <div class="row row-cols-1 row-cols-md-4 g-4 espaçamento" style="margin-bottom: 80px;"">
      
      <!--Card 4-->
      <div class=" col">
        <div class="card mexe h-100">
          <img src="/img/cuidadora.png" class="card-img-top" alt="cuidadora">
          <div class="card-body">
            <h5 class="card-title">Cuidador de Idosos</h5>
            <p class="card-text">Aqui você vai encontrar as pessoas mais qualificadas para cuidar de idosos. </p>
            <a href="/html/busca_profissionais.php" class="btn btn-primary">Confira</a>
        </div>
      </div>
    </div>

    <!--Card 5-->
    <div class="col">
      <div class="card mexe h-100">
        <img src="/img/manutencao.png" class="card-img-top" alt="manutenção">
        <div class="card-body">
          <h5 class="card-title">Serviços Gerais</h5>
          <p class="card-text">Ache uma pessoa responsável e qualificada, para ajustar serviços gerais.</p>
          <a href="/html/busca_profissionais.php" class="btn btn-primary">Confira</a>
        </div>
      </div>
    </div>
    
    <!--Card 6-->
    <div class="col">
      <div class="card mexe h-100">
        <img src="/img/pets.png" class="card-img-top" alt="limpeza">
        <div class="card-body">
          <h5 class="card-title">Cuidador de Pets</h5>
          <p class="card-text">Aqui você vai encontrar as pessoas mais qualificadas para cuidar do seu pet.</p>
          <a href="/html/busca_profissionais.php" class="btn btn-primary">Confira</a>
        </div>
      </div>
    </div>
      <div class="col">
        <div class="card mexe h-100">
          <img src="/img/tutora.png" class="card-img-top" alt="jardinagem">
          <div class="card-body">
            <h5 class="card-title">Tutora Educacional</h5>
            <p class="card-text">Aqui você vai encontrar as pessoas mais qualificadas para ensinar ao seu filho. </p>
            <a href="/html/busca_profissionais.php" class="btn btn-primary">Confira</a>
          </div>
        </div>
      </div>
    </div>
    </div>

    <div id="1" class="conteudo">

      <a href="/html/cadastro_servicos.php"><button type="button" class="btn btn-primary mx-1">Criar solicitação de serviço</button></a>

      <div class="my-5">

        <!--Grupo de Cards 1-->
        <div class="row row-cols-1 row-cols-md-4 g-4 espaçamento" style="margin-bottom: 80px;">
          
          <!--Card 1 - Jardineiros -->
          <div class="col">
            <div class="card mexe h-100">
              <img src="/img/Jardinagem.png" class="card-img-top" alt="jardinagem">
              <div class="card-body">
                <h5 class="card-title">Jardinagem</h5>
                <p class="card-text">Serviços abertos para Jardinagem.</p>
                <a href="/html/servicos_abertos.php" class="btn btn-primary">Confira</a>
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
                <a href="/html/servicos_abertos.php" class="btn btn-primary">Confira</a>
              </div>
          </div>
        </div>
        
        <!--Card 3 - Diaristas -->
        <div class="col">
          <div class="card mexe h-100">
            <img src="/img/Limpeza.png" class="card-img-top" alt="limpeza">
            <div class="card-body">
              <h5 class="card-title">Diáristas</h5>
              <p class="card-text">Serviços abertos para Diaristas.</p>
              <a href="/html/servicos_abertos.php" class="btn btn-primary">Confira</a>
            </div>
          </div>
        </div>
        
        <!--Card 4 - Cozinheiros -->
        <div class="col">
          <div class="card mexe h-100">
            <img src="/img/cozinheiro.png" class="card-img-top" alt="cozinehiro">
            <div class="card-body">
              <h5 class="card-title">Cozinha</h5>
              <p class="card-text">Serviços abertos para cozinheiros.</p>
              <a href="/html/servicos_abertos.php" class="btn btn-primary">Confira</a>
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
              <h5 class="card-title">Cuidador de Idosos</h5>
              <p class="card-text">Serviços abertos para Cuidadores de Idosos. </p>
              <a href="/html/servicos_abertos.php" class="btn btn-primary">Confira</a>
            </div>
          </div>
        </div>
        
        <!--Card 6 - Serviços Gerais -->
        <div class="col">
          <div class="card mexe h-100">
            <img src="/img/manutencao.png" class="card-img-top" alt="manutenção">
            <div class="card-body">
              <h5 class="card-title">Serviços Gerais</h5>
              <p class="card-text">Serviços abertos para Manutenções Gerais.</p>
              <a href="/html/servicos_abertos.php" class="btn btn-primary">Confira</a>
            </div>
          </div>
        </div>
        
        <!--Card 7 - Cozinheiros -->
        <div class="col">
          <div class="card mexe h-100">
            <img src="/img/pets.png" class="card-img-top" alt="limpeza">
            <div class="card-body">
              <h5 class="card-title">Cuidador de Pets</h5>
              <p class="card-text">Serviços abertos para Cuidadores de Pets.</p>
              <a href="/html/servicos_abertos.php" class="btn btn-primary">Confira</a>
            </div>
          </div>
        </div>
        
        <!--Card 8 - Tutores -->
        <div class="col">
          <div class="card mexe h-100">
            <img src="/img/tutora.png" class="card-img-top" alt="jardinagem">
            <div class="card-body">
              <h5 class="card-title">Tutora Educacional</h5>
              <p class="card-text">Serviços abertos para Tutores Educacionais. </p>
              <a href="/html/servicos_abertos.php" class="btn btn-primary">Confira</a>
            </div>
          </div>
        </div>
      </div>

      </div>
    </div>
  </section>

    <footer class="py-4 mt-auto texto">
        <div class="fs-6">
            <p class="mexe">&copy; Direitos Autorais Reservados Por DignCare.</p>
            <p ><a class="mexe" href="https://maps.app.goo.gl/9GVxGAeCZJMZK6yYA" target="_blank">📍 Nossa sede</a></p>
            <p ><a class="mexe" href="/html/sobre.php">Sobre nós</a></p>
            <p ><a class="mexe" href="mailto:digncare@gmail.com">✉ Entre em contato conosco!</a></p>
        </div>
    </footer>

</body>
</html>