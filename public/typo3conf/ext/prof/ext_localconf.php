<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Botb.Prof',
            'Berufe',
            [
                'Profession' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Profession' => 'create, update, delete'
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        berufe {
                            iconIdentifier = prof-plugin-berufe
                            title = LLL:EXT:prof/Resources/Private/Language/locallang_db.xlf:tx_prof_berufe.name
                            description = LLL:EXT:prof/Resources/Private/Language/locallang_db.xlf:tx_prof_berufe.description
                            tt_content_defValues {
                                CType = list
                                list_type = prof_berufe
                            }
                        }
                    }
                    show = *
                }
           }'
        );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'prof-plugin-berufe',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:prof/Resources/Public/Icons/user_plugin_berufe.svg']
			);
		
    }
);
