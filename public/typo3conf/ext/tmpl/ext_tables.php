<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3_MODE') || die();

/***************
 * TypoScript: Framework
 * Include Template-Package
 */
ExtensionManagementUtility::addStaticFile(
    'tmpl',
    'Configuration/TypoScript',
    'Template-Package'
);