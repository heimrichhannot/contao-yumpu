<?php
/**
 * Contao Open Source CMS
 * 
 * Copyright (c) 2015 Heimrich & Hannot GmbH
 * @package yumpu
 * @author Rico Kaltofen <r.kaltofen@heimrich-hannot.de>
 * @license http://www.gnu.org/licences/lgpl-3.0.html LGPL
 */


/**
 * Content elements
 */
$GLOBALS['TL_CTE']['media']['yumpu'] = 'HeimrichHannot\Yumpu\ContentYumpu';

/**
 * Javascript
 */
if(TL_MODE == 'FE')
{
	$GLOBALS['TL_USER_CSS']['yumpu'] = 'system/modules/yumpu/assets/css/yumpu.css|screen|static|1.0.0';
}
