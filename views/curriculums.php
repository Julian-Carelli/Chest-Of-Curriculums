<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use App\Models\Connection;
use App\Models\Curriculum\SelectsData;

session_start();

if(isset($_SESSION['active'])){
    $user = $_SESSION['username'];
    $connection = new Connection();
    $curriculum = new SelectsData();
    $arrays = $curriculum->selectsData($connection);
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
    <link rel="stylesheet" href="../public/assets/styles/curriculums.css?v=<?php echo(rand()); ?>">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Chest Of Curriculums</title>
</head>
<body>

    <div class="Curriculums container-fluid">
        <nav class="Curriculums__navbar row navbar navbar-dark">
            <div class="Curriculums__user col-12">
                <p class="Curriculums__username"><?php echo $_SESSION['username'] ?></p>
                <a href="login.php" class="Curriculums__username">Cerrar sesíon</a>
            </div>
        </nav>
        <div class="Curriculums__header row">
            <div class="Curriculums__name col-12">
                <h2 class="Curriculums__title">Curriculums</h2>
            </div>
            <div class="Curriculums__menu">
                <p class="Curriculums__text">
                    Todos los curriculums que puedas crear, editar y eliminar en una sola pagina, administralos a tu manera, tu espacio, tu decisíon, una sola oportunidad
                <p>
            </div>
        </div>
        <div class="Curriculums__function row">
            <form action="../src/Controllers/searchProcess.php" id="searchForm" method="POST" class="Curriculums__filter col-12">
                <input id="search" name="name" maxlength="15" class="Curriculums__input form-group" placeholder="Busca por nombre de ingresante"/>
            </form>
        </div>
        <div class="Curriculums__links row">
            <div class="Curriculums__create">
                <button class="Curriculums__button btn" style="background-color: #008891;">
                    <a class="Curriculums__link" style="color:white;" href="addCurriculum.php">Agregar curriculums</a>
                </button>
            </div>
        </div>
        <div id="container" class="Curriculums__main row">
        <?php 
            foreach($arrays as $array){
            ?>
            <div class="Curriculums-curriculum col-4">

                <div class="Curriculums-curriculum__header">
                    <div class="Curriculums-curriculum__name">
                        <h2 class="Curriculums-curriculum__title"><?php echo $array->name . " " . $array->last_name ?></h2>
                    </div>
                    <div class="Curriculums-curriculum__font">
                        <a class="Curriculums-curriculum__edit" href="editCurriculum.php?id=<?php echo "$array->id"?>">
                            <i class="Curriculums-curriculum__icon fas fa-pen"></i>
                        </a>
                        <a class="Curriculums-curriculum__delete" href="../src/Controllers/deleteProcess.php?id=<?php echo "$array->id"?>">
                            <i class="Curriculums-curriculum__icon far fa-trash-alt"></i>
                        </a>
                    </div>
                </div>

                <div class="Curriculums-curriculum__background">
                    <img class="Curriculums__img" src="../public/assets/images/ropa1.jpg" alt="curriculum"></img>
                </div>
                <div class="Curriculums-curriculum__info">
                    <p class="Curriculums-curriculum__text"><?php echo "$array->profession" ?></p>
                    <p class="Curriculums-curriculum__text"><?php echo "$array->email" ?></p>
                    <p class="Curriculums-curriculum__text"><?php echo "$array->age" ?></p>
                    <p class="Curriculums-curriculum__text"><?php echo "$array->place_of_residence"?></p>
                    <p class="Curriculums-curriculum__text"><?php echo "$array->date"?></p>
                </div>
            </div>
            <?php              
            }
        ?>
        </div>
    </div>

    <script src="../js/request/ajaxSearch.js" type="module"></script>
    <script src="../js/views/viewSearch.js" type="text/javascript module"></script>
    <script src="../js/views/viewNoSearch.js" type="text/javascript module"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>