<?php
/**
 *
 * BBprospective. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2016 SiteSplat All rights reserved
 * @license Proprietary
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'BBPROSPECTIVE_BBCHAT_REASON'	=> 'Your message is too toxic. Please, watch your language!',
));
