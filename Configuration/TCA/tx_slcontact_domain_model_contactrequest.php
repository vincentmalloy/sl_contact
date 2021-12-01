<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:sl_contact/Resources/Private/Language/locallang_db.xlf:tx_slcontact_domain_model_contactrequest',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'enablecolumns' => [
        ],
        'searchFields' => 'name,email,message',
        'iconfile' => 'EXT:sl_contact/Resources/Public/Icons/tx_slcontact_domain_model_contactrequest.gif'
    ],
    'types' => [
        '1' => ['showitem' => 'name, email, message, consent_given, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid, l10n_parent, l10n_diffsource, '],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'language',
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_slcontact_domain_model_contactrequest',
                'foreign_table_where' => 'AND {#tx_slcontact_domain_model_contactrequest}.{#pid}=###CURRENT_PID### AND {#tx_slcontact_domain_model_contactrequest}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],

        'name' => [
            'exclude' => false,
            'label' => 'LLL:EXT:sl_contact/Resources/Private/Language/locallang_db.xlf:tx_slcontact_domain_model_contactrequest.name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'email' => [
            'exclude' => false,
            'label' => 'LLL:EXT:sl_contact/Resources/Private/Language/locallang_db.xlf:tx_slcontact_domain_model_contactrequest.email',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'nospace,email',
                'default' => ''
            ]
        ],
        'message' => [
            'exclude' => false,
            'label' => 'LLL:EXT:sl_contact/Resources/Private/Language/locallang_db.xlf:tx_slcontact_domain_model_contactrequest.message',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'consent_given' => [
            'exclude' => false,
            'label' => 'LLL:EXT:sl_contact/Resources/Private/Language/locallang_db.xlf:tx_slcontact_domain_model_contactrequest.consent_given',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                    ]
                ],
                'default' => 0,
            ]
        ],
    
    ],
];
