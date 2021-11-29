<?php

class CreatePageCest
{
    // tests
    public function tryCreate(FunctionalTester $I)
    {
        $I->amOnPage('/data/create');
        $I->see('Create Berat');
        $I->fillField('date', '2021-12-13');
        $I->fillField('max', '70');
        $I->fillField('min', '60');
        $I->click('Submit');
        $I->see('BE Berat');
        $I->see('2021-12-13');
    }
}
