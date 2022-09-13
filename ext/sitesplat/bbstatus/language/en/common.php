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
	'BBSTATUS_NOTIFICATION'	    => 'Your friend, %s has published a new status:',

	'NOTIFICATION_TYPE_SITESPLAT.BBSTATUS.NOTIFICATION.TYPE.FRIEND_NEW_STATUS'	=> 'Your friend published a new status',

	'STATUS_PUBLISHED'	        => 'Status published successfully',
	'MAX_5_TEMPLATES'	        => 'You can only have maximum of 5 templates.',
    'BBSTATUS_PLACEHOLDER_BBEMOJI_MAX'	        => '&nbsp;-&nbsp;NOTE: 3 Emoji max',
	
	'STATUS_SETTINGS'	        => 'Edit Status Settings',
	
	'BBSTATUS_CURRENT_EXPLAIN'	=> '&#49;&#41; Type in a status, &#50;&#41; Set a color, &#51;&#41; Optionally save it as template, &#52;&#41; Publish / Save',
	'STATUS_TEMPLATE'	        => 'Templates saved',
	'STATUS_TEMPLATE_EXPLAIN'	=> 'The saved templates can be used quickly from the forum main navigation to quickly switch statuses.',
	'STATUS_SAVE_TEMPLATE'	    => 'Save as template',
	
	'BBSTATUS_PLACEHOLDER'	    => 'Enter you current status, supports BBemoji extension. IE: at school :smile:',
	'BBSTATUS_CURRENT'	        => 'Current status',
	'BBSTATUS_CURRENT_COLOR'	=> 'Current status color',
	
	'DELETE_STATUS_BTN_AJAX'	=> '&nbsp;&nbsp;&#45;&nbsp;<i class="fa fa-trash"></i>&nbsp; Delete',
	'STATUS_PUBLISH'	        => 'Publish / Save',
	'STATUS_PUBLISHED'	        => 'Published / Saved Successfully!',
	'STATUS_CLEAR'	            => 'Clear Personal Status',
	'STATUS_CLEARED'	        => 'Personal Status Cleared!',
	'BBSTATUS_POSTROW_STATUS'   => 'Personal status',
	
	'NO_STATUS'	=> 'Hey there, no status saved yet. Why don\'t you add what you are up to? :-)',
));
