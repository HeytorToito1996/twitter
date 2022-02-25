<?php

	$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Cover Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="resources/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="resources/cover.css" rel="stylesheet">
  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">Freedom</h3>

          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link" href="inscrevase.php">Criar Conta</a>
            <a class="nav-link" id="entrar" href="login.php">Entrar</a>
          </nav>

        </div>
      </header>

      <main role="main" class="inner cover">
        <h1 class="cover-heading">Projeto Freedom</h1>
        <p class="lead">Uma Rede Social onde você pode ser o que quiser , escrever o que pensa sem se preocupar com restrições , diretrizes e etc... o lugar para quem quer ser FREEDOM</p>
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Desenvolvido por : HTC Desenvolvimento Web</p>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="resources/assets/js/vendor/popper.min.js"></script>
    <script src="resources/dist/js/bootstrap.min.js"></script>
  </body>
</html>
