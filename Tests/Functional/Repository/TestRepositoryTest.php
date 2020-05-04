<?php

declare(strict_types=1);

/*
 * This file is part of the Extension "gha_demo" for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Derhansen\GhaDemo\Tests\Functional\Repository;

use Derhansen\GhaDemo\Domain\Repository\TestRepository;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\TestingFramework\Core\Functional\FunctionalTestCase;

/**
 * Test case for TestRepository
 */
class TestRepositoryTest extends FunctionalTestCase
{
    /** @var ObjectManager */
    protected $objectManager;

    /** @var TestRepository */
    protected $testRepository;

    protected $testExtensionsToLoad = ['typo3conf/ext/gha_demo'];

    protected $coreExtensionsToLoad = ['fluid', 'extensionmanager'];

    public function setUp(): void
    {
        parent::setUp();
        $this->objectManager = GeneralUtility::makeInstance(ObjectManager::class);
        $this->testRepository = $this->objectManager->get(TestRepository::class);
        $this->importDataSet(__DIR__ . '/../Fixtures/tx_ghademo_domain_model_test.xml');
    }

    /**
     * @test
     */
    public function findRecordsByUid()
    {
        $faq = $this->testRepository->findByUid(1);
        self::assertEquals($faq->getTitle(), 'First test on Page UID 1');
    }

    /**
     * @test
     */
    public function findAllTest()
    {
        self::assertEquals(2, $this->testRepository->findAll()->count());
    }
}
