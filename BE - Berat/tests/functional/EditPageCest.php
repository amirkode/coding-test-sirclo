<?php

class EditPageCest
{
    // tests
    public function tryCreate(FunctionalTester $I)
    {
        $I->amOnPage('/data/2/edit');
        $I->see('Update Berat');
        $I->fillField('date', '2021-11-02');
        $I->fillField('max', '70');
        $I->fillField('min', '60');
        $I->click('Submit');
        $I->see('BE Berat');
        $I->see('2021-11-02');
        $I->see('70');
        $I->see('60');
    }
}
