<?php
/**
 *
 * @package phpBB Extension - Maintenance mode
 * @copyright (c) 2019 dmzx - https://www.dmzx-web.net
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
//
// Some characters for use
// ’ » “ ” …

$lang = array_merge($lang, [
	'MAINTENANCE_TEXT'				=> '%1$s is currently performing a maintenance upgrade to better serve you.',
	'MAINTENANCE_TEXT_APOLOGIZE'	=> 'We apologize for any inconvenience.',
	'MAINTENANCE_DAY'				=> 'Day',
	'MAINTENANCE_DAYS'				=> 'Days',
	'MAINTENANCE_HOUR'				=> 'Hour',
	'MAINTENANCE_HOURS'				=> 'Hours',
	'MAINTENANCE_MINUTE'			=> 'Minute',
	'MAINTENANCE_MINUTES'			=> 'Minutes',
	'MAINTENANCE_SECOND'			=> 'Second',
	'MAINTENANCE_SECONDS'			=> 'Seconds',
	'MAINTENANCE_TIMEIN'			=> 'More specifically, in:',
	'MAINTENANCE_INFO'				=> 'Maintenance upgrade',
]);
