<?php

class DetailPageCest
{
    // tests
    public function trySeeIndex(FunctionalTester $I)
    {
        $I->amOnPage('/data/1');
        $I->see('2021-11-01');
    }
}
