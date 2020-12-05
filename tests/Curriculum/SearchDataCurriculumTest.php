<?php 

use PHPUnit\Framework\TestCase;
use App\Models\Connection;
use App\Models\Curriculum\SearchData;

class SearchDataTest extends TestCase
{
    public function testSearchCurriculum()
    {
        $sut = new Connection();
        $sut_2 = new SearchData();

        $array1 = $sut_2->searchData($sut, 'julian');
        $array2 = $sut_2->searchData($sut, 'julian');

        $this->assertEqualsCanonicalizing($array1, $array2);

    }
}