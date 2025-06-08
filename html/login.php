<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - DignCare</title>
  <link rel="icon" type="image/png" href="/img/icon.png" />
  <link rel="stylesheet" href="../CSS/login.css" />
  <script src="JS/transicao.js" defer></script>
</head>

<body>
  <!-- Container principal centralizado -->
  <main class="main-container">

    <!-- Logo clicável centralizada -->
    <header class="logo-container">
      <a href="/index.php"><img class="mexe" src="/img/logo_horizontal.png" alt="logo" width="225"></a>
    </header>

    <!-- Linha abaixo da logo -->
    <div class="linha-divisora"></div>

    <!-- Formulário de login -->
    <section class="form-wrapper">
      <form action="home.php" method="post">
        <fieldset>
          <legend>Encontre o profissional ideal pra sua casa com poucos cliques!</legend>
          <br/>
          
          <input type="text" id="email" name="emailtxt" placeholder="Digite seu Email" required />
          <br/><br/>
          <input type="password" id="senha" name="senhapwd" placeholder="Digite sua Senha" required />
        </fieldset>
        <br />
        <button type="submit">Entrar</button>
        <p>
          Não possui uma conta?
          <a href="cadastro.php">Criar</a>
        </p>
      </form>
    </section>

  </main>
    
</body>
</html>