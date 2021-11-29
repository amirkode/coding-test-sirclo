<?php

class IndexPageCest
{
    // tests
    public function trySeeIndex(FunctionalTester $I)
    {
        $I->amOnPage('/');
        $I->see('BE Berat');
        for($i = 1; $i <= 25; $i ++) {
            $day = $i;
            if($i < 10)
                $day = '0' . $i;
            $date = '2021-11-' . $day;
            $I->see($date);
        }
    }
}
