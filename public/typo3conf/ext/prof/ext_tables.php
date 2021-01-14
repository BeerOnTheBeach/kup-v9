<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Botb.Prof',
            'Berufe',
            'Berufe-Plugin'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('prof', 'Configuration/TypoScript', 'Profession');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_prof_domain_model_profession', 'EXT:prof/Resources/Private/Language/locallang_csh_tx_prof_domain_model_profession.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_prof_domain_model_profession');

    }
);
