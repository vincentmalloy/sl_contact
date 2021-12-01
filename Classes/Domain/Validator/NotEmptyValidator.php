<?php

namespace SimonLundius\SlContact\Domain\Validator;

use TYPO3\CMS\Extbase\Validation\Validator\AbstractValidator;

class NotEmptyValidator extends AbstractValidator
{
    protected $acceptsEmptyValues = false;

   public function isValid($value)
    {
        if ( $this->isEmpty($value)){
            $this->addError(
                $this->translateErrorMessage(
                    'tx_slcontact.validator.empty',
                    'sl_contact'
                ), 1);
        }
    }

    protected function isEmptyString($value)
    {
        $isEmpty=false;
        if ( strlen($value) == 0 ){
            $isEmpty=true;
        }
        if ($value === null) {
            $isEmpty=true;
        }
        if ($value === '') {
            $isEmpty=true;
        }
        if (is_array($value) && empty($value)) {
            $isEmpty=true;
        }
        if (is_object($value) && $value instanceof \Countable && $value->count() === 0) {
            $isEmpty=true;
        }
        return $isEmpty;
    }
}