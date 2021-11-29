<?php

use CodingTest\Sirclo\SimpleMVC\Models\Berat;

class HelperTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testBeratAvg()
    {
        $berat1 = new Berat();
        $berat1->min = 44;
        $berat1->max = 50;
        
        $berat2 = new Berat();
        $berat2->min = 54;
        $berat2->max = 60;
    
        $beratData = [$berat1, $berat2];
        $beratAvg = beratAvg($beratData);
        
        $this->assertNotNull($beratAvg);
        $this->assertSame($beratAvg->avg_min, 49);
        $this->assertSame($beratAvg->avg_max, 55);
        $this->assertSame($beratAvg->avg_diff, 6);
    }
}