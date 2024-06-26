<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'System Reports',
    'description' => 'The reports module groups several system reports.',
    'category' => 'module',
    'author' => 'TYPO3 Core Team',
    'author_email' => 'typo3cms@typo3.org',
    'author_company' => '',
    'state' => 'stable',
    'version' => '11.5.29',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.29',
        ],
        'conflicts' => [],
        'suggests' => [
            'scheduler' => '',
        ],
    ],
];
