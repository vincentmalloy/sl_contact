<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_slcontact_domain_model_contactrequest', 'EXT:sl_contact/Resources/Private/Language/locallang_csh_tx_slcontact_domain_model_contactrequest.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_slcontact_domain_model_contactrequest');
})();
