<?php

/**
*
* @package Collapsing Quotes
* @copyright (c) 2019 Leinad4Mind
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
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

$lang = array_merge($lang, [
	'CLICK_TO_EXPAND' => 'Click to expand ...',
]);
