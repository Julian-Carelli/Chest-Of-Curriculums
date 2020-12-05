<?php 

namespace App\Models\User;

use App\Models\Connection;
use \PDO;

class SelectData
{

    /** 
    * Selecciona todos los usuarios que se encuentran en la base de datos
    * @param Connection $connection
    * @param int  $id
    */

    public function selectData(Connection $connection, int $id) : object
    {
        try{
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $users = $connection->prepare('SELECT * FROM `users` WHERE id = ?;');
            $users->execute([$id]);
            $user = $users->fetch(PDO::FETCH_OBJ);
            
            return $user;
        }
        catch(PDOException $Exception){
            echo 'Error:' . ' : ' . $Exception->getMessage();
        }
        
    }

}