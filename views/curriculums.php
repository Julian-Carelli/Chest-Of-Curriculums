<?php 

require_once '../vendor/autoload.php';

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
    <title>Chest Of Curriculums</title>
</head>
<body>

    <div class="Curriculums container-fluid">
        <nav class="Curriculums__navbar row navbar navbar-dark bg-primary">
            <div class="Curriculums__user col-12">
                <p class="Curriculums__username"><?php echo $_SESSION['username'] ?></p>
                <a href="login.php" class="Curriculums__username">Cerrar sesíon</a>
            </div>
        </nav>
        <div class="Curriculums__header row">
            <div class="Curriculums__name col-12">
                <h2 class="Curriculums__title">Curriculums</h2>
                <div class="Curriculums__underline"></div>
            </div>
        </div>
        <div class="Curriculums__function row">
            <form action="../src/Controllers/searchProcess.php" id="searchForm" method="POST" class="Curriculums__filter col-12">
                <input id="search" name="name" maxlength="15" class="Curriculums__input form-group" placeholder="Busca por nombre de ingresante"/>
            </form>
        </div>
        <div class="Curriculums__links row">
            <div class="Curriculums__create">
                <button class="Curriculums__button btn btn-primary">
                    <a class="Curriculums__link" href="addCurriculum.php">Agregar curriculums</a>
                </button>
            </div>
            <div class="Curriculums__delete">
                <button class="Curriculums__button btn btn-danger">
                    <a class="Curriculums__link" href="../src/Controllers/deleteAllProcess.php">Eliminar curriculums</a>
                </button>
            </div>
        </div>
        <div id="container" class="Curriculums__main row">
        <?php 
            foreach($arrays as $array){
            ?>
            <div class="Curriculums-curriculum col-4">
                <div class="Curriculums-curriculum__name">
                    <h2 class="Curriculums-curriculum__title"><?php echo $array->name . " " . $array->last_name ?></h2>
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
                <div class="Curriculums-curriculum__buttons">
                    <div class="Curriculums-curriculum__link">
                        <button class="Curriculums-curriculum__button btn btn-primary">
                            <a class="Curriculums-curriculum__edit" href="editCurriculum.php?id=<?php echo "$array->id"?>" >
                                Editar Curriculum
                            </a>
                        </button>
                    </div>
                    <div class="Curriculums-curriculum__link">
                        <button class="Curriculums-curriculum__button btn btn-danger">
                            <a class="Curriculums-curriculum__delete" href="../src/Controllers/deleteProcess.php?id=<?php echo "$array->id"?>">
                                Eliminar Curriculum
                            </a>
                        </button>
                    </div>
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