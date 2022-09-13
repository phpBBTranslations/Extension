<?php

/**
*
* @package ED2K Links
* @copyright (c) 2016-2019 bitERROR & Leinad4Mind
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
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
// Some characters you may want to copy&paste:
// ’ » “ ” …

$lang = array_merge($lang, [
	'ED2K_URL'				=> 'http://edk.peerates.net/check.php?p=%s',
  //'ED2K_URL'				=> 'http://ed2k.shortypower.org/?hash=%s',
	'ED2K_STATS'			=> 'File statistics',
	'ED2K_VIEW'				=> 'View the %1$s links',
	'ED2K_ADD'				=> 'Add the %1$s links',
	'ED2K_COPY'				=> 'Copy the %1$s Links',
	'ED2K_LINKS_TITLE'		=> 'Preview links',
	'ED2K_LINKS_TEXT'		=> 'Text mode links:',
	'BYTES'					=> 'Bytes',
	'KILOBYTES'				=> 'Kb',
	'MEGABYTES'				=> 'Mb',
	'GIGABYTES'				=> 'Gb',
	'TERABYTES'				=> 'Tb',
	'PETABYTES'				=> 'Pb',
	'EXABYTES'				=> 'Eb',
	'ZETTABYTES'			=> 'Zb',
	'YOTTABYTES'			=> 'Yb',
]);
