<?php 

namespace App\Controllers;

require_once '../../vendor/autoload.php';

use App\Models\Connection;
use App\Models\Curriculum\SearchData;

$name = $_POST['name'];


if(isset($_POST['name'])){  
    $connection = new Connection();
    $curriculum = new SearchData();
    $arrays = $curriculum->searchData($connection, $name);

    echo json_encode($arrays);
}
else {
    echo 'nada';
}
