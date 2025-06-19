<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - DignCare</title>
    <link rel="icon" type="image/png" href="/img/icon.png" />
    <link rel="stylesheet" href="/CSS/cadastro.css" />
    <script src="/JS/transicao.js" defer></script>
    <script src="/JS/validacao_logar.js" defer></script>
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
    <section class="container main-content">
      <!-- Formulário de cadastro -->
      <form id="formulario" action="/php/logar_usr.php" method="post" class="form-box">
        <h2>Seja bem-vindo de volta! <br> Estamos feliz de receber você novamente!</h2>    
        <?php
          if (isset($_GET['erro']) && $_GET['erro'] === 'email') {
              echo "<p style='color:red;'>Email ou senha incorretos.</p>";
          }
        ?>
        <span class="erro" id="erro-email"></span>
        <input type="email" name="email" id="email" placeholder="Digite seu email">

        <span class="erro" id="erro-senha"></span>
        <input type="password" name="senha" id="senha" placeholder="Digite sua senha">

        <button type="submit">Próximo</button>

        <p>Já possui uma conta? <a href="login.html" class="link mexe">Entrar</a></p>
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