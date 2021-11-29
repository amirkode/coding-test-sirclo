<?php

class CreateCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        // create scenario
        $I->amOnPage('/');
        $I->see('Create');
        $I->click('Create');
        $I->see('Create Berat');
        $I->fillField('date', '2021-12-12');
        $I->fillField('max', '70');
        $I->fillField('min', '60');
        $I->click('Submit');
        $I->see('BE Berat');
        $I->see('2021-12-12');
    }
}
