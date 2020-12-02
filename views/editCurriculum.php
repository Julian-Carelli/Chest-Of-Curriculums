<?php 

require_once '../vendor/autoload.php';

use App\Models\Connection;
use App\Models\Curriculum\SelectData;


session_start();

if(isset($_SESSION['active'])){
    $id = $_GET['id'];

    $connection = new Connection();
    $curriculums = new SelectData();
    $arrays = $curriculums->selectData($connection, $id);
}
else {
    header('Location: login.php');
    die();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/assets/styles/global.css">
    <link rel="stylesheet" href="../public/assets/styles/form.css?v=<?php echo(rand()); ?>">
    <title>Chest Of Curriculums</title>
</head>
<body>

    <div class="AddCurriculum">
        <div class="AddCurriculum-contain">
            <div class="AddCurriculum-contain__name">
                <h2 class="AddCurriculum-contain__title">Editar Curriculum</h2>
            </div>
            <form id="editForm" class="AddCurriculum-contain__form"  method="POST">
                <input id="id" type="hidden" value=<?php echo $arrays->id?>>
                <div class="AddCurriculum-contain__username">
                    <label class="AddCurriculum-contain__label form-group">Nombre</label>
                    <input id="name" maxlength="15" type="text" name="name" value="<?php echo $arrays->name?>" required placeholder="Ingrese un nombre" class="AddCurriculum-contain__input form-group">
                </div>
                <div class="AddCurriculum-contain__last-Name">
                    <label class="AddCurriculum-contain__label form-group">Apellido</label>
                    <input id="lastName" maxlength="15" type="text" name="last-name" value="<?php echo $arrays->last_name?>" required placeholder="Ingrese un apellido" class="AddCurriculum-contain__input form-group">
                </div>
                <div class="AddCurriculum-contain__profession">
                    <label class="AddCurriculum-contain__label form-group">Profesion</label>
                    <input id="profession" maxlength="30" class="AddCurriculum-contain__input form-group" name="profession" type="text" value="<?php echo $arrays->profession?>"  required placeholder="Ingrese una profesion">
                </div>
                <div class="AddCurriculum-contain__email">
                    <label class="AddCurriculum-contain__label form-group">Email</label>
                    <input id="email" maxlength="30" name="email-curriculum"class="AddCurriculum-contain__input form-group" type="email" value="<?php echo $arrays->email?>" required placeholder="Ingrese un email">
                </div>
                <div class="AddCurriculum-contain__age">
                    <label class="AddCurriculum-contain__label form-group">Edad</label>
                    <input id="age" maxlength="2"class="AddCurriculum-contain__input form-group" name="age" type="text" value="<?php echo $arrays->age?>"  required placeholder="Ingrese una edad">
                </div>
                <div class="AddCurriculum-contain__place-of-residence">
                    <label class="AddCurriculum-contain__label form-group">Lugar de residencia</label>
                    <input id="placeOfResidence" maxlength="30" name="place-of-residence" class="AddCurriculum-contain__input form-group" type="text" value="<?php echo $arrays->place_of_residence?>"  required placeholder="Ingrese un lugar de residencia">
                </div>        
                <div class="AddCurriculum-contain__send form-group">
                    <button class="AddCurriculum-contain__button btn btn-primary" type="submit">Editar curriculum</button>
                </div>
            </form>
        </div>    
    </div>

    <script src="../js/request/ajaxEditForm.js" type="module"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>