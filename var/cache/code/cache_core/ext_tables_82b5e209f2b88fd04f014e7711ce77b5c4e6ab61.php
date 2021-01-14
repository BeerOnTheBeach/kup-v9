<?php
/**
 * Compiled ext_tables.php cache file
 */

global $T3_SERVICES, $T3_VAR, $TYPO3_CONF_VARS;
global $TBE_MODULES, $TBE_MODULES_EXT, $TCA;
global $PAGES_TYPES, $TBE_STYLES;
global $_EXTKEY;

/**
 * Extension: core
 * File: C:/xampp 7.3/htdocs/kup-v9/public/typo3/sysext/core/ext_tables.php
 */

$_EXTKEY = 'core';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

/**
 * $GLOBALS['PAGES_TYPES'] defines the various types of pages (field: doktype) the system
 * can handle and what restrictions may apply to them.
 * Here you can define which tables are allowed on a certain pagetype (doktype)
 * NOTE: The 'default' entry in the $GLOBALS['PAGES_TYPES'] array is the 'base' for all
 * types, and for every type the entries simply overrides the entries in the 'default' type!
 */
$GLOBALS['PAGES_TYPES'] = [
    (string)\TYPO3\CMS\Frontend\Page\PageRepository::DOKTYPE_BE_USER_SECTION => [
        'allowedTables' => '*'
    ],
    (string)\TYPO3\CMS\Frontend\Page\PageRepository::DOKTYPE_SYSFOLDER => [
        //  Doktype 254 is a 'Folder' - a general purpose storage folder for whatever you like.
        // In CMS context it's NOT a viewable page. Can contain any element.
        'allowedTables' => '*'
    ],
    (string)\TYPO3\CMS\Frontend\Page\PageRepository::DOKTYPE_RECYCLER => [
        // Doktype 255 is a recycle-bin.
        'allowedTables' => '*'
    ],
    'default' => [
        'allowedTables' => 'pages,sys_category,sys_file_reference,sys_file_collection',
        'onlyAllowedTables' => false
    ],
];

/**
 * $TBE_MODULES contains the structure of the backend modules as they are
 * arranged in main- and sub-modules. Every entry in this array represents a
 * menu item on either first (key) or second level (value from list) in the
 * left menu in the TYPO3 backend
 * For information about adding modules to TYPO3 you should consult the
 * documentation found in "Inside TYPO3"
 */
$GLOBALS['TBE_MODULES'] = [
    'web' => 'list',
    'site' => '',
    'file' => '',
    'user' => '',
    'tools' => '',
    'system' => '',
    'help' => '',
    '_configuration' => [
        'web' => [
            'labels' => 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web.xlf',
            'name' => 'web',
            'iconIdentifier' => 'module-web'
        ],
        'site' => [
            'labels' => 'LLL:EXT:core/Resources/Private/Language/locallang_mod_site.xlf',
            'name' => 'site',
            'workspaces' => 'online',
            'iconIdentifier' => 'module-site',
        ],
        'file' => [
            'labels' => 'LLL:EXT:core/Resources/Private/Language/locallang_mod_file.xlf',
            'navigationFrameModule' => 'file_navframe',
            'name' => 'file',
            'workspaces' => 'online,custom',
            'iconIdentifier' => 'module-file'
        ],
        'user' => [
            'labels' => 'LLL:EXT:core/Resources/Private/Language/locallang_mod_usertools.xlf',
            'name' => 'user',
            'iconIdentifier' => 'status-user-backend'
        ],
        'tools' => [
            'labels' => 'LLL:EXT:core/Resources/Private/Language/locallang_mod_admintools.xlf',
            'name' => 'tools',
            'iconIdentifier' => 'module-tools'
        ],
        'system' => [
            'labels' => 'LLL:EXT:core/Resources/Private/Language/locallang_mod_system.xlf',
            'name' => 'system',
            'iconIdentifier' => 'module-system'
        ],
        'help' => [
            'labels' => 'LLL:EXT:core/Resources/Private/Language/locallang_mod_help.xlf',
            'name' => 'help',
            'iconIdentifier' => 'module-help'
        ]
    ]
];

// Register the page tree core navigation component
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addCoreNavigationComponent('web', 'TYPO3/CMS/Backend/PageTree/PageTreeElement');

