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
	'BBVOTE_SEARCH_GIVEN'		=> 'Search given best answers',
	'BBVOTE_SEARCH_RECEIVED'	=> 'Search received best answers',
	
	'BBVOTE_POST_BOUNTY'	=> 'Bounty',

	'NOTIFICATION_POST_NEGATIVE_TITLE'	=> 'A post received too many downvotes.',
	'NOTIFICATION_UPVOTE_TITLE'			=> 'You received an upvote!',
	'NOTIFICATION_DOWNVOTE_TITLE'		=> 'You received a downvote.',
	'NOTIFICATION_BEST_ANSWER_TITLE'	=> 'Your post has been marked as the best answer!',
));
