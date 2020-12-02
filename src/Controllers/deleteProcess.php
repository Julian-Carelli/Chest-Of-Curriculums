<?php 

namespace App\Controllers;

require_once '../../vendor/autoload.php';

use App\Models\Connection;
use App\Models\Curriculum\DeleteData;


if(!isset($_GET['id'])){
    header('Location:../../views/curriculums.php');
}


$id = $_GET['id'];

$connection = new Connection();
$curriculums = new DeleteData();
$curriculum = $curriculums->deleteData($connection, $id);

if($curriculum === true){
    header("Location:../../views/curriculums.php");
}
else {
    echo 'Error';
}
