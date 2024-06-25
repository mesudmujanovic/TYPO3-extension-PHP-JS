<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_customextension_domain_model_custom', 'EXT:custom_extension/Resources/Private/Language/locallang_csh_tx_customextension_domain_model_custom.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_customextension_domain_model_custom');
})();
