<?php
/**
*
* @package BBdownloads
* @copyright (c) 2016 SiteSplat All rights reserved
* @license Proprietary
*
*/
/**
* @ignore
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
	'BBDOWNLOADS'				=> 'Downloads',
	'VERSION'					=> 'version',
	'VERSION_V'					=> 'v.',
	'DOWNLOAD'					=> 'Download',
	'CHANGELOG'					=> 'Changelog',
	'DOWNLOAD_INDEX'			=> 'Download Index',
	'DIRECORY_TREE'				=> 'Directory Tree',
	
	'BBDOWNLOAD_FUNC_DISABLED'	=> 'Whoops! Looks like you do not have permission to download this file',
	'BBDOWNLOAD_TO_FEW_POINTS'	=> 'You have not enough BBpoints, you need at least %s BBpoints',
	
	'NEWARTICLE'				=> 'New downloads',
	'POPARTICLE'				=> 'Popular downloads',
	'OTHERS'					=> 'Others downloaded',

	'CATEGORY'					=> 'Category',
	'MCP_CLASSIFIEDS'			=> 'Classifieds queue',
	'MCP_TITLE'					=> 'Download title',
	'MCP_OWNER'					=> 'Owner',
	
	

	'NOTIFICATION_TYPE_BBDOWNLOADS_ADD'		=> 'New Downloads added',
	'NOTIFICATION_TYPE_BBDOWNLOADS_VERSION'	=> 'New Downloads versions added',
	'BBDOWNLOADS_NOTIFICATION_ADD'			=> '<strong>New download added</strong>:<br /><a href="%2$s">%1$s</a>',
	'BBDOWNLOADS_NOTIFICATION_VERSION'		=> '<strong>New version added</strong>:<br /><a href="%2$s">%1$s</a>',

));
