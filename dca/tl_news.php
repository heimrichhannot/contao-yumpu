<?php
/**
 * Contao Open Source CMS
 * 
 * Copyright (c) 2015 Heimrich & Hannot GmbH
 * @package yumpu
 * @author Rico Kaltofen <r.kaltofen@heimrich-hannot.de>
 * @license http://www.gnu.org/licences/lgpl-3.0.html LGPL
 */

\Controller::loadLanguageFile('tl_content');

$dc = &$GLOBALS['TL_DCA']['tl_news'];

/**
 * Palettes
 */

$dc['palettes']['__selector__'][] = 'addYumpu';
$dc['palettes']['default'] = str_replace('addImage;', 'addImage;{yumpu_legend},addYumpu;', $dc['palettes']['default']);

/**
 * Subpalettes
 */

$dc['subpalettes']['addYumpu'] = 'yumpuConfigID';

/**
 * Fields
 */

$arrFields = array
(
	'addYumpu' => array
	(
		'label'                   => &$GLOBALS['TL_LANG']['tl_news']['addYumpu'],
		'exclude'                 => true,
		'inputType'               => 'checkbox',
		'eval'                    => array('submitOnChange'=>true),
		'sql'                     => "char(1) NOT NULL default ''"
	),
	'yumpuConfigID' => array
	(
		'label'                   => &$GLOBALS['TL_LANG']['tl_content']['yumpuConfigID'],
		'exclude'                 => true,
		'search'                  => true,
		'inputType'               => 'text',
		'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
		'sql'                     => "varchar(255) NOT NULL default ''"
	)
);

$dc['fields'] = array_merge($dc['fields'], $arrFields);