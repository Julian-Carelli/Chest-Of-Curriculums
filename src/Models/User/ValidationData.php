<?php 

namespace App\Models\User;

use App\Models\Connection;
use \PDO;

class ValidationData 
{
    public function validationData(Connection $connection, string $email, string $password) : object
    {
        try{
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $user = $_POST[$email];
            $pass = $_POST[$password];

            $request = $connection->prepare('SELECT * FROM users WHERE email = ? and password = ?;');

            $request->execute([$user, $pass]);

            return $request;

        }
        catch(PDOException $Exception){
            echo 'Error:' . ' : ' . $Exception->getMessage();
        }
    }

}