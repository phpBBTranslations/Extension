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
    'ACL_U_SITESPLAT_BBPROSPECTIVE_BYPASS' => 'Can bypass BBprospective API',
));
