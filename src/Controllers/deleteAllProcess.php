<?php 

namespace App\Controllers;

require_once '../../vendor/autoload.php';

use App\Models\Connection;
use App\Models\Curriculum\DeleteAllData;

$connection = new Connection();
$curriculums = new DeleteAllData();
$curriculum = $curriculums->deleteAllData($connection);

if($curriculum === true){
    header("Location:../../views/curriculums.php");
}
else {
    echo 'Error';
}