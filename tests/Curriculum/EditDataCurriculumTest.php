<?php 

use PHPUnit\Framework\TestCase;
use App\Models\Connection;
use App\Models\Curriculum\EditData;

class EditDataTest extends TestCase
{
    public function testEditCurriculum()
    {
        $sut = new Connection();

        $array = [
            'id' =>  'id',
            'name' => 'name',
            'lastName' => 'lastName',
            'profession' => 'profession',
            'email' => 'email',
            'age' => 'age',
            'place' => 'place',
            'date' => date("Y-m-d H:i:s")
        ];

        $sut_3 = new EditData();



        $this->assertEquals(true, $sut_3->editData($sut, $array));
    }
}