<?php
defined('TYPO3') or die();

call_user_func(function()
{
    /**
     * Extension key
     */
    $extensionKey = 'bitconex';

    /**
     * Default TypoScript
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'BitConEx Theme'
    );
});
