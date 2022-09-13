<?php
/**
*
* @package BBstatus
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
	'ACL_U_PUBLISH_STATUSES'	=> 'Can publish statuses',
	'ACL_U_READ_STATUSES'		=> 'Can read statuses',
));