/**
 * $TBE_STYLES configures backend styles and colors; Basically this contains
 * all the values that can be used to create new skins for TYPO3.
 * For information about making skins to TYPO3 you should consult the
 * documentation found in "Inside TYPO3"
 */
$GLOBALS['TBE_STYLES'] = [];

/**
 * Setting up $TCA_DESCR - Context Sensitive Help (CSH)
 * For information about using the CSH API in TYPO3 you should consult the
 * documentation found in "Inside TYPO3"
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('pages', 'EXT:core/Resources/Private/Language/locallang_csh_pages.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('be_users', 'EXT:core/Resources/Private/Language/locallang_csh_be_users.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('be_groups', 'EXT:core/Resources/Private/Language/locallang_csh_be_groups.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_filemounts', 'EXT:core/Resources/Private/Language/locallang_csh_sysfilem.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_file_reference', 'EXT:core/Resources/Private/Language/locallang_csh_sysfilereference.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_file_storage', 'EXT:core/Resources/Private/Language/locallang_csh_sysfilestorage.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_language', 'EXT:core/Resources/Private/Language/locallang_csh_syslang.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_news', 'EXT:core/Resources/Private/Language/locallang_csh_sysnews.xlf');
// General Core
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('xMOD_csh_corebe', 'EXT:core/Resources/Private/Language/locallang_csh_corebe.xlf');

/**
 * Extension: frontend
 * File: C:/xampp 7.3/htdocs/kup-v9/public/typo3/sysext/frontend/ext_tables.php
 */

$_EXTKEY = 'frontend';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

// Add allowed records to pages
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tt_content,sys_template,sys_domain,backend_layout');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('_MOD_web_layout', 'EXT:frontend/Resources/Private/Language/locallang_csh_weblayout.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('fe_groups', 'EXT:frontend/Resources/Private/Language/locallang_csh_fe_groups.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('fe_users', 'EXT:frontend/Resources/Private/Language/locallang_csh_fe_users.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_domain', 'EXT:frontend/Resources/Private/Language/locallang_csh_sysdomain.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('sys_template', 'EXT:frontend/Resources/Private/Language/locallang_csh_systmpl.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tt_content', 'EXT:frontend/Resources/Private/Language/locallang_csh_ttcontent.xlf');

/**
 * Extension: install
 * File: C:/xampp 7.3/htdocs/kup-v9/public/typo3/sysext/install/ext_tables.php
 */

$_EXTKEY = 'install';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
    'tools',
    'toolsmaintenance',
    '',
    '',
    [
        'routeTarget' => \TYPO3\CMS\Install\Controller\BackendModuleController::class . '::maintenanceAction',
        'access' => 'systemMaintainer',
        'name' => 'tools_toolsmaintenance',
        'iconIdentifier' => 'module-install-maintenance',
        'labels' => 'LLL:EXT:install/Resources/Private/Language/ModuleInstallMaintenance.xlf'
    ]
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
    'tools',
    'toolssettings',
    '',
    '',
    [
        'routeTarget' => \TYPO3\CMS\Install\Controller\BackendModuleController::class . '::settingsAction',
        'access' => 'systemMaintainer',
        'name' => 'tools_toolssettings',
        'iconIdentifier' => 'module-install-settings',
        'labels' => 'LLL:EXT:install/Resources/Private/Language/ModuleInstallSettings.xlf'
    ]
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
    'tools',
    'toolsupgrade',
    '',
    '',
    [
        'routeTarget' => \TYPO3\CMS\Install\Controller\BackendModuleController::class . '::upgradeAction',
        'access' => 'systemMaintainer',
        'name' => 'tools_toolsupgrade',
        'iconIdentifier' => 'module-install-upgrade',
        'labels' => 'LLL:EXT:install/Resources/Private/Language/ModuleInstallUpgrade.xlf'
    ]
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
    'tools',
    'toolsenvironment',
    '',
    '',
    [
        'routeTarget' => \TYPO3\CMS\Install\Controller\BackendModuleController::class . '::environmentAction',
        'access' => 'systemMaintainer',
        'name' => 'tools_toolsenvironment',
        'iconIdentifier' => 'module-install-environment',
        'labels' => 'LLL:EXT:install/Resources/Private/Language/ModuleInstallEnvironment.xlf'
    ]
);

/**
 * Extension: recordlist
 * File: C:/xampp 7.3/htdocs/kup-v9/public/typo3/sysext/recordlist/ext_tables.php
 */

