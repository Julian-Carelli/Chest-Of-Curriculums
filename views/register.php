<?php 

session_start();

if(isset($_SESSION['active'])){
    session_destroy();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/assets/styles/global.css?v=<?php echo(rand()); ?>">
    <link rel="stylesheet" href="../public/assets/styles/register.css?v=<?php echo(rand()); ?>">
    <link rel="stylesheet" href="../public/assets/styles/responsive/resRegister.css?v=<?php echo(rand()); ?>">
    <title>Chest Of Curriculums</title>
</head>
<body>

    <div class="Register">
        <div class="Register-contain">
            <div class="Register-contain__name">
                <h2 class="Register-contain__title">Registrarse</h2>
            </div>
            <form id="registerForm" class="Register-contain__form" method="POST">
                <div class="Register-contain__username">
                    <label class="Register-contain__label form-group">Nombre de usuario</label>
                    <input id="username" type="text" name="username" required placeholder="Ingrese un nombre de usuario" class="Register-contain__input form-group">
                </div>
                <div class="Register-contain__email">
                    <label class="Register-contain__label form-group">Correo Electronico</label>
                    <input id="email" type="email" name="email" required placeholder="Ingrese un correo electronico" class="Register-contain__input form-group">
                </div>
                <div class="Register-contain__password">
                    <label class="Register-contain__label form-group">Contraseña</label>
                    <input id="password" class="Register-contain__input form-group" name="password" type="password" required placeholder="Ingrese una contraseña">
                </div>
                <div class="Register-contain__view">
                    <input class="Register-contain__view-password form-group" id="checkbox" type="checkbox">
                    <label class="Register-contain__show-password form-group">Mostrar contraseña</label>
                </div>
                <div class="Register-contain__password">
                    <label class="Register-contain__label form-group">Confirmar contraseña</label>
                    <input id="reconfirmPassword" class="Register-contain__input form-group" type="password" required placeholder="Confirme su contraseña">
                </div>
                <div class="Register-contain__send form-group">
                    <button class="Register-contain__button btn btn-primary" type="submit">Registrarse</button>
                </div>
            </form>
        </div>    
    </div>
    
    <script src="../js/request/ajaxRegister.js" type="module"></script>
    <script src="../js/utils/checkbox.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>