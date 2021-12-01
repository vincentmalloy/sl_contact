<?php

declare(strict_types=1);

namespace SimonLundius\SlContact\Controller;


/**
 * This file is part of the "Contact Form" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Simon Lundius <simon.lundius@protonmail.com>
 */

/**
 * ContactRequestController
 */
class ContactRequestController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * action index
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function indexAction(): \Psr\Http\Message\ResponseInterface
    {
        return $this->htmlResponse();
    }

    /**
     * action submit
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function submitAction(): \Psr\Http\Message\ResponseInterface
    {
        return $this->htmlResponse();
    }
}
