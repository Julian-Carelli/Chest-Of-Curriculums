<?php 

namespace App\Models\Curriculum;

use App\Models\Connection;
use \PDO;


class DeleteData 
{

    /** 
    * Elimina el curriculum seleccionado en la base de datos
    * @param Connection $connection
    * @param int $id
    */

    public function deleteData(Connection $connection, int $id) : bool
    {
        try{
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $curriculums = $connection->prepare('DELETE FROM curriculums WHERE id = ?;');

            $curriculum = $curriculums->execute([$id]);
            return $curriculum;

        }
        catch(PDOException $Exception){
            echo 'error'. ':' . $Exception->getMessage();
        }
        
    }
}