$_EXTKEY = 'recordlist';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
    'web',
    'list',
    '',
    '',
    [
        'routeTarget' => \TYPO3\CMS\Recordlist\Controller\RecordListController::class . '::mainAction',
        'access' => 'user,group',
        'name' => 'web_list',
        'icon' => 'EXT:recordlist/Resources/Public/Icons/module-list.svg',
        'labels' => 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf'
    ]
);

/**
 * Extension: backend
 * File: C:/xampp 7.3/htdocs/kup-v9/public/typo3/sysext/backend/ext_tables.php
 */

$_EXTKEY = 'backend';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

// Register as a skin
$GLOBALS['TBE_STYLES']['skins']['backend'] = [
    'name' => 'backend',
    'stylesheetDirectories' => [
        'css' => 'EXT:backend/Resources/Public/Css/'
    ]
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
    'web',
    'layout',
    'top',
    '',
    [
        'routeTarget' => \TYPO3\CMS\Backend\Controller\PageLayoutController::class . '::mainAction',
        'access' => 'user,group',
        'name' => 'web_layout',
        'icon' => 'EXT:backend/Resources/Public/Icons/module-page.svg',
        'labels' => 'LLL:EXT:backend/Resources/Private/Language/locallang_mod.xlf'
    ]
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
    'site',
    'configuration',
    'top',
    '',
    [
        'routeTarget' => \TYPO3\CMS\Backend\Controller\SiteConfigurationController::class . '::handleRequest',
        'access' => 'admin',
        'name' => 'site_configuration',
        'icon' => 'EXT:backend/Resources/Public/Icons/module-sites.svg',
        'labels' => 'LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration_module.xlf'
    ]
);

// "Sort sub pages" csh
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    'pages_sort',
    'EXT:backend/Resources/Private/Language/locallang_pages_sort_csh.xlf'
);
// "Create multiple pages" csh
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    'pages_new',
    'EXT:backend/Resources/Private/Language/locallang_pages_new_csh.xlf'
);

// Csh manual
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
    'help',
    'cshmanual',
    'top',
    '',
    [
        'routeTarget' => \TYPO3\CMS\Backend\Controller\HelpController::class . '::handleRequest',
        'name' => 'help_cshmanual',
        'access' => 'user,group',
        'icon' => 'EXT:backend/Resources/Public/Icons/module-cshmanual.svg',
        'labels' => 'LLL:EXT:backend/Resources/Private/Language/locallang_mod_help_cshmanual.xlf',
    ]
);

/**
 * Extension: about
 * File: C:/xampp 7.3/htdocs/kup-v9/public/typo3/sysext/about/ext_tables.php
 */

$_EXTKEY = 'about';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
    'help',
    'AboutAbout',
    'top',
    null,
    [
        'routeTarget' => \TYPO3\CMS\About\Controller\AboutController::class . '::indexAction',
        'access' => 'user,group',
        'name' => 'help_AboutAbout',
        'icon' => 'EXT:about/Resources/Public/Icons/module-about.svg',
        'labels' => 'LLL:EXT:about/Resources/Private/Language/Modules/about.xlf'
    ]
);

/**
 * Extension: extensionmanager
 * File: C:/xampp 7.3/htdocs/kup-v9/public/typo3/sysext/extensionmanager/ext_tables.php
 */

$_EXTKEY = 'extensionmanager';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
    'TYPO3.CMS.Extensionmanager',
    'tools',
    'extensionmanager',
    '',
    [
        'List' => 'index,unresolvedDependencies,ter,showAllVersions,distributions',
        'Action' => 'toggleExtensionInstallationState,installExtensionWithoutSystemDependencyCheck,removeExtension,downloadExtensionZip,reloadExtensionData',
        'Configuration' => 'showConfigurationForm,save,saveAndClose',
        'Download' => 'checkDependencies,installFromTer,installExtensionWithoutSystemDependencyCheck,installDistribution,updateExtension,updateCommentForUpdatableVersions',
        'UpdateScript' => 'show',
        'UpdateFromTer' => 'updateExtensionListFromTer',
        'UploadExtensionFile' => 'form,extract',
        'Distribution' => 'show'
    ],
    [
        'access' => 'systemMaintainer',
        'icon' => 'EXT:extensionmanager/Resources/Public/Icons/module-extensionmanager.svg',
        'labels' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_mod.xlf',
    ]
);

