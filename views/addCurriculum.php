<?php 

session_start();

if(isset($_SESSION['active'])){
    $user = $_SESSION['username'];
}
else {
    header('Location: login.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/assets/styles/global.css?v=<?php echo(rand()); ?>">
    <link rel="stylesheet" href="../public/assets/styles/form.css?v=<?php echo(rand()); ?>">
    <title>Chest Of Curriculums</title>
</head>
<body>

    <div class="Form">
        <div class="Form-contain">
            <div class="Form-contain__name">
                <h2 class="Form-contain__title">Añadir Curriculum</h2>
            </div>
            <form id="addForm" class="Form-contain__form" method="POST">
                <div class="Form-contain__username">
                    <label class="Form-contain__label form-group">Nombre</label>
                    <input id="name" maxlength="15" type="text" name="name" required placeholder="Ingrese un nombre" class="Form-contain__input form-group">
                </div>
                <div class="Form-contain__last-Name">
                    <label class="Form-contain__label form-group">Apellido</label>
                    <input id="lastName" maxlength="15" type="text" name="last-name" required placeholder="Ingrese un apellido" class="Form-contain__input form-group">
                </div>
                <div class="Form-contain__profession">
                    <label class="Form-contain__label form-group">Profesion</label>
                    <input id="profession" maxlength="30" class="Form-contain__input form-group" name="profession" type="text" required placeholder="Ingrese una profesion">
                </div>
                <div class="Form-contain__email">
                    <label class="Form-contain__label form-group">Email</label>
                    <input id="email" maxlength="30" name="email-curriculum"class="Form-contain__input form-group" type="email" required placeholder="Ingrese un email">
                </div>
                <div class="Form-contain__age">
                    <label class="Form-contain__label form-group">Edad</label>
                    <input id="age" maxlength="2" class="Form-contain__input form-group" name="age" type="text" required placeholder="Ingrese una edad">
                </div>
                <div class="Form-contain__place-of-residence">
                    <label class="Form-contain__label form-group">Lugar de residencia</label>
                    <input id="placeOfResidence" maxlength="30" name="place-of-residence" class="Form-contain__input form-group" type="text" required placeholder="Ingrese un lugar de residencia">
                </div>
                <div class="Form-contain__send form-group">
                    <button class="Form-contain__button btn btn-primary" type="submit">Añadir curriculum</button>
                </div>
            </form>
        </div>    
    </div>

    <script src="../js/request/ajaxAddForm.js" type="module"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>