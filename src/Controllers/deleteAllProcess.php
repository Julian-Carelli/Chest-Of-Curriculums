<?php 

namespace App\Controllers;

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Models\Connection;
use App\Models\Curriculum\DeleteAllData;

try {
    $connection = new Connection();
    $curriculums = new DeleteAllData();
    $curriculum = $curriculums->deleteAllData($connection);

    if($curriculum === true){
        header("Location:../../views/curriculums.php");
    }
}
catch(Exception $e){

}