/**
 * Extension: filelist
 * File: C:/xampp 7.3/htdocs/kup-v9/public/typo3/sysext/filelist/ext_tables.php
 */

$_EXTKEY = 'filelist';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
    'TYPO3.CMS.Filelist',
    'file',
    'list',
    '',
    [
        'FileList' => 'index, search',
    ],
    [
        'access' => 'user,group',
        'workspaces' => 'online,custom',
        'icon' => 'EXT:filelist/Resources/Public/Icons/module-filelist.svg',
        'labels' => 'LLL:EXT:filelist/Resources/Private/Language/locallang_mod_file_list.xlf'
    ]
);

/**
 * Extension: tstemplate
 * File: C:/xampp 7.3/htdocs/kup-v9/public/typo3/sysext/tstemplate/ext_tables.php
 */

$_EXTKEY = 'tstemplate';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
    'web',
    'ts',
    '',
    '',
    [
        'routeTarget' => \TYPO3\CMS\Tstemplate\Controller\TypoScriptTemplateModuleController::class . '::mainAction',
        'access' => 'admin',
        'name' => 'web_ts',
        'icon' => 'EXT:tstemplate/Resources/Public/Icons/module-tstemplate.svg',
        'labels' => 'LLL:EXT:tstemplate/Resources/Private/Language/locallang_mod.xlf'
    ]
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
    'web_ts',
    \TYPO3\CMS\Tstemplate\Controller\TypoScriptTemplateConstantEditorModuleFunctionController::class,
    null,
    'LLL:EXT:tstemplate/Resources/Private/Language/locallang.xlf:constantEditor'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
    'web_ts',
    \TYPO3\CMS\Tstemplate\Controller\TypoScriptTemplateInformationModuleFunctionController::class,
    null,
    'LLL:EXT:tstemplate/Resources/Private/Language/locallang.xlf:infoModify'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
    'web_ts',
    \TYPO3\CMS\Tstemplate\Controller\TypoScriptTemplateObjectBrowserModuleFunctionController::class,
    null,
    'LLL:EXT:tstemplate/Resources/Private/Language/locallang.xlf:objectBrowser'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::insertModuleFunction(
    'web_ts',
    \TYPO3\CMS\Tstemplate\Controller\TemplateAnalyzerModuleFunctionController::class,
    null,
    'LLL:EXT:tstemplate/Resources/Private/Language/locallang.xlf:templateAnalyzer'
);

/**
 * Extension: bootstrap_package
 * File: C:/xampp 7.3/htdocs/kup-v9/public/typo3conf/ext/bootstrap_package/ext_tables.php
 */

$_EXTKEY = 'bootstrap_package';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;



/*
 * This file is part of the package bk2k/bootstrap-package.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3_MODE') || die();

/***************
 * Allow Custom Records on Standard Pages
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bootstrappackage_accordion_item');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bootstrappackage_card_group_item');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bootstrappackage_carousel_item');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bootstrappackage_icon_group_item');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bootstrappackage_tab_item');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bootstrappackage_timeline_item');

/**
 * Extension: extension_builder
 * File: C:/xampp 7.3/htdocs/kup-v9/public/typo3conf/ext/extension_builder/ext_tables.php
 */

$_EXTKEY = 'extension_builder';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;


defined('TYPO3_MODE') || die();

if (TYPO3_MODE === 'BE') {
    /**
     * Register Backend Module
     */
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'EBT.ExtensionBuilder',
        'tools',
        'extensionbuilder',
        '',
        [
            'BuilderModule' => 'index,domainmodelling,dispatchRpc',
        ],
        [
            'access' => 'user,group',
            'icon' => 'EXT:extension_builder/Resources/Public/Icons/Extension.svg',
            'labels' => 'LLL:EXT:extension_builder/Resources/Private/Language/locallang_mod.xlf',
        ]
    );
}

/**
 * Extension: tmpl
 * File: C:/xampp 7.3/htdocs/kup-v9/public/typo3conf/ext/tmpl/ext_tables.php
 */

$_EXTKEY = 'tmpl';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] ?? null;



use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3_MODE') || die();

/***************
 * TypoScript: Framework
 * Include Template-Package
 */
ExtensionManagementUtility::addStaticFile(
    '$_EXTKEY',
    'Configuration/TypoScript',
    'Template-Package'
);

#