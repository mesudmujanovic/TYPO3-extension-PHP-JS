<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_fbytlinks_domain_model_youtubelinks', 'EXT:fb_yt_links/Resources/Private/Language/locallang_csh_tx_fbytlinks_domain_model_youtubelinks.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_fbytlinks_domain_model_youtubelinks');
})();
