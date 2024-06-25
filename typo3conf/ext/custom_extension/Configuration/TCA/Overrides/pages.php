<?php
defined('TYPO3') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'custom_extension',
    'Configuration/TSConfig/PageTSConfig/BackendLayouts/Default.tsconfig',
    'custom_extension Backend Layout'
);