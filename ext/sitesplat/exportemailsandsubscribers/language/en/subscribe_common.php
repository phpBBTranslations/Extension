<?php
/**
*
* Export emails and subscribers extension for the phpBB Forum Software package.
*
* @copyright (c) 2015 SiteSplat <http://www.sitesplat.com>
* @license SiteSplat 2015 all rights reserved
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

$lang = array_merge($lang, array(
	'SUBSCRIBE_TO_MAILING_LIST'		=> 'Subscribe to e-mail list',
	'SUBSCRIBE_EMAIL'	=> 'Your e-mail',
	'SUBSCRIBE_BUTTON'	=> 'Subscribe now',
	'SUBSCRIBE_ERROR'	=> 'Invalid e-mail address',
	'SUBSCRIBE_SUCCESS'	=> 'Subscribed successfully!',
));
