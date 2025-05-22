<?php
session_start();
if (isset($_SESSION['S_IDUSUARIO']) && $_SESSION['S_IDUSUARIO'] == '1') {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Sistema</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="./login.css">
</head>

<body>
    <div class="wrapper">
        <div class="login-container">
            <div class="login-header">
                <div class="login-icon">
                    <i class="fas fa-user-shield"></i>
                </div>
                <h1 class="title">Bienvenido</h1>
                <p class="subtitle">Ingresa tus credenciales para continuar</p>
            </div>

            <form id="loginForm">
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-input" placeholder="Nombre de usuario" id="txt_usuario" value="demo">
                </div>

                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" class="form-input" placeholder="Contraseña" id="txt_pass" value="demo123">
                </div>

                <button type="button" class="login-button" onclick="iniciar()">
                    <span class="spinner"></span>
                    <span class="state">Iniciar Sesión</span>
                </button>
            </form>

            <div class="demo-info">
                <h4><i class="fas fa-info-circle"></i> Credenciales de Demo</h4>
                <p><strong>Usuario:</strong> demo</p>
                <p><strong>Contraseña:</strong> demo123</p>
            </div>

            <div class="forgot-password">
                <a href="#"><i class="fas fa-question-circle"></i> ¿Olvidaste tu contraseña?</a>
            </div>
            <div class="demo-warning">
                <p style="font-size: 0.9em; color: #cc0000; text-align: center; margin-top: 20px;">
                    ⚠️ Este es un proyecto de demostración académica desarrollado en el año 2022 como parte del curso de <strong>Programación II</strong>.
                    Puede contener errores o limitaciones funcionales.
                </p>
            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="utilities/sweetalert2.js"></script>

    <script src="js/usuario.js?rev=<?php echo time();?>"></script>

    <script>
        document.querySelectorAll('.form-input').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.style.transform = 'scale(1.02)';
            });

            input.addEventListener('blur', function() {
                this.parentElement.style.transform = 'scale(1)';
            });
        });

        document.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                iniciar();
            }
        });

        const originalIniciar = window.iniciar;
        if (originalIniciar) {
            window.iniciar = function() {
                const button = document.querySelector('.login-button');
                const state = button.querySelector('.state');

                button.classList.add('loading');
                state.textContent = 'Iniciando...';

                const result = originalIniciar.apply(this, arguments);

                setTimeout(() => {
                    button.classList.remove('loading');
                    state.textContent = 'Iniciar Sesión';
                }, 2000);

                return result;
            };
        }
    </script>
</body>
</html>