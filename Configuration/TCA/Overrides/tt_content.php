<?php

// Add pi1 plugin
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['pagebrowse_pi1'] = 'layout,select_key,pages';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['pagebrowse_pi1'] = 'pi_flexform';
ExtensionManagementUtility::addPlugin(['LLL:EXT:pagebrowse/pi1/locallang.xml:tt_content.list_type_pi1', 'pagebrowse_pi1'], 'list_type', 'pagebrowse');
ExtensionManagementUtility::addPiFlexFormValue('pagebrowse_pi1', 'FILE:EXT:pagebrowse/pi1/flexform_ds.xml');
