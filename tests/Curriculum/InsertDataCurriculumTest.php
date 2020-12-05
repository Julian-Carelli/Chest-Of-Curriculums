<?php 

use PHPUnit\Framework\TestCase;
use App\Models\Connection;
use App\Models\Curriculum\InsertData;

class InsertDataCurriculumTest extends TestCase
{
    public function testAddCurriculum()
    {
        $sut = new Connection();
        $date_now = date("Y-m-d H:i:s");
        $sut_2 = new InsertData('julian', 'pipo', 'carelli', 'motos87085j@gmail.com', '28', 'andorra', $date_now);

        $this->assertEquals(true, $sut_2->insertData($sut));
    }
}


