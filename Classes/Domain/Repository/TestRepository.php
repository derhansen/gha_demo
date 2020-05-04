<?php

declare(strict_types=1);

/*
 * This file is part of the Extension "gha_demo" for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Derhansen\GhaDemo\Domain\Repository;

use Derhansen\PlainFaq\Domain\Model\Dto\FaqDemand;
use Derhansen\PlainFaq\Utility\CategoryUtility;
use TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings;

/**
 * The repository for Tests
 */
class TestRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    /**
     * Set no storage page for testing purposes
     */
    public function initializeObject()
    {
        $this->defaultQuerySettings = $this->objectManager->get(Typo3QuerySettings::class);
        $this->defaultQuerySettings->setRespectStoragePage(false);
    }
}
