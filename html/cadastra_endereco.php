<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro Endereço - DignCare</title>
    <link rel="icon" type="image/png" href="/img/icon.png" />
    <link rel="stylesheet" href="/CSS/cadastro.css" />
    <script src="/JS/transicao.js" defer></script>
    <script src="/JS/validacao_cadastro.js" defer></script>
    <script src="/JS/limpa_url.js" defer></script>
  </head>

  <body class="fundo">
  
    <!-- Logo e divisor -->
    <header class="borda">
        <nav class="centralizar py-2">
            <a class="centro" href="/index.php">
                <img class="mexe" src="/img/logo_horizontal.png" alt="logo" width="255">
            </a>
        </nav>
    </header>

    <!-- Conteúdo principal -->
    <section class="container main-content ">
      <!-- Formulário de cadastro -->
      <form id="formulario" action="/php/cadastra_endereco_bd.php" method="post" class="form-box">   
        <h2>Insira o seu Endereço</h2>  

        <span class="erro" id="erro-cep"></span>
        <input type="text" name="cep" id="cep" placeholder="Digite seu CEP" maxlength="8">

        <span class="erro" id="erro-numero"></span>
        <input type="text" name="numero" id="numero" placeholder="Digite o numero da sua residencia" maxlength="11">

        <span class="erro" id="erro-referencia"></span>
        <input type="text" name="referencia" id="referencia" placeholder="Digite um ponto de referencia">

        <button type="submit">Próximo</button>

      </form>  
    </section>

    <footer class="texto">
      <p class="mexe">&copy; Direitos Autorais Reservados Por DignCare.</p>
      <p><a class="mexe" href="https://maps.app.goo.gl/9GVxGAeCZJMZK6yYA" target="_blank">📍 Nossa sede</a></p>
      <p><a class="mexe" href="/html/sobre.php">Sobre nós</a></p>
      <p><a class="mexe" href="mailto:digncare@gmail.com">✉ Entre em contato conosco!</a></p>
    </footer>
    
  </body>
</html>