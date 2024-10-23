<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">Registro</h2>
            <img src="../img/icon_ussuary.png">
            <p class="card-description">Nueva  cuenta para acceder a nuestros servicios.</p>
        </div>
        <form action="#" method="post">
            <div class="form-group">
                <label for="username">Usuario</label>
                <input type="text" id="username" name="username" placeholder="Ingrese tu nombre de usuario" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <div class="password-input">
                    <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required>
                    <button type="button" class="toggle-password" onclick="togglePassword()">👁️</button>
                </div>
            </div>
            <button type="submit" class="submit-btn">Registrarse</button>
        </form>
    </div>

    <script>
        function togglePassword() {
            var passwordInput = document.getElementById("password");
            var toggleButton = document.querySelector(".toggle-password");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleButton.textContent = "🙈";
            } else {
                passwordInput.type = "password";
                toggleButton.textContent = "👁️";
            }
        }
    </script>
</body>
</html>