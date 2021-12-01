<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Contact Form',
    'description' => 'provides a simple plugin to display a contact form',
    'category' => 'plugin',
    'author' => 'Simon Lundius',
    'author_email' => 'simon.lundius@protonmail.com',
    'state' => 'alpha',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
