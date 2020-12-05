<?php 

namespace App\Controllers;

require_once __DIR__ . '/../../vendor/autoload.php';
include __DIR__ . '/../../utils/insertDataInSession.php';

use App\Models\Connection;
use App\Models\User\ValidationData;
use \PDO;

try {
    $connection = new Connection();
    $users = new ValidationData();
    $request = $users->validationData($connection,'email-Login', 'password-Login');

    if($request->rowCount() > 0){
        $data = $request->fetch(PDO::FETCH_OBJ);
        
        session_start();
        insertDataInSession('active', true);
        insertDataInSession('username', $data->username);
        insertDataInSession('email', $data->email);
        insertDataInSession('password', $data->password);
    
        header('Location: ../../views/curriculums.php');
    
        return $data;   
    }

}
catch(Exception $e){

}

