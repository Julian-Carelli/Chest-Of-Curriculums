<?php 

use PHPUnit\Framework\TestCase;
use App\Models\Connection;
use App\Models\Curriculum\DeleteAllData;

class DeleteAllDataTest extends TestCase
{
    public function testDeleteAllCurriculum()
    {
        $sut = new Connection();
        $sut_2 = new DeleteAllData();

        $this->assertEquals(true, $sut_2->deleteAllData($sut));
    }
}