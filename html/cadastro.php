<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro - DignCare</title>
    <link rel="icon" type="image/png" href="/img/icon.png" />
    <link rel="stylesheet" href="/CSS/cadastro.css" />
    <script src="/JS/transicao.js" defer></script>
    <script src="/JS/validacao_cadastro.js" defer></script>
    <script src="/Js/masc-date.js" defer></script>
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
    <section class="container">
      <!-- Formulário de cadastro -->
      <form id="formulario" action="home.php" method="post" class="form-box">
        <h2>Encontre o profissional ideal<br>para a sua casa com poucos cliques!</h2>    

        <div class="role-selection">
          <span class="erro" id="erro-tipo"></span>
          <label>
            <input type="radio" name="tipo_usuario" value="0" required>
            Prestador
          </label>

          <label>
            <input type="radio" name="tipo_usuario" value="1">
            Contratante
          </label>
        </div>

        <span class="erro" id="erro-nome"></span>
        <input type="text" name="nome" id="nome" placeholder="Digite seu nome">

        <span class="erro" id="erro-cpf"></span>
        <input type="text" name="cpf" id="cpf" placeholder="Digite seu cpf" maxlength="11">

        <span class="erro" id="erro-email"></span>
        <input type="email" name="email" id="email" placeholder="Digite seu email">

        <span class="erro" id="erro-nascimento"></span>
        <input type="text" name="nascimento" id="nascimento" placeholder="Digite sua data de nascimento" maxlength="10">

        <span class="erro" id="erro-senha"></span>
        <input type="password" name="senha" id="senha" placeholder="Digite sua senha">

        <span class="erro" id="erro-confirma-senha"></span>
        <input type="password" name="confirma_senha" id="confirma_senha" placeholder="Confirme sua senha">

                


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