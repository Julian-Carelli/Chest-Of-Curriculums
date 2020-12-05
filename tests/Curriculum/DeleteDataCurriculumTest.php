<?php 

use PHPUnit\Framework\TestCase;
use App\Models\Connection;
use App\Models\Curriculum\DeleteData;

class DeleteDataTest extends TestCase
{
    public function testDeleteCurriculum()
    {
        $sut = new Connection();
        $sut_2 = new DeleteData();

        $this->assertEquals(true, $sut_2->deleteData($sut, 130));
    }
}