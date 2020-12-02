<?php 

namespace App\Models\User;

use App\Models\Connection;
use App\Models\User\Users;
use \PDO;

class InsertData extends Users
{
    public function insertData(Connection $connection) : bool
    {
        try {
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $users = $connection->prepare("INSERT INTO `users`(`username`, `email`, `password`) VALUES (:username, :email, :password)");

            $users->bindParam(':username', $this->username);
            $users->bindParam(':email', $this->email);
            $users->bindParam(':password', $this->password);

            $user = $users->execute();
            return $user;
        }
        catch(PDOException $Exception){
            echo 'Error:' . ' : ' . $Exception->getMessage();
        }
        
    }
 
}