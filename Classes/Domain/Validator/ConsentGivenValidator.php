<?php

namespace SimonLundius\SlContact\Domain\Validator;

use TYPO3\CMS\Extbase\Validation\Validator\AbstractValidator;

class ConsentGivenValidator extends AbstractValidator
{
   public function isValid($value)
    {
        if (!is_bool($value) || !$value) {
            $this->addError(
                $this->translateErrorMessage(
                    'tx_slcontact.validator.consent_given.invalid',
                    'sl_contact'
                ), 1638378683);
        }
    }
}