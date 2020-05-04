<?php

declare(strict_types=1);

/*
 * This file is part of the Extension "gha_demo" for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Derhansen\GhaDemo\Controller;

use Derhansen\GhaDemo\Domain\Repository\TestRepository;

/**
 * TestController
 */
class TestController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * @var TestRepository
     */
    protected $testRepository;

    /**
     * @param TestRepository $testRepository
     */
    public function __construct(TestRepository $testRepository)
    {
        $this->testRepository = $testRepository;
    }

    /**
     * List action
     */
    public function listAction(): void
    {
        $this->view->assignMultiple([
            'data' => $this->testRepository->findAll()
        ]);
    }
}
