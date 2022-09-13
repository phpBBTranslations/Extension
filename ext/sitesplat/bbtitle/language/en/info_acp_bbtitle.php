<?php
/**
*
* @package BBtitle
* @copyright (c) 2016 SiteSplat All rights reserved
* @license Proprietary
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'BBTITLE_LOCATION'			=> 'BBTitle Location',
	'BBTITLE_LOCATION_EXPLAIN'	=> 'This setting lets you choose where the BBtitle is displayed in regards to the user\'s rank. You can show it above (before), below (after) or instead of (replaces) the rank.',
	'BBTITLE_BEFORE_RANK'		=> 'Before user rank',
	'BBTITLE_REPLACES_RANK'		=> 'Replace user rank',
	'BBTITLE_AFTER_RANK'		=> 'After user rank',

    'BBTITLE_NOTICE'			=> '<div class="phpinfo"><p>The settings for this extension are in <strong>%1$s » %2$s » %3$s</strong>.</p></div>',
	'SS_HELPER_NOTY'			=> 'SiteSplat BBcore does not exist!<br />Download the <a href="http://sitesplat.com" target="_blank">BBcore</a> and copy the BBcore folder into your sitesplat extension folder.',
));
