<?php 

use PHPUnit\Framework\TestCase;
use App\Models\Connection;
use App\Models\Curriculum\SelectsData;

class SelectsDataTest extends TestCase
{
    public function testSelectsAllCurriculum()
    {
        $NUMBER_ID = 1;

        $sut = new Connection();
        $sut_2 = new SelectsData();

        $array1 = $sut_2->selectsData($sut, $NUMBER_ID);
        $array2 = $sut_2->selectsData($sut, $NUMBER_ID);

        $this->assertEqualsCanonicalizing($array1, $array2);

    }
}