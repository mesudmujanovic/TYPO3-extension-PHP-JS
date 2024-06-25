<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Falconbyte.fb_yt_links',
        'YouTubeLinks',
        [
            \Falconbyte\FbYtLinks\Controller\YouTubeLinksController::class => 'list, show'
        ],
        // non-cacheable actions
        [
            \Falconbyte\FbYtLinks\Controller\YouTubeLinksController::class => ''
        ]
    );
})();