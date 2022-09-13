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
	'ABOUTME'					=> 'About me',
	'ABOUTME_EXPLAIN'			=> 'Small text (max 500 characters), visible by other users.',
	'ERROR_ABOUTME_TOO_LONG'	=> 'The "About me" field contains more characters than allowed',
	'HEADER_IMAGE'				=> 'Profile image',
	'HEADER_IMAGE_EXPLAIN'		=> 'Image that will be displayed as the background of the header of your profile.',
	
	// Notifications
	'NOTIFICATION_GROUP_FOLLOWER'	=> 'User follower notifications',
	'FW_NOTIFICATION_TYPE_BIRTHDAY'	=> 'Someone you follow has a birthday',
	'FW_NOTIFICATION_TYPE_COMMENT'	=> 'Someone post a comment on your wall',
	'FW_NOTIFICATION_TYPE_FOLLOW'	=> 'Someone follow you',
	'FW_NOTIFICATION_TYPE_LIKE'		=> 'Someone likes a comment or message from you',
	'FW_NOTIFICATION_TYPE_MENTION'	=> 'Someone mentioned in a comment or message',
	'FW_NOTIFICATION_TYPE_POST'		=> 'Someone you follow post a message',
	'FW_NOTIFICATION_TYPE_REPLY'	=> 'Someone respond to a comment on your wall',
	'FW_NOTIFICATION_TYPE_SHARE'	=> 'Someone share a comment on your wall',
	'FW_NOTIFICATION_TYPE_TOPIC'	=> 'Someone you follow posting a topic',
));
