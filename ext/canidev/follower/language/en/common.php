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
	'COMMENT_ADD'			=> 'New comment',

	'ADD_PHOTOS'			=> 'Add images',
	'COMMENTS'				=> 'Comments',
	'COPY_COMMENT_LINK'		=> 'Copy comment link',
	'EDIT'					=> 'Edit',
	'FOLLOW'				=> 'Follow',
	'FOLLOWING'				=> 'Following',
	'FOLLOWING_BY'			=> 'Follow by %s',
	'FOLLOWER'				=> 'User Follower',
	'FOLLOWERS'				=> 'Followers',
	'FWR_HOME'				=> 'Cronology',
	'FWR_REPLY'				=> 'Reply',
	'FWR_REPLY_PLACEHOLDER'	=> 'Reply...',
	'LIKE'					=> 'Like',
	'LIKE_UNDO'				=> 'No like',
	'LOAD_MORE'				=> 'Load more',
	'MENTIONS'				=> 'Mentions',
	'MENTION_USER'			=> 'Mention user',
	'NO_COMMENT'			=> 'The selected comment no exists',
	'NO_ITEMS'				=> 'No elements to show',
	'NO_RESULTS'			=> 'No results',
	'PUBLISH'				=> 'Publish',
	'RECENT_ACTIVITY'		=> 'Recent Activity',
	'RESULTS_OF'			=> '<strong>Results of:</strong> <em>%s</em>',
	'RESULTS_USER'			=> '<strong>Users:</strong> <em>%s</em>',
	'SAVE'					=> 'Save',
	'SEARCH_RESULTS'		=> 'Search results',
	'SHARE'					=> 'Share',
	'SHARE_UNDO'			=> 'No Share',
	'SHARED_BY'				=> 'Shared by %s',
	'SOMEBODY'				=> 'Somebody',
	'TITLE_FOLLOWING'		=> 'People who follow %s',
	'TITLE_FOLLOWERS'		=> 'People that follow %s',
	'TITLE_POSTS'			=> 'Posts posted by %s',
	'TITLE_TOPICS'			=> 'Topics published by %s',
	'TITLE_WALL'			=> 'Wall of %s',
	'TRENDS'				=> 'Trends',
	'UNFOLLOW'				=> 'No Follow',
	'UNSHARE'				=> 'No Share',
	'USER_INFO'				=> 'About %s',
	'USER_WALL'				=> 'User wall',
	'USUAL_POSTER'			=> 'Usual poster',
	'VIEW_ALL'				=> 'View all',
	'VIEW_COMMENT_RESULTS'	=> 'See comment results',
	'VISITED'				=> 'Last visit',
	'WALL'					=> 'Wall',
	'WALL_IN_REPLY'			=> 'In reply to &uarr;',
	'WALL_REPLIES'			=> 'Replies &darr;',
	'WHO_FOLLOW'			=> 'Who follow',
	'WRITE_TO_WALL'			=> 'Write something to %s',
	'YEARS_OLD'				=> 'years old',

	'EMPTY_MY_HOME'			=> 'Here you will see the activity of the people you are following.',
	'EMPTY_MY_FOLLOWERS'	=> 'Here the people following you will be displayed.',
	'EMPTY_MY_FOLLOWING'	=> 'Here you will see the people you follow.',
	'EMPTY_MY_MENTIONS'		=> 'Here you will see the comments or messages in which your name is mentioned.',
	'EMPTY_MY_POSTS'		=> 'Here you will see the messages posted in the forum.',
	'EMPTY_MY_TOPICS'		=> 'Here you will see the topics created in the forum.',
	'EMPTY_MY_WALL'			=> 'This is your personal wall<br />Here your comments will be displayed.',
	'EMPTY_MY_WALL_NO_AUTH'	=> '<em>You do not have permission to post comments</em>.',

	'EMPTY_OTHER_FOLLOWERS'	=> 'Nobody follows %s yet.',
	'EMPTY_OTHER_FOLLOWING'	=> '%s still does not follow anyone.',
	'EMPTY_OTHER_POSTS'		=> '%s has not written any message yet.',
	'EMPTY_OTHER_TOPICS'	=> '% s has not created any topic yet.',
	'EMPTY_OTHER_WALL'		=> '% s has not shared anything yet.',
	
	'LINK_CLIPBOARD_ERROR'		=> 'The link could not be copied',
	'LINK_CLIPBOARD_SUCCESS'	=> 'Link copied to clipboard',

	'POST_ROW'			=> '<span style="font-weight:bold;font-size:0.9em;">Post:</span> <a href="%1$s">%2$s</a><br /><span class="row-small">%3$s</span>',
	'TOPIC_ROW'			=> '<span style="font-weight:bold;font-size:0.9em;">Topic:</span> <a href="%1$s">%2$s</a><br /><span class="row-small"> &raquo; In <a href="%3$s">%4$s</a></span>',
	
	// Notifications
	'FW_NOTIFICATION_BIRTHDAY'			=> '<strong>Today is the birthday of %s</strong><br />Write something on his wall to congratulate it',
	
	'FW_NOTIFICATION_COMMENT'			=> array(
		1	=> '%s posted a comment on his wall',
		2	=> '%s posted a comment on their wall',
	),

	'FW_NOTIFICATION_FOLLOW'			=> '%s has started to follow you',
	'FW_NOTIFICATION_MENTION_COMMENT'	=> '%s mentioned you in a message on his wall',
	'FW_NOTIFICATION_MENTION_POST'		=> '%s has mentioned you in the topic:',
	
	'FW_NOTIFICATION_LIKE_COMMENT'	=> array(
		1	=> '%s liked a comment of yours',
		2	=> '%s liked a comment of yours',
	),
	
	'FW_NOTIFICATION_LIKE_POST'		=> array(
		1	=> '%s liked a message you posted',
		2	=> '%s liked a message you posted',
	),

	'FW_NOTIFICATION_REPLY'		=> '%s has replied to a comment on your wall',
	
	'FW_NOTIFICATION_SHARE'			=> array(
		1	=> '%s has shared a comment on your wall',
		2	=> '%s have shared a comment on your wall',
	),

	'SUBSCRIPTION_REMOVED'				=> 'The subscription has been removed successfully.',
	
	// Install
	'EXT_INSTALL_ERROR'		=> 'This extension is not compatible with some installed extension.<br />Check the documentation for more information.',
	'CORE_INSTALL_ERROR'	=> 'You have not uploaded all the files from the installation package or you are trying to install an old package.<br />
		Please make sure to upload all the files (including the <em>core</em> folder) and use a package downloaded from the official website.',
));
