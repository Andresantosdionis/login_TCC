<?php
session_start();
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
    <title>Login</title>
  </head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="config.php" method="POST" class="sign-in-form">
          <h2 class="title">Login</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="email" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="senha" />
          </div>
          <a href="site.php"></a><input type="submit" value="Login" class="btn solid" /></a>

          <p class="social-text">Nossas redes sociais</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
        <form action="cadastro.php" method="POST" class="sign-up-form">

          <h2 class="title">Cadastra-se</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="name" id="nome" placeholder="name" require />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="email" require />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="senha" placeholder="senha" require />
          </div>
          <a href="site.php"><input type="submit" class="btn" value="Cadastrar" /></a>
          <p class="social-text">Nossas redes sociais</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Não tem uma conta?</h3>
          <p>
            Faça seu cadastro e inicie seu gerenciamento de tarefas!
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Cadastra-se
          </button>
        </div>
        <img src="img/task.png" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>Já tem uma conta?</h3>
          <p>
            Faça seu Login e inicie seu gerenciamento de tarefas!
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Login
          </button>
        </div>
        <img src="img/task.png" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="app.js"></script>
</body>

</html>