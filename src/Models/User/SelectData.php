<?php 

namespace App\Models\User;

use App\Models\Connection;
use \PDO;

class SelectData
{
    public function selectData(Connection $connection, $id) : object
    {
        try{
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $users = $connection->prepare('SELECT * FROM `users` WHERE id = ?;');
            $users->execute([$id]);
            $user = $curriculums->fetch(PDO::FETCH_OBJ);
            
            return $user;
        }
        catch(PDOException $Exception){
            echo 'Error:' . ' : ' . $Exception->getMessage();
        }
        
    }

}