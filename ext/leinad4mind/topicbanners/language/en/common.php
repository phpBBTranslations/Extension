<?php

/**
 *
 * Topic Banners. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2019, Leinad4Mind, https://leinad4mind.top/forum
 * @license GNU General Public License, version 2 (GPL-2.0)
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
	// Display texts
	'TOPIC_BANNER_TOPIC_TITLE_STATIC'	=> 'My Static Title Here',

	// Form elements
	'TOPIC_BANNER_ENTER_TOPIC'			=> 'Enter Topic',
	'TOPIC_BANNER_TITLE_URL'			=> 'Static URL',
	'TOPIC_BANNER'						=> 'Logo URL',
	'TOPIC_BANNER_TOPIC'				=> 'Topic',
	'TOPIC_BANNER_TOPIC_URL'			=> 'Topic / URL',
	'TOPIC_BANNER_TYPE'					=> 'Crystal',
	'TOPIC_BANNER_FEATURING'			=> 'Featuring',
	'TOPIC_BANNER_FEATURING_URL'		=> 'Featuring / URL',
	'TOPIC_BANNER_RELEASE_DATE'			=> 'Release date',
]);
