<?php

class EditCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        // edit scenario
        $I->amOnPage('/');
        $I->see('BE Berat');
        $I->amOnPage('/data/1');
        $I->see('Edit');
        $I->see('2021-11-01');
        $I->click('Edit');
        $I->see('Update Berat');
        $I->fillField('date', '2021-11-01');
        $I->fillField('max', '70');
        $I->fillField('min', '60');
        $I->click('Submit');
        $I->see('BE Berat');
        $I->see('2021-11-01');
        $I->see('70');
        $I->see('60');
    }
}
