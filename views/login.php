<?php 

session_start();

if(isset($_SESSION['active'])){
    session_destroy();
}

$email = isset($_GET['email']) ? $_GET['email'] : '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/assets/styles/global.css">
    <link rel="stylesheet" href="../public/assets/styles/login.css?v=<?php echo(rand()); ?>">
    <title>Chest Of Curriculums</title>
</head>
<body>

    <div class="Login">
        <div class="Login-contain">
            <div class="Login-contain__name">
                <h2 class="Login-contain__title">Iniciar sesíon</h2>
            </div>
            <form id="loginForm" class="Login-contain__form" method="POST">
                <div class="Login-contain__email">
                    <label class="Login-contain__label form-group">Correo Electronico</label>
                    <input id="email" type="email" name="email-Login" value="<?php echo $email ?>" required placeholder="Ingrese un correo electronico" class="Login-contain__input form-group">
                </div>
                <div class="Login-contain__password">
                    <label class="Login-contain__label form-group">Contraseña</label>
                    <input id="password" class="Login-contain__input form-group" name="password-Login" type="password" required placeholder="Ingrese una contraseña">
                </div>
                <div class="Login-contain__view">
                    <input class="Login-contain__view-password form-group" id="checkbox" type="checkbox">
                    <label class="Login-contain__show-password form-group">Mostrar contraseña</label>
                </div>
                <div class="Login-contain__send form-group">
                    <button class="Login-contain__button btn btn-primary" type="submit">Iniciar sesíon</button>
                </div>
            </form>
            <div class="Login-contain__links">
                <div class=Login-contain__link>
                    <p class="Login-contain__password">¿Olvidaste tu contraseña?</p>
                </div>
                <div class="Login-contain__link">
                    <a class="Login-contain__register" href="./register.php">Crea una cuenta</a>
                </div>
            </div>
        </div>    
    </div>

    <script src="../js/request/ajaxLogin.js" type="module"></script>
    <script src="../js/utils/checkbox.js" ></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>