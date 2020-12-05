<?php 

use PHPUnit\Framework\TestCase;
use App\Models\Connection;
use App\Models\Curriculum\SelectData;

class SelectDataTest extends TestCase
{
    public function testSelectCurriculum()
    {
        $NUMBER_ID = 187;

        $sut = new Connection();
        $sut_2 = new SelectData();

        $array1 = $sut_2->selectData($sut, $NUMBER_ID);
        $array2 = $sut_2->selectData($sut, $NUMBER_ID);

        $this->assertEqualsCanonicalizing($array1, $array2);

    }
}