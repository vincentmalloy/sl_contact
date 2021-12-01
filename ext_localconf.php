<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'SlContact',
        'Pi1',
        [
            \SimonLundius\SlContact\Controller\ContactRequestController::class => 'index, submit'
        ],
        // non-cacheable actions
        [
            \SimonLundius\SlContact\Controller\ContactRequestController::class => 'submit'
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    pi1 {
                        iconIdentifier = sl_contact-plugin-pi1
                        title = LLL:EXT:sl_contact/Resources/Private/Language/locallang_db.xlf:tx_sl_contact_pi1.name
                        description = LLL:EXT:sl_contact/Resources/Private/Language/locallang_db.xlf:tx_sl_contact_pi1.description
                        tt_content_defValues {
                            CType = list
                            list_type = slcontact_pi1
                        }
                    }
                }
                show = *
            }
       }'
    );
})();
