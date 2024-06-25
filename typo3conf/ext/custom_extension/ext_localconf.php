<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Falconbyte.custom_extension',
        'CustomPlugin',
        [
            \Falconbyte\CustomExtension\Controller\CustomController::class => 'list, show'
        ],
        // non-cacheable actions
        [
            \Falconbyte\CustomExtension\Controller\CustomController::class => ''
        ]
    );
})();
