<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Form Relay - JSON Request Plugin',
    'description' => 'Send form data via JSON HTTP requests',
    'category' => 'be',
    'author' => '',
    'author_email' => '',
    'author_company' => 'Mediatis AG',
    'state' => 'alpha',
    'internal' => '',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.2',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-10.4.99',
            'formrelay' => '>=2.0.0'
        ],
        'conflicts' => [
        ],
    ],
    'suggests' => [
    ],
];
