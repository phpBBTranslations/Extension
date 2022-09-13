<?php
/**
* [English [En]]
* @package cBB Follower
* @version 2.0.3 01/06/2022
*
* @copyright (c) 2022 CaniDev
* @license https://creativecommons.org/licenses/by-nc/4.0/
*/

// DO NOT CHANGE
if(!defined('IN_PHPBB'))
{
	exit;
}

if(empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACL_CAT_FOLLOWER'			=> 'Follower',
	
	'ACL_U_FWR_FOLLOW'			=> 'Can follow users',
	'ACL_U_FWR_INTERACTION'		=> 'Can share and rate comments and messages',
	'ACL_U_FWR_MANAGE'			=> 'Can edit/delete the comments of their wall',
	'ACL_U_FWR_MENTION'			=> 'Can mention users',
	'ACL_U_FWR_PUBLISH'			=> 'Can publish commens on their wall',
	
	'ACL_M_FOLLOWER_MANAGE'		=> 'Can edit/delete comments',
));
