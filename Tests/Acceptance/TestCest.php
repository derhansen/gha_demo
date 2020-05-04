<?php

/*
 * This file is part of the Extension "gha_demo" for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Derhansen\GhaDemo\Tests\Acceptance;

use AcceptanceTester;

/**
 * Class TestCest
 */
class TestCest
{
    public function rootPageShowsExpectedString(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Root Page');
    }

    public function extensionRecordShown(AcceptanceTester $I)
    {
        $I->amOnPage('/demo-extension');
        $I->see('This is a test record');
    }
}
