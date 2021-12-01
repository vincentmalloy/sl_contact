<?php

declare(strict_types=1);

namespace SimonLundius\SlContact\Domain\Model;


/**
 * This file is part of the "Contact Form" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Simon Lundius <simon.lundius@protonmail.com>
 */

/**
 * ContactRequest
 */
class ContactRequest extends \TYPO3\CMS\Extbase\DomainObject\AbstractValueObject
{

    /**
     * name
     *
     * @TYPO3\CMS\Extbase\Annotation\Validate("SimonLundius\SlContact\Domain\Validator\NotEmptyValidator")
     * @var string
     */
    protected $name = '';

    /**
     * email
     *
     * @TYPO3\CMS\Extbase\Annotation\Validate("SimonLundius\SlContact\Domain\Validator\NotEmptyValidator")
     * @TYPO3\CMS\Extbase\Annotation\Validate("SimonLundius\SlContact\Domain\Validator\EmailValidator")
     * @var string
     */
    protected $email = '';

    /**
     * message
     *
     * @TYPO3\CMS\Extbase\Annotation\Validate("SimonLundius\SlContact\Domain\Validator\NotEmptyValidator")
     * @var string
     */
    protected $message = '';

    /**
     * consentGiven
     *
     * @TYPO3\CMS\Extbase\Annotation\Validate("SimonLundius\SlContact\Domain\Validator\ConsentGivenValidator")
     * @var bool
     */
    protected $consentGiven = false;

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Returns the email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the email
     *
     * @param string $email
     * @return void
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * Returns the message
     *
     * @return string $message
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets the message
     *
     * @param string $message
     * @return void
     */
    public function setMessage(string $message)
    {
        $this->message = $message;
    }

    /**
     * Returns the consentGiven
     *
     * @return bool $consentGiven
     */
    public function getConsentGiven()
    {
        return $this->consentGiven;
    }

    /**
     * Sets the consentGiven
     *
     * @param bool $consentGiven
     * @return void
     */
    public function setConsentGiven(bool $consentGiven)
    {
        $this->consentGiven = $consentGiven;
    }

    /**
     * Returns the boolean state of consentGiven
     *
     * @return bool
     */
    public function isConsentGiven()
    {
        return $this->consentGiven;
    }
}
