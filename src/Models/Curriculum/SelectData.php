<?php 

namespace App\Models\Curriculum;

use App\Models\Connection;
use \PDO;


class SelectData
{
    public function selectData(Connection $connection, int $id) : object
    {   
        try {

            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $curriculums = $connection->prepare('SELECT * FROM `curriculums` WHERE id = ?;');
            $curriculums->execute([$id]);
            $curriculum = $curriculums->fetch(PDO::FETCH_OBJ);
            return $curriculum;
        }
        catch(PDOException $Exception){
            echo 'Error:' . ' : ' . $Exception->getMessage();
        }
    }
}

?>