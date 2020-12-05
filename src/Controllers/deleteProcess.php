<?php 

namespace App\Controllers;

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Models\Connection;
use App\Models\Curriculum\DeleteData;

if(!isset($_GET['id'])){
    header('Location:../../views/curriculums.php');
}

$id = $_GET['id'];

try{
    $connection = new Connection();
    $curriculums = new DeleteData();
    $curriculum = $curriculums->deleteData($connection, $id);

    if($curriculum === true){
        header("Location:../../views/curriculums.php");
    }

}
catch(Exception $e){

}
