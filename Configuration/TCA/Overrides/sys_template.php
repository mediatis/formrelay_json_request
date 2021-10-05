<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'formrelay_json_request',
    'Configuration/TypoScript',
    'FormRelay JSON Request'
);
