<?php

declare(strict_types=1);

namespace SimonLundius\SlContact\Controller;

use SimonLundius\SlContact\Domain\Model\ContactRequest;
use TYPO3\CMS\Core\Utility\GeneralUtility;

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
        $this->view->assign('contactRequest', GeneralUtility::makeInstance(ContactRequest::class));
        return $this->htmlResponse();
    }

    /**
     * action submit
     * 
     * @param ContactRequest $contactRequest
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function submitAction(ContactRequest $contactRequest): \Psr\Http\Message\ResponseInterface
    {
        $this->sendEmail($contactRequest);
        $this->view->assign('contactRequest', $contactRequest);
        return $this->htmlResponse();
    }

    /**
     * sends an email with the contact Request
     * 
     * @param ContactRequest $contactRequest
     * @return void
     */
    public function sendEmail(ContactRequest $contactRequest)
    {
        //TODO: implement email
        return;
    }
}
