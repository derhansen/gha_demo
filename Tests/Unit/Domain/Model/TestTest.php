<?php

declare(strict_types=1);

/*
 * This file is part of the Extension "gha_demo" for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Derhansen\GhaDemo\Domain\Model;

use TYPO3\TestingFramework\Core\BaseTestCase;

/**
 * Class TestTest
 */
class TestTest extends BaseTestCase
{
    /**
     * @var \Derhansen\GhaDemo\Domain\Model\Test
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();
        $this->subject = new \Derhansen\GhaDemo\Domain\Model\Test();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('This is a test');
        self::assertEquals('This is a test', $this->subject->getTitle());
    }
}
