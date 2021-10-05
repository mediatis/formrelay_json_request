<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

// register Hook to process data
(function () {
    /** @var \Mediatis\Formrelay\Service\Registry $registry */
    $registry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\Mediatis\Formrelay\Service\Registry::class);

    // register destination
    $registry->registerDestination(\Mediatis\FormrelayJsonRequest\Destination\JsonRequest::class);
})();
