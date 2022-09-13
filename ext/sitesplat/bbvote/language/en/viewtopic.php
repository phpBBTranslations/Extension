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
	'MARK_BEST_ANSWER'		=> 'Mark this answer as the best answer',
	'UNMARK_BEST_ANSWER'	=> 'Unmark this answer as the best answer',

	'ALREADY_VOTED'		=> 'You have already voted on this post',
	'NOT_ENOUGH_POINTS'	=> 'You don\'t have enough points to vote. You need %d points.',
	'NO_SELF_POSTS'		=> 'You cannot vote on your posts',
	'REMOVE_OWN'		=> 'Remove your current vote',

	'POSTER_POINTS'	=> 'Reputation Points',

	'TOPIC_BOUNTY'	=> 'There is a bounty of %d points for answering this question!',

	'MSG_UPVOTED'	=> 'Upvoted successfully.',
	'MSG_DOWNVOTED'	=> 'Downvoted successfully.',
	'MSG_XVOTED'	=> 'Your vote has been removed successfully.',
	'MSG_VOTE_MARKED'	=> 'The post was also automatically marked as best answer, as it received enough up-votes!',
	'MSG_MARKED'	=> 'Excellent! post marked as best answer!',
	'MSG_UNMARKED'	=> 'Post unmarked as best answer.',
	
	'SORT_VOTES'	=> 'Votes',
));
