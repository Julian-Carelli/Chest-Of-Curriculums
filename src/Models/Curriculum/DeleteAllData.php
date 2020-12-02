<?php 


namespace App\Models\Curriculum;

use App\Models\Connection;
use \PDO;


class DeleteAllData
{
    
    public function deleteAllData(Connection $connection) : bool
    {
        try {
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $curriculums = $connection->prepare('DELETE FROM curriculums');

            $curriculum = $curriculums->execute();
            return $curriculum;

        }
        catch(PDOException $Exception){
            echo 'error'. ':' . $Exception->getMessage();
        }
    }

}