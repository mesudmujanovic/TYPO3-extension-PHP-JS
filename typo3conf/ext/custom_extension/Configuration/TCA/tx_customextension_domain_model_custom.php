<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:custom_extension/Resources/Private/Language/locallang_db.xlf:tx_customextension_domain_model_custom',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'searchFields' => 'name,job,hobby',
        'iconfile' => 'EXT:custom_extension/Resources/Public/Icons/tx_customextension_domain_model_custom.gif'
    ],
    'types' => [
        '1' => ['showitem' => 'name, job, hobby, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden'],
    ],
    'columns' => [
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
        'name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:custom_extension/Resources/Private/Language/locallang_db.xlf:tx_customextension_domain_model_custom.name',
            'description' => 'LLL:EXT:custom_extension/Resources/Private/Language/locallang_db.xlf:tx_fbytlinks_domain_model_youtubelinks.berschreibung.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'job' => [
            'exclude' => true,
            'label' => 'LLL:EXT:custom_extension/Resources/Private/Language/locallang_db.xlf:tx_customextension_domain_model_custom.job',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'hobby' => [
            'exclude' => true,
            'label' => 'LLL:EXT:custom_extension/Resources/Private/Language/locallang_db.xlf:tx_customextension_domain_model_custom.hobby',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
    ],
];
