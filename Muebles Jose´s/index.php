<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register</title>
    
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700,700i|Open+Sans:400,700&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="Iniciar sesion/assets/css/estilos.css">
</head>
<body>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="php/login_usuario.php" method="POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input required type="email" placeholder="Correo Electronico" name="correo">
                        <input required type="password" placeholder="Contraseña" name="contraseña">
                        <button>Entrar</button>
                    </form>

                    <!--Register-->
                    <form action="php/registro_usuario.php" method="POST" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input required type="text" placeholder="Nombre completo" name="nombre_completo">
                        <input required type="email" placeholder="Correo Electronico" name="correo">
                        <input required type="text" placeholder="Usuario" name="usuario">
                        <input required type="password" placeholder="Contraseña" name="contraseña">
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="Iniciar sesion/assets/js/script.js"></script>
</body>
</html>