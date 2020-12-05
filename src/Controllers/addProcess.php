<?php 

namespace App\Controllers;

require_once __DIR__ . '/../../vendor/autoload.php';
include_once __DIR__ . '/../../utils/validationPost.php';

use App\Models\Connection;
use App\Models\Curriculum\insertData;

$post = validationPost('name', 'last-name', 'profession', 'email-curriculum', 'age', 'place-of-residence');

try{

    if($post){
        $name = trim($_POST['name']);
        $lastName = trim($_POST['last-name']);
        $profession = $_POST['profession'];
        $email = $_POST['email-curriculum'];
        $age = $_POST['age'];
        $place = $_POST['place-of-residence'];
        $date_now = date("Y-m-d H:i:s");
    
        $connection = new Connection();
        $curriculums = new insertData($name, $lastName, $profession, $email, $age, $place, $date_now);
        $curriculum = $curriculums->insertData($connection);
        
        if($curriculum === true){
            header("Location:../../views/curriculums.php");
        }
    }

}
catch(Exception $e){
    header("Location: ../../views/curriculums.php");
}

?>