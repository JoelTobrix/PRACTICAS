<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <title>Inter.@  v5.0</title>
        <!-- Bootstrap core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="../css/login.css" rel="stylesheet">
    </head>
    <body class="text-center">
        <main class="form-signin">
        <form action="../controllers/login.controller.php" method="POST">
    <img src="../img/icon_ussuary.png" height="50px" weight="50px">
    <h1 class="h3 mb-3 fw-normal">Iniciar sesión</h1>

    <!-- Campo para el usuario (email) -->
    <label for="inputEmail" class="visually-hidden">Email address</label>
    <input type="email" id="inputEmail" name="usuario" class="form-control" required="" autofocus="" placeholder="Dirección email">

    <!-- Campo para la contraseña -->
    <label for="inputPassword" class="visually-hidden">Password</label>
    <input type="password" id="inputPassword" name="contrasena" class="form-control" required="" placeholder="Contraseña">

    <!-- Recordar sesión -->
    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Recordar sesión
        </label>
    </div>

    <!-- Botón para enviar -->
    <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar sesión</button>

    <p class="mt-5 mb-3 text-muted">© 2024-2025</p>
</form>

        </main>
        <script src="/js/popper.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
    </body>