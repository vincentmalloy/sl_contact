<?php

namespace SimonLundius\SlContact\Domain\Validator;

use TYPO3\CMS\Extbase\Validation\Validator\AbstractValidator;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class EmailValidator extends AbstractValidator
{
   public function isValid($value)
    {
        if (!is_string($value) || !$this->validEmail($value)) {
            $this->addError(
                $this->translateErrorMessage(
                    'tx_slcontact.validator.emailaddress.invalid',
                    'sl_contact'
                ), 1638378683);
        }
    }


    protected function validEmail($emailAddress)
    {
        return GeneralUtility::validEmail($emailAddress);
    }
}