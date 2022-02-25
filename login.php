<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Freedom</title>
		
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="resources/signin.css">
	
	</head>

	<body class="text-center">
    <form class="form-signin" method="POST" action="admin/loginUsuario.php">
      <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Seja Bem-Vindo</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="text" name="usuario" id="inputEmail" class="form-control" placeholder="Usuário ou E-Mail" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      <div class="checkbox mb-3">
        <label>
          <a href="index.php"> Voltar para a página inicial </a>
        </label>
      </div>
      <p class="mt-5 mb-3 text-muted">&copy; HTC Desenvolvimento Web <?php echo date('Y') ?></p>
    </form>
  </body>
</html>