<?php 

namespace App\Models\Curriculum;

use App\Models\Connection;
use \PDO;

class SelectsData
{
    public function selectsData(Connection $connection) : array
    {
        try{

            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = 'SELECT * FROM `curriculums` WHERE 1';

            $curriculums = $connection->query($sql);
            $curriculum = $curriculums->fetchAll(PDO::FETCH_OBJ);
            return $curriculum;
        }
        catch(PDOException $Exception){
            echo 'Error:' . ' : ' . $Exception->getMessage();
        }
    }
}