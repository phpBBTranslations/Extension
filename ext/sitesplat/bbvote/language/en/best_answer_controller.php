<?php
/**
 *
 * @package BBvote
 * @copyright (c) 2019 SiteSplat All rights reserved
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
	'POST_DOESNT_EXIST'		=> 'Post doesn\'t exist.',
	'BBVOTE_NOT_ALLOWED'	=> 'Voting is not allowed in this forum',
	'NOT_ALLOWED'			=> 'You are not allowed to mark this post as the best answer.',
	'MARK_SUCCESS'			=> 'Post was marked as the best answer.<br><br><a href="%s">Back to the post</a>',
	'UNMARK_SUCCESS'		=> 'Post was unmarked as the best answer.<br><br><a href="%s">Back to the post</a>',
));
