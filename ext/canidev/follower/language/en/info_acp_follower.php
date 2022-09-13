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
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

/**
 * @acp_follower
*/
$lang = array_merge($lang, array(
	'ACP_CAT_FOLLOWER'			=> 'Follower',

	'ACP_FOLLOWER_COMMENTS'			=> 'Comment settings',
	'ACP_FOLLOWER_CONFIG'			=> 'Main configuration',
	'ACP_FOLLOWER_CONFIG_EXPLAIN'	=> 'Thank you for choosing cBB Follower as a complement to your forum! <br /> From this page you can modify the main characteristics of the user follower.',
	'ACP_FOLLOWER_TOOLS'			=> 'Tools',
	'ACP_FOLLOWER_TOOLS_EXPLAIN'	=> 'Here you will find additional tools for the administration of the extension.',

	'FWR_ADVANCED_COMMENTS'			=> 'Advanced information in the comments',
	'FWR_ADVANCED_COMMENTS_EXPLAIN'	=> 'Define whether images will be allowed to be included in comments on the wall.',
	'FWR_ALLOW_COMMENTS'			=> 'Activate comments between users',
	'FWR_DEFAULT_PROFILE'			=> 'Set as default profile',
	'FWR_DEFAULT_PROFILE_EXPLAIN'	=> 'If enabled, the wall and movement of users will be displayed instead of their conventional profile.',
	'FWR_MAXLENGTH'					=> 'Maximum characters',
	'FWR_MAXLENGTH_EXPLAIN'			=> 'Limit of characters allowed in the comments.',
	'FWR_POPUP_ALL'					=> 'Show in the whole forum',
	'FWR_POPUP_NONE'				=> 'Do not show',
	'FWR_POPUP_PROFILE'				=> 'Show only in profile',
	'FWR_ROW_LIMIT'					=> 'Maximum rows',
	'FWR_ROW_LIMIT_EXPLAIN'			=> 'Maximum number of rows that will be displayed simultaneously.',
	'FWR_RESIZE_IMAGES'				=> 'Resize images',
	'FWR_RESIZE_IMAGES_EXPLAIN'		=> 'If enabled, uploaded images will be resized to the maximum size specified for forum attachments.',
	'FWR_RESYNC_COMMENTS'			=> 'Synchronize comments',
	'FWR_RESYNC_COMMENTS_EXPLAIN'	=> 'Recalculates the total number of comments published by each user.',
	'FWR_RESYNC_FOLLOWERS'			=> 'Sync followers',
	'FWR_RESYNC_FOLLOWERS_EXPLAIN'	=> 'Recalculates the total number of followers of each user.',
	'FWR_RESYNC_INTERACTIONS'			=> 'Synchronize interactions',
	'FWR_RESYNC_INTERACTIONS_EXPLAIN'	=> 'Recalculate the number of interactions (Like / Share) of posts and comments.',
	'FWR_RESYNC_SUCCESS'			=> 'The synchronization was successful',
	'FWR_STORE_TIME'				=> 'Save user comments',
	'FWR_STORE_TIME_EXPLAIN'		=> 'If a time limit is set, comments that are outside that limit will be automatically deleted.',
	'FWR_USER_POPUP'				=> 'Show floating information box',
	'FWR_USER_POPUP_EXPLAIN'		=> 'Determines in what circumstances a floating box with user information will be displayed when the mouse moves over its name.',
	
	'NO_LIMIT'		=> 'No limit',
	'ONE_DAY'		=> 'One day',
	'ONE_WEEK'		=> 'One week',
	'ONE_MONTH'		=> 'One month',
	'ONE_YEAR'		=> 'One year',
	'TWO_YEARS'		=> 'Two years',
	
	'LOG_FWR_CONFIG'				=> '<strong>cBB Follower</strong> Modified main configuration',
	'LOG_FWR_RESYNC_COMMENTS'		=> '<strong>cBB Follower</strong> Synchronized comments',
	'LOG_FWR_RESYNC_FOLLOWERS'		=> '<strong>cBB Follower</strong> Synchronized followers',
	'LOG_FWR_RESYNC_INTERACTIONS'	=> '<strong>cBB Follower</strong> Synchronized interactions',
));
