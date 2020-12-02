<?php  

namespace App\Controllers;

require_once '../../vendor/autoload.php';

use App\Models\Connection;
use App\Models\User\InsertData;


$post = (isset($_POST['username']) && !empty($_POST['username'])) &&
        (isset($_POST['email']) && !empty($_POST['email'])) &&
        (isset($_POST['password']) && !empty($_POST['password']));


if($post){
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $connection = new Connection();
    $users = new InsertData($username, $email, $password);
    $users->insertData($connection);
}
else {
    header("Location: ./");
}